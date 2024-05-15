import streamlit as st
import pymysql
import pandas as pd
from streamlit_echarts import st_echarts

st.set_page_config(
    page_title="Ex-stream-ly Cool App",
    page_icon="🧊",
    layout="wide",
    initial_sidebar_state="expanded",
    menu_items={
        'Get Help': 'https://www.extremelycoolapp.com/help',
        'Report a bug': "https://www.extremelycoolapp.com/bug",
        'About': "# This is a header. This is an *extremely* cool app!"
    }
)

# Define database connection parameters
DB_HOST = 'localhost'
DB_USER = 'root'
DB_PASS = ''
DB_NAME = 'furrify3'

# Create a MySQL connection
conn = pymysql.connect(host=DB_HOST, user=DB_USER, password=DB_PASS, database=DB_NAME)

# Function to fetch all table names from the database
def fetch_tables():
    query = "SHOW TABLES"
    with conn.cursor() as cursor:
        cursor.execute(query)
        tables = cursor.fetchall()
        table_names = [table[0] for table in tables]
    return table_names

# Function to fetch data from a selected table
def fetch_data_from_table(table_name):
    query = f'SELECT * FROM {table_name}'
    df = pd.read_sql(query, conn)
    return df

# Create a sidebar for login
st.sidebar.title('Login')
login_username = st.sidebar.text_input('Username')
login_password = st.sidebar.text_input('Password', type='password')
login_button = st.sidebar.button('Login')

# Check if the login button is clicked and credentials are correct
if login_button and login_username == 'SSO' and login_password == 'SSO':
    st.sidebar.success('Login successful!')
    login_status = True
else:
    login_status = False

# Display the login section
if not login_status:
    st.sidebar.error('Invalid username or password. Please try again.' if login_button else '')
    st.stop()

# Fetch all table names from the database
tables_list = fetch_tables()

# Display the list of tables if logged in
if login_status:
    st.sidebar.title("Database Tables")
    selected_table = st.sidebar.selectbox("Select a table", tables_list)

    # Display metrics
    st.title('Website Metrics')
    
    # Fake data for metrics
    num_users = 23
    num_dogs = 12
    num_cats = 11

    col1, col2, col3 = st.columns(3)
    with col1:
        st.metric("Number of Users", num_users)
    with col2:
        st.metric("Number of Dogs Registered", num_dogs)
    with col3:
        st.metric("Number of Cats Registered", num_cats)

    # Fetch and display data from the selected table
    if selected_table:
        data = fetch_data_from_table(selected_table)

        # Create two columns for table and pie chart
        col1, col2 = st.columns(2)

        with col1:
            # Display the table data
            st.subheader(f"Volunteers Report")
            st.dataframe(data)

            # Create a search filter for Full_Name column
            if 'Full_Name' in data.columns:
                search_query = st.text_input('Search by Full Name')
                if search_query:
                    filtered_data = data[data['Full_Name'].str.contains(search_query, case=False)]
                    st.write(filtered_data)
                else:
                    st.write(data)

        with col2:
            # Create a pie chart of Street_Address using st_echarts
            if 'Street_Address' in data.columns:
                st.subheader('Pie Chart of Street Address')
                address_counts = data['Street_Address'].value_counts()
                pie_data = [{"value": value, "name": name} for name, value in address_counts.items()]

                options = {
                    "title": {"text": "Street Address Distribution", "left": "center"},
                    "tooltip": {"trigger": "item"},
                    
                    "series": [
                        {
                            "name": "Addresses",
                            "type": "pie",
                            "radius": "50%",
                            "data": pie_data,
                            "emphasis": {
                                "itemStyle": {
                                    "shadowBlur": 10,
                                    "shadowOffsetX": 0,
                                    "shadowColor": 'rgba(0, 0, 0, 0.5)'
                                }
                            }
                        }
                    ]
                }
                st_echarts(options)
