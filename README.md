# Get Started

[Install PHP](https://www.php.net/manual/en/install.php) - If you don't already have php installed on your machine

[Install Composer](https://getcomposer.org/) - If you don't already have composer installed on your machine

[Square PHP SDK Guide](https://developer.squareup.com/docs/sdks/php/using-php-sdk) - details on how to use / configure the Square client.

[PHP Quickstart Guide](https://developer.squareup.com/docs/sdks/php/quick-start) - The quickstart directory is based off of this document.

[Packagist Repository for Square](https://packagist.org/packages/square/square) - Where the package files are hosted

[Dotnet SDK Source Code](https://github.com/square/square-php-sdk) - Github repo with sdk source code


## Quickstart Instructions

Change into the `quickstart` directory

copy `.env.example` to `.env` and replace with your access token
```
SQUARE_ACCESS_TOKEN=yourSandboxAccessToken
```

Install latest version of square dependencies
```
$ composer require square/square
```

Run the code
```
$ php -S localhost:8000
```

navigate to `localhost:8000/quickstart.php` and you should see a location displayed

In the browser window you should see output similar to
```
LHI1YXJ8YSV5Z: Default Test Account, 1600 Pennsylvania Ave NW, Washington
```