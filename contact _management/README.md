Project Description: A simple web-based contact management system that allows users to add, edit, and delete contacts.

Technologies Used:

HTML/CSS for the front-end
PHP for the back-end
MySQL for the database
PDO for database connection
Database Schema:

Table: contacts
Columns:

id (INT, primary key, auto increment)
name (VARCHAR)
email (VARCHAR)
phone (VARCHAR)
address (VARCHAR)
Functionality:

View contacts: Display a list of all contacts in the database.
Add contact: Allow users to add a new contact with a name, email, phone, and address.
Edit contact: Allow users to edit an existing contact's name, email, phone, and address.
Delete contact: Allow users to delete an existing contact.



INSTALLATION
I have created it using HTML, CSS, and bootstrap for front-end as well as PHP-PDO and Mysql database for back-end. Since it involves scripting i installed Xampp server which has some features like Apache for hosting PHP scripts, as well as MYSQL to act as the database engine.
To use it first save the project in htdocs folder in xampp and this step is very crucial, open xampp, start apache and mysql, go to http://localhost/marion's/ where you will be prompted to login;
    (i)You can login using these details; email=jac06@gmail.com and password= qwertyuiop
    (ii) You can click on the register link and create a user account for yourself.
When you login it redirects you to dashboard.php,from where you can access links to all pages.
The system is made up of the following files, view_car.php,updating.php,register.php,logout.php,login.php,index.php,dashboard.php,add_car.php and their purposes are proportional to their names. 
Inside the functions folder there are the configuration files for this project i.e Db.php for general database connection,Login.php for scripting login page,Signup.php for scripting the register.php
The marion.sql file shows the SQL codes i have used in creating and testing this application, follow it well inorder to work well.
Lastly there is the css folder, this house the style.css file.


License
This project is under MIT licence, thus its copyrighted.