# Square PHP SDK Quickstart

This quickstart sample creates a Square client instance with your Square access token and then lists the locations in your account.
The sample is based on the [PHP SDK Quickstart guide](https://developer.squareup.com/docs/sdks/php/quick-start).

## Setup

[Install PHP](https://www.php.net/manual/en/install.php) - If you don't already have php installed on your machine

[Install Composer](https://getcomposer.org/) - If you don't already have composer installed on your machine

## Quickstart Instructions

1. Change into the `quickstart` directory

1. copy `.env.example` to `.env` and replace with your access token
    ```
    SQUARE_TOKEN=yourSandboxAccessToken
    ```

1. Install latest version of square dependencies
    ```
    $ composer require square/square
    ```

1. Run the code
    ```
    $ php -S localhost:8000
    ```

1. Navigate to `localhost:8000/quickstart.php` and you should output similar to this: 
    ```
    LHI1YXJ8YSV5Z: Default Test Account, 1600 Pennsylvania Ave NW, Washington
    ```
## Resources

[Square PHP SDK Guide](https://developer.squareup.com/docs/sdks/php/using-php-sdk) - details on how to use / configure the Square client.

[Packagist Repository for Square](https://packagist.org/packages/square/square) - Where the package files are hosted

[PHP SDK Source Code](https://github.com/square/square-php-sdk) - Github repo with sdk source code
