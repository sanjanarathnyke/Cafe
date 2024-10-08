# Cafe Management System

## Description
The Cafe Management System is designed to manage cafe operations such as orders, inventory, and customer management. This project is built using Laravel and other modern web technologies.

## Installation Process

### 1. Clone the Repository
To begin, clone the repository to your local machine using the following command:

git clone https://github.com/sanjanarathnyke/Cafe.git

### 2. Navigate to the Project Directory
cd Cafe

### 3. Install Composer Dependencies
composer update
composer install

### 4. Install NPM Dependencies
npm i
npm run build

### Copy the .env File
cp .env.example .env

### 6. Generate an App Encryption Key
php artisan key:generate

### 7. Create and Configure the Database
DB_HOST=your_host
DB_PORT=your_port
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

### 8. Migrate the Database
php artisan migrate

### 9. Seed the Database (Optional)
php artisan db:seed

## During Development

### Compiling Assets
npm run dev
npm run watch


