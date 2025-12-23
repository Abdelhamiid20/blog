# CRUD App - Student Management

## Description
This is a CRUD application for managing student information.  
It allows you to add, update, and delete student records in a MySQL database, and display all students in an interactive table.

## Features
- Add a student (first name, last name, age)
- Update student information
- Delete a student
- Display all students in a table

## Technologies Used
- PHP
- MySQL
- HTML / CSS / Bootstrap 5
- Git

## Installation
1. Install **XAMPP** (or any local server with PHP and MySQL)
2. Copy the project folder into the `htdocs` folder of XAMPP
3. Create a database named `crud_operation` in **phpMyAdmin**
4. Create a table `students` with the following columns:
   - `id` (INT, auto_increment, primary key)
   - `first_name` (VARCHAR)
   - `last_name` (VARCHAR)
   - `age` (INT)
5. Update `dbcon.php` if needed to match your MySQL credentials
6. Open the project in your browser:
http://localhost/crud_app

## Project Structure
- `index.php` → main page displaying all students
- `insert_data.php` → script to add a student
- `update_page_1.php` → page to update a student
- `delete_page.php` → script to delete a student
- `dbcon.php` → database connection
- `header.php` / `footer.php` → common HTML parts
- `README.md` → project documentation

## Author
Abdelhamiid20
