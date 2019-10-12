# ACME
### Another Chronicle Management System

## Synopsis

A simple Mage: The Ascension chronicle manager with support for play session log, character sheets, and any other component I might think of.

## Technicalities
- This project is built on top of PHP 7.2, Laravel 5.7 and Voyager 1.1
- It uses sqlite as a database

## Using it
- A ```.env.sample``` file is provided. Fill every missing field with the relevant information
- A ```database/database.sqlite.sample``` is provided. Rename it and point your .env to it.
- Register an account on the frontend, and manually change the role of that account to 1 in the database to gain access the admin pannel.
- Running ```php artisan serve``` locally will be enough to run a local instance.
