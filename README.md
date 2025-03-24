# Wholesale Inventory Management - B2B

A **B2B inventory management system** designed for wholesale businesses, built with `Laravel 11` for the backend and **Vue.js** with **Inertia.js** for the frontend. This system enables wholesale distributors to manage their inventory, process orders, generate invoices, and handle deliveries to local shops. It also allows for easy API integration to expand the system's functionality in the future.


## Key Features

- **User Management**: OTP-based email registration, JWT authentication, password recovery, and profile management (soft deletion for account removal).
- **Product Management**: CRUD operations for products with stock management, linked to categories and suppliers.
- **Category & Supplier Management**: Create and manage product categories and suppliers for streamlined product organization.
- **Invoice Management**: Generate and track invoices, mark as **delivered** or **failed** based on delivery status, with manual cash collection.
- **API Integration**: Fully RESTful API for CRUD operations, enabling future integrations with other platforms or systems.
- **Frontend with Vue 3 & Inertia.js**: Dynamic, single-page experience with Vue 3 for the frontend and Inertia.js for seamless page rendering.
- **Responsive Design**: Tailwind CSS ensures a mobile-friendly and customizable UI.



## Tech Stack
- **Backend**: `PHP`, `Laravel 11`, **RESTful API** for CRUD operations
- **Frontend**: `Vue 3`, `Inertia.js`, `Tailwind CSS`, **Axios** for API communication
- **Database**: `MySQL`
- **Authentication**: `JWT`
___

## Installation Instructions

### Requirements
- PHP 8.2 or higher
- Composer
- Node.js 20 or higher
- MySQL Database

### Setup Guide

1. **Clone the Repository**
   ```bash
   git clone https://github.com/NahidHassanOfficial/Inventory-Management.git
   cd Wholesale-Inventory
   ```
2. **Install Backend Dependencies**
   ```bash
   composer install
   ```
3. **Install Frontend Dependencies**
   ```bash
   npm install
   ```
4. **Environment Configuration**
   > Copy the .env.example file and rename it to .env
   ```bash
   cp .env.example .env
   ```
5. **Generate Key**
   ```bash
    php artisan key:generate
   ```
6. **Update the .env file with your configuration**
   > - Database credentials <br>
   > * Mail settings for OTP-based email verification<br>
   > + Set JWT Key:
   ```bash
   JWT_KEY=your_random_generated_key
   ```
___

### Running Guide

1. **Migrate DB Tables**
   > The --seed will generate some fake data in DB, you can skip that if you don't want to.
   ```bash
   php artisan migrate --seed
   ```
2. **Start the application**
   ```bash
   php artisan serve
   npm run dev
   ```
Hopefully the application is running smoothly on http://127.0.0.1:8000
> [!NOTE]
> If you’re not a developer, ensure you have a local server environment (e.g., XAMPP, WAMP, or Laragon) installed. Start the Apache and MySQL services before running the application.
