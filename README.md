## Calculator Test
My solution use an interface IOperations implemeted by operation classes as Addiction, Subtraction, etc. and the Calculator class use that interface to create object injecting dependecy. In this way it will be very easy to add new operation in our calculator and to manage them all.

## USAGE
To use this project you have just to download it into your system, change .env filename from .env.example to .env and then launch these commands
```
composer install
php artisan key:generate
```
inside the project directory.

Now you are ready to use it going to ServerHostname/ProjectRootDirectory/public/calculator

That's all
