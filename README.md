# PHP User Registration and Management System

This is a basic PHP user registration and management system with features such as user registration, login, and the ability to delete users.

## Features

- User Registration
- User Login
- User List Display
- User Deletion

## Getting Started

1. **Database Configuration**

   Update the `config.php` file with your database credentials.

2. **Database Setup**

   Create a database named `users` and a table named `user_data` with columns `id`, `username`, `password`, and `email`.

3. **Registration Page**

   Access the registration page at `register.php` to register new users.

4. **Login Page**

   Access the login page at `login.php` to log in with registered credentials.

5. **User List Page**

   After logging in, you can view and delete users on the `userlist.php` page.

6. **Logout**

   Log out by accessing the `logout.php` page.

## Files and Structure

- `config.php`: Database configuration file.
- `register.php`: User registration page.
- `login.php`: User login page.
- `userlist.php`: User list page with deletion functionality.
- `logout.php`: Logout page.

## Dependencies

- PHP
- MySQL

## Notes

- Make sure to implement additional security measures such as input validation and protection against SQL injection.




