<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"></a>
    <a href="https://filamentphp.com/" target="_blank"><img src="https://github.com/user-attachments/assets/4b992c6c-ef59-4eca-9c58-d86a05aa2e4e" width="300" alt="Filament Logo"></a>
    <a href="https://midtrans.com/" target="_blank"><img src="https://github.com/user-attachments/assets/eb79a16c-d35b-4922-af5e-bb4478d0b256" width="300" alt="Midtrans Logo"></a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# KosBookingApp

KosBookingApp is a web-based application designed to simplify the booking process for rental accommodations such as boarding houses (kos). Built using **Laravel**, **FilamentPHP**, and **Midtrans**, this application provides a feature-rich platform for tenants and property owners to manage their activities effectively. 

## Translation
- <a href="">Indonesia</a> 

## Key Features

- **Dynamic Property Listings**: Property owners can add detailed information about their properties, including photos, pricing, and facilities.
- **Search & Filter**: Users can search and filter listings based on location, price, and amenities.
- **Booking Management**: Streamlined process for booking properties with real-time updates.
- **FilamentPHP Integration**: A modern, user-friendly admin panel for managing properties, bookings, and users.
- **Midtrans Payment Gateway**: Secure payment integration for transactions.
- **Role-Based Access**: Multiple roles including Admin, Property Owner, and Tenant for easy user management.
- **Real-Time Notifications**: Stay updated with booking confirmations and payment statuses.

---

## Screenshots
_Include screenshots of the application here, such as the homepage, admin panel, and payment confirmation page._

---

## Installation Guide

Follow the steps below to set up the application on your local environment:

### Prerequisites

Ensure the following are installed on your system:
- PHP 8.2 or newer
- Composer
- Node.js and NPM
- MySQL (or another supported database)
- Laravel CLI
- Midtrans account for payment processing

---

### Steps to Install

1. **Clone the Repository**
   
   ```bash
   git clone https://github.com/your-repo/booking-app.git
   cd booking-app
   
2. **Install Dependencies**
   
   ```bash
   composer install
   npm install
   
3. **Configure Environment Variables Copy the ***.env.example*** file to ***.env*** and edit the following values:**

    ```bash
   MIDTRANS_SERVER_KEY=<Your Key>
   MIDTRANS_IS_PRODUCTION=false
   MIDTRANS_IS_SANITIZED=true
   MIDTRANS_IS_3DS=true
   
4. **Generate Application Key**

    ```bash
   php artisan key:generate

5. **Run Migrations**
   
   ```bash
   php artisan migrate

6. **Start the Development Server**
   
   ```bash
   php artisan serve

7. **Access the Application**

    - Frontend: http://localhost
    - Admin Panel (Filament): http://localhost/admin

## License

This project is licensed under the **MIT License**.
