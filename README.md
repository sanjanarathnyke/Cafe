# Cafe Management System

## Description
The Cafe Management System is designed to manage cafe operations such as orders, inventory, and customer management. This project is built using Laravel and other modern web technologies.

## Installation Process

## 1. Clone the Repository
To begin, clone the repository to your local machine using the following command:
```bash
git clone https://github.com/sanjanarathnyke/Cafe.git
```

## 2. Navigate to the Project Directory
```
cd Cafe
```

## 3. Install Composer Dependencies
```bash
composer update
composer install
```
## 4. Install NPM Dependencies

```bash
npm i
npm run build
```
## 6 Copy the .env File
```bash
cp .env.example .env
```
## 7. Generate an App Encryption Key
php artisan key:generate

## 8. Create and Configure the Database
```bash
DB_HOST=your_host

DB_PORT=your_port

DB_DATABASE=your_database_name

DB_USERNAME=your_username

DB_PASSWORD=your_password
```
### 9. Migrate the Database
```bash
php artisan migrate
```
## 10. Seed the Database (Optional)
```bash
php artisan db:seed
```
## During Development

### Compiling Assets
```bash
npm run dev

npm run watch
```

