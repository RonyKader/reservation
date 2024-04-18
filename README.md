# ReservationXpert - Open Source Project

Revolutionize your booking process with our cutting-edge reservation software. Our advanced system offers seamless integration, intuitive user interfaces, and powerful features tailored to meet your unique needs. Say goodbye to manual scheduling and hello to automated efficiency. With real-time availability updates and flexible booking options, managing reservations has never been easier. From hotels and restaurants to event venues and more, our software is designed to streamline operations and enhance customer experiences. Unlock the full potential of your business with our innovative reservation solution. Experience the future of bookings today.

# Project Setup Guide

This guide provides step-by-step instructions for setting up a Laravel project, including database migration and seeding, along with cloning the repository.

## Prerequisites

Before you begin, ensure that you have the following installed on your system:

- [PHP](https://www.php.net/) (>= 8.0)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/) (or [Yarn](https://yarnpkg.com/))
- [Git](https://git-scm.com/)

### Clone Repository

To clone the repository, run the following command:

```bash
git clone https://github.com/ronykader/reservation.git
cd reservation
```

### Setup Instructions
    Install Dependencies: Install PHP dependencies using Composer and JavaScript dependencies using npm (or Yarn).
```bash
    composer install
    npm install
```
### Environment Configuration: 
    Copy the .env.example file to .env and configure the database settings. 

```bash
cp .env.example .env
```

### Generate Application Key: 
    Generate the application key. 

```bash
php artisan key:generate
```


### Database Setup: 
    Migrate the database schema and seed the database with sample data.

```bash
php artisan migrate --seed
```


### Compile Assets: 
    Compile front-end assets (CSS, JavaScript).

```bash
npm run dev
```


### Serve Application: 
    Start the Laravel development server.

```bash
php artisan serve
```

### Access Application: 
    Access the application in your web browser at
```
http://localhost:8000
```



