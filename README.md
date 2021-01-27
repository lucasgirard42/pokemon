## Liste des commande pour auth

```SHELL
composer require laravel/ui

php artisan ui --help

```

## Installation Bootstrap avec auth

```SHELL
php artisan ui bootstrap --auth
```

## commande pour les models
```SHELL
php artisan make:model {nom du model}
```

## commande pour faire une migration inversé mysql -> laravel
```SHELL
composer require --dev "kitloong/laravel-migration-generator"

php artisan migrate:generate
```