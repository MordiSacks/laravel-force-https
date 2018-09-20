## Laravel Force HTTPS Middleware

### Install

Require this package with composer using the following command:

```bash
composer require mordisacks/laravel-force-https
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
MordiSacks\LaravelForceHttps\ServiceProvider::class,
```
**Laravel 5.5** uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

To install this package on only development systems, add the `--dev` flag to your composer command:

```bash
composer require --dev mordisacks/laravel-force-https
```

### Usage

Just add `forceHttps` to your middleware list
```php
Route::group(['middleware' => ['forceHttps']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
```

Or in a controller
```php
    public function __construct()
    {
        $this->middleware('forceHttps');
    }
``` 
