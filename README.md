# GENEO Application - PHP Exercise [Godfred Akpan]

![hero](https://res.cloudinary.com/archer/image/upload/v1621177126/Screen_Shot_2021-05-16_at_3.56.47_PM.png)

## Introduction

This app allows users to communicate with platform owners.
Users can send detailed questions or contributions using the contact form section by inputing their;
```bash
NAME,
EMAIL,
UPLOAD DOCUMENTS(optional)
MESSAGE

```
The solution to the interview assignment

## Setup Project

* Clone this repo:

```bash
git clone https://github.com/godfredakpan/GENEO_INTERVIEW.git
```

* Change directory to the project

```bash
cd GENEO_INTERVIEW
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

* Run Project

```bash
php artisan serve
```

## Tests

To run tests, execute:

```bash
php artisan test
```

## Conclusion

Hire me 🙂
