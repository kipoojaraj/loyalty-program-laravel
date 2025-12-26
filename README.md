# Loyalty Program System

A simple Loyalty Program system built with Laravel 11.  
Admins can manage shops, and shops can generate loyalty links for Apple Wallet and Google Wallet.


## Features

### Admin
- Login
- Add shops
- View list of shops and their loyalty links

### Shop
- Login
- Generate a unique loyalty link
- Customers can add loyalty cards to Apple Wallet or Google Wallet

---

## Tech Stack
- **Backend:** Laravel 11  
- **Database:** MySQL  
- **Frontend:** Blade templates with inline Vue.js  
- **Styling:** Bootstrap 5  

---

## Setup Instructions

1. **Clone the repository**

    ```bash
    git clone https://github.com/kipoojaraj/loyalty-program-laravel.git
    cd loyalty-program-laravel
    ```


2. **Update your database settings** in `.env`:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=loyalty_program
    DB_USERNAME=root
    DB_PASSWORD=
    ```

3. **Generate the application key**

    ```bash
    php artisan key:generate
    ```

4. **Run migrations**

    ```bash
    php artisan migrate
    ```

5. **Serve the application**

    ```bash
    php artisan serve
    ```

6. **Open in browser**  
Go to http://127.0.0.1:8000



