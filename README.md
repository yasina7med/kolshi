Kolshi - E-Commerce Web Application

Overview

Kolshi is a fully functional E-Commerce Web Application built using the TALL Stack (TailwindCSS, Alpine.js, Laravel, Livewire). The project includes a user-friendly shopping experience with cart management, checkout options, and an admin panel for order and product management.

Technologies Used

Laravel 10 - Back-end framework

Livewire v3 - Front-end framework for dynamic UI updates

TailwindCSS - Utility-first CSS framework

Alpine.js - Lightweight JavaScript framework

Features

User Features

User authentication with session-based login.

Browse and add products to the cart.

Live cart counter updates using Livewire.

Checkout process with a Cash on Delivery (COD) option in an Alpine.js modal.

Admin Panel

Admins (users with role = 1 in the database) can access the admin dashboard.

Admins can manage all orders, view order details, add/edit/delete products.

Admin Credentials (for testing)

Email: admin@gmail.com

Password: admin123

Installation & Setup Guide

Step 1: Clone the Repository

git clone <repository-url>
cd kolshi

Step 2: Install Dependencies

composer install
npm install

Step 3: Environment Configuration

Create a .env file by copying the .env.example file.

Update the database credentials in the .env file:

DB_CONNECTION=mysql
DB_HOST=mysql.railway.internal
DB_PORT=3306
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=<your-mysql-password>

Step 4: Set Up Database

php artisan migrate --seed

This will create the necessary database tables and seed the admin credentials.

Step 5: Start the Application

For local development, run:

php artisan serve
npm run dev

The application will be accessible at http://127.0.0.1:8000

Deployment

For production deployment, update the .env file with the following environment variables:

APP_ENV=production
APP_DEBUG=false
APP_URL=https://kolshi-production.up.railway.app
DATABASE_URL=mysql://root:<password>@mysql.railway.internal:3306/railway

For Railway hosting:

Set up the environment variables in Railway.

Deploy the application and ensure migrations run correctly.

Run php artisan config:clear and php artisan cache:clear to apply changes.

Notes

Ensure the database credentials match those provided by Railway.

If using a different hosting provider, update the .env accordingly.

If encountering issues, try running:

php artisan key:generate
php artisan optimize:clear

Credits

This project was developed entirely by yours truly ,yaseen ahmed

Thank you for using Kolshi! 🚀

