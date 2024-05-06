# Get Started

[Install PHP](https://www.php.net/manual/en/install.php) - If you don't already have php installed on your machine

[Install Composer](https://getcomposer.org/) - If you don't already have composer installed on your machine

[Square PHP SDK Guide](https://developer.squareup.com/docs/sdks/php/using-php-sdk)

[PHP Quickstart Guide](https://developer.squareup.com/docs/sdks/php/quick-start) - The quickstart directory is based off of this document.


## Quickstart Instructions

Change into the `quickstart` directory

copy `.env.example` to `.env` and replace with your access token
```
SQUARE_ACCESS_TOKEN=yourSandboxAccessToken
```

Install Project dependencies
```
$ composer install
```

Run the code
```
$ php -S localhost:8000
```

navigate to `localhost:8000/quickstart.php` and you should see a location displayed

You should see your `Square Sandbox Seller account's` location logged in the browser window.