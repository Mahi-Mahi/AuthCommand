# AuthCommand

Create users from the command line


### Requirements

- PHP => 5.6.4
- Laravel >= 5.4

### Installation

**Composer**

Run the following to include this via Composer

```shell
composer require mahimahi/auth-command
```

Then add `Nexmo\Laravel\NexmoServiceProvider` to the `providers` array in your `config/app.php`:

```php
MahiMahi\AuthCommand\AuthCommandServiceProvider::class,
```



Usage
-----

Create users from the cli :

```
php artisan auth:create-user "John Doe" john@doe.com
```
