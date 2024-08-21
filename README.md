# CookieSuite

CookieSuite is a web interface for managing cookie production. This Laravel-based application allows users to create, edit, view, and delete records of cookie production.

## Requirements

- PHP >= 8.2
- Composer
- Postgres >= 13.0

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/StefanNemeth/CookieSuite.git
cd cookiesuite
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Create a copy of the `.env` file
```bash
cp .env.example .env
```

### 4. Generate an application key
```bash
php artisan key:generate
```

### 5. Configure the `.env` file
```bash
DB_CONNECTION=pgsql
DB_HOST=...
DB_PORT=...
DB_DATABASE=...
DB_USERNAME=...
DB_PASSWORD=...
```

### 6. Run the migrations
```bash
php artisan migrate
```

### 7. Serve the application
```bash
php artisan serve
```
