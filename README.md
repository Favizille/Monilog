# Monilog 
A web application to help users track their Income, expenses and balance.

## Features

- View Transaction
- View Summary Cards
- Balance Calculation
- User Authentication
  
## Teach Stack

- **Backend:** Laravel 10, PHP 8.2
- **Frontend:** Blade, Tailwind CSS
- **Database:** MySQL
- **Authentication:** Laravel Breeze

## Getting Started

Follow these steps to run the project locally:

1. Clone the repository
   ```bash
   git clone https://github.com/Favizille/Monilog.git
   cd Monilog
2. Install Dependencies
   ```bash
   composer install
   npm install
4. Create Config .env file
   cp .env.example .env
   php artisan key:generate
5. Setup Database
   php artisan migrate --seed
6. Start server
   php artisan serve
