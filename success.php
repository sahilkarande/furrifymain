<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Successful</title>
</head>
<body>
    <h1>Form Submission Successful</h1>
    <p>Thank you for your submission! Your information has been successfully recorded.</p>
    <!-- You can include additional content or links here -->

    <script>
        // Function to clear form fields
        function clearFormFields() {
            document.getElementById("form").reset(); // Assuming your form has the ID "form"
        }

        // Call the clearFormFields function when the page loads
        window.onload = clearFormFields;
    </script>
</body>
</html>
