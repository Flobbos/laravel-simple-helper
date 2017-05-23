# Laravel-Simple-Helper


![Laravel Simple Helper](img/laravel-simple-helper.png)

**Install and maintain all your helpers in a simple way**

### Docs

* [Installation](#installation)
* [Configuration](#configuration)
* [Laravel compatibility](#laravel-compatibility)

## Installation 

### Install package

Add the package in your composer.json by executing the command.

```bash
composer require flobbos/laravel-simple-helper
```

Register the service provider with your `app/config/app.php`

```
Flobbos\LaravelSimpleHelper\LaravelSimpleHelperServiceProvider::class,
```

## Configuration

Publish the configuration file.

```bash
php artisan vendor:publish 
```

### Use the package

By default the package assumes that your helpers live in the app\Helpers 
directory. You have the option to specify the helpers directory in the config.

The second option is to just load everything that's in the Helpers directory
or specify each helper in the config file.


## Laravel compatibility

LaravelSimpleHelper is generally compatible with Laravel version 5.X. 


