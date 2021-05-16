# GENEO Application - PHP Exercise [Godfred Akpan]

![hero](https://res.cloudinary.com/archer/image/upload/v1621177126/Screen_Shot_2021-05-16_at_3.56.47_PM.png)

## Introduction

The solution to the interview assignment

## Installation

* Clone this repo:

```bash
git clone https://github.com/ichtrojan/carthook.git
```

* Change directory to the project

```bash
cd carthook
```

* Install dependencies

```bash
composer install
```

* Duplicate `.env.example`

```bash
cp .env.example .env
```

* Modify the database credentials in the `.env` file to suit what you have locally

* Run migrations and seeders

```bash
php artisan migrate
```

>**NOTE**<br/>
> DO NOT RUN SEEDERS

## Tests

To run tests, execute:

```bash
php artisan test
```

## Summary

### API Calls

The API calls to JSONPlaceholder are Scheduled Jobs that run Every 60 Seconds.

### Data Caching

On every successful API call, the data returned are stored in the Database and Cached to file for faster access. Ideally, I would have used Redis but choose to skip that to simplify the installation.

### Database Structure

![structure](https://res.cloudinary.com/ichtrojan/image/upload/v1590380793/carthook_ccpwvv.png)

### Initial Call

The first time an endpoint is being called, there is a 2 seconds delay to enable the Scheduled job to process the API call, cache and store to the database.
Subsequent calls to the API should be processed withing 80ms on average.

### 

## Conclusion

Hire me 🙂
