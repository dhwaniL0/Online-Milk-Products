# Online-Milk-Products
A complete e-commerce platform for dairy and milk products, built with PHP, MySQL, and modern web technologies.
## 🌟 Features

### 🛍️ **Shopping Experience**
- **Product Catalog**: Browse through various dairy products
- **Shopping Cart**: Add, remove, and manage items
- **User Registration & Login**: Secure user authentication
- **Order Management**: Place orders with shipping details
- **Order History**: Track your previous orders

### 🏪 **Product Categories**
- **Dairy Essentials**: Milk, Ghee, Curd, Butter, Cheese, Paneer  
- **Ice Creams**: Vanilla, Chocolate, Strawberry, Mango, Kesar Pista  
- **Kulfi**: Mava Malai, Kesar Pista, Malai  
- **Shrikhand**: Badam Pista, Dry Fruit, Elaichi, Mango, Rajbhog, Strawberry  
- **Sweets**: Pedas, Burfi, Rabri, Yogurt  

### 👨‍💼 **Admin Panel**
- **Admin Dashboard**: Overview of orders and sales
- **Order Management**: View and update order statuses
- **Product Management**: Add, edit, and delete products
- **User Management**: Monitor registered users

---

## 🚀 Quick Start

### Prerequisites
- PHP 7.4 or higher  
- MySQL 5.7 or higher  
- Web server (Apache/Nginx) or PHP built-in server  

### Installation

1. **Clone/Download the project**
   ```bash
   cd /path/to/your/project

2. **Start MySQL service
   ```bash
   brew services start mysql  # macOS
   # or
   sudo systemctl start mysql  # Linux

3. **Create database and tables
   ```bash
   mysql -u root -e "CREATE DATABASE IF NOT EXISTS milkshop;"

4. **Start PHP server
   ```bash
   php -S 127.0.0.1:8000

5. **Access the application
   ```bash
   -> Main URL: http://127.0.0.1:8000/
   -> Admin Panel: http://127.0.0.1:8000/admin_login.php

## 🔐 Admin Access

**Username:** `admin`  
**Password:** `admin123`


## 🛠️ Troubleshooting

### Common Issues

1. **Database Connection Error**
   - Ensure MySQL is running  
   - Check database credentials  
   - Use `127.0.0.1` instead of `localhost` on macOS  

2. **Table Not Found Errors**
   - Run the database setup commands  
   - Check table names match the code  

3. **Session Issues**
   - Ensure PHP sessions are enabled  
   - Check file permissions  

4. **Image Loading Issues**
   - Verify image files exist in the project directory  
   - Check file paths in the code
  

## 🚀 Future Enhancements

- Payment gateway integration  
- Email notifications  
- Order tracking system  
- Product reviews and ratings  
- Inventory management  
- Multi-language support  
- Mobile app development  

## 📄 License

This project is developed for **educational and commercial purposes**.

# 📊 Internship Progress 

This section details the development and bug-fixing efforts undertaken during the one-month internship period.

---

## 🗓️ Week 1: Project Setup & Initial Database Configuration
- **Project Initialization:** Successfully started the PHP built-in server and accessed the project in the browser.  
- **Database Connection Fixes:** Addressed initial `localhost` → `127.0.0.1` database connection errors across `admin_dashboard.php`, `config.php`, and `connection.php` for macOS compatibility.  
- **MySQL Installation & Service Management:** Installed MySQL using Homebrew and ensured the MySQL service was running.  
- **Core Database Creation:** Created the `milkshop` database and essential tables (`orders`, `products`, `users`) to establish the application's data foundation.  
- **Admin Credentials Identification:** Located and documented the hardcoded admin login credentials (`admin/admin123`).  

---

## 🗓️ Week 2: User Management & Registration System Enhancement
- **User Table Schema Update:** Modified the `users` table to include comprehensive user details by adding `first_name`, `last_name`, `phone`, and `address` columns.  
- **Registration Form & Logic Refinement:** Corrected column name mismatches in `regis1.php` (e.g., `lname` → `last_name`) and updated the registration form (`regis.html`) to align with the new database schema, replacing gender and city fields with a phone field.  
- **Improved Registration Robustness:** Implemented server-side validation for required fields and added a check to prevent duplicate email registrations.  
- **Sample Data Population:** Inserted sample products into the `products` table to provide initial content for the e-commerce catalog.  

---

## 🗓️ Week 3: Shopping Cart & Order Placement Functionality
- **Cart Table Creation:** Created the `cart` table to manage user shopping cart items.  
- **Add to Cart Logic Fixes:** Resolved *Unknown column 'lname'* errors in `addcart.php` by updating database queries and form field mappings to use `last_name` and `phone` columns correctly.  
- **Order Details Table Implementation:** Addressed the *Table 'milkshop.orders_details' doesn't exist* error by creating the `orders_details` table with fields for shipping information (`name`, `last_name`, `email`, `phone`, `address`, `city`, `pincode`).  
- **Order Total Integration:** Added a `total` column to the `orders` table to store the total amount for each order.  
- **Order Placement Connection Update:** Ensured `placeorder.php` used the correct `127.0.0.1` database connection.  

---

## 🗓️ Week 4: Finalizing User Flow & Documentation
- **Registration Page Redirection Fix:** Corrected the `login.php` file to redirect to `regis.html` instead of `register.html` when an email is not found, resolving a 404 error.  
- **Payment Page Development:** Created a basic `payment.php` page to handle order confirmation and display order details after successful placement.  
- **Order History Implementation:** Developed an `orderhistory.php` page to allow users to view their past orders.  
- **Comprehensive Project Verification:** Performed thorough testing of all core functionalities, including homepage, login, registration, admin login, and database integrity, ensuring the entire application was working as expected.  
