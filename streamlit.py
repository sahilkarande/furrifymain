import streamlit as st
import pymysql
import pandas as pd

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

# Set the default theme to light
st.set_page_config(layout="wide")

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
    selected_table = 'volunteer_details'

    # Fetch and display data from the selected table
    if selected_table:

        data = fetch_data_from_table(selected_table)


        # Use columns to organize the layout
        col1, col2 = st.columns(2)

        # Display the data table in the first column
        with col1:
            st.write(data)

        # Check if the selected table is 'volunteer_details' to create a pie chart
        if selected_table == 'volunteer_details':
            counts = data['Full_Name'].value_counts()

            # Display the bar chart in the second column
            with col2:
                st.write('Distribution of Volunteer Entries')
                st.bar_chart(counts)
