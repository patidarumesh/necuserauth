Project Title
This is a web application that includes a registration page, a login page, and a forget password page. It is built using HTML, CSS, PHP, and MySQL.

Getting Started
To run this project, you need to have a web server installed on your local machine. You can use XAMPP or WAMP for this purpose.

Prerequisites
Web server (XAMPP or WAMP)
MySQL database
Web browser
Installation
Clone the repository or download the zip file and extract it in your web server's root directory (htdocs for XAMPP and www for WAMP).
Create a new database in your MySQL server.
Import the database schema from the "database.sql" file in the project directory.
Update the database connection settings in the "databaseConn.php" file in the project directory.
Open your web browser and navigate to the project URL.
Usage
Registration Page
The registration page allows new users to create an account by providing their name, email, and password. If the registration is successful, the user will be redirected to the login page.

Login Page
The login page allows existing users to log in to their account by providing their email and password. If the login is successful, the user will be redirected to the dashboard page. If the login fails, an error message will be displayed.

Forget Password Page
The forget password page allows users to reset their password if they forget it. The user will be prompted to enter their registered email address. If the email address is valid, the user will receive an email with instructions on how to reset their password.

Contributing
Contributions are welcome. Please feel free to fork the repository and submit a pull request.

License
This project is licensed under the MIT License. See the LICENSE file for details.