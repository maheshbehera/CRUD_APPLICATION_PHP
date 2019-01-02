# CRUD_APPLICATION_PHP
This is Basic CRUD (Create, Read, Update and  Delete) application created using php, html, css and bootstrap.
#How to run Application in Windows.
1. Install Xampp server in your computer.
2. Copy "crudapp" folder in your "Xampp/htdocs" folder.
3. Start apache and mysql database in xampp server.
4. type localhost/phpmyadmin in your browser's address bar.
5. make database named as "crudapp_db".
6. in "crudapp_db" database make "employees" table.
7. CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone_no VARCHAR(10) NOT NULL,
    salary INT(10) NOT NULL
);
fire this query 
4. open Browser and type localhost/crudapp and press enter.
