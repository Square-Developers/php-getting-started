<?php

require 'vendor/autoload.php';

use Square\SquareClient;
use Square\Environments;
use Square\Exceptions\SquareException;
use Dotenv\Dotenv;

// Load the .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$square = new SquareClient(
    token: $_ENV['SQUARE_ACCESS_TOKEN'],
    options: ['baseUrl' => Environments::Sandbox->value // Used by default
    ]
);

try {
    $response = $square->locations->list();
    foreach ($response->getLocations() as $location) {
        printf(
            "%s: %s, %s, %s<p/>", 
            $location->getId(),
            $location->getName(),
            $location->getAddress()?->getAddressLine1(),
            $location->getAddress()?->getLocality()
        );
    }
} catch (SquareException $e) {
    echo 'Square API Exception occurred: ' . $e->getMessage() . "\n";
    echo 'Status Code: ' . $e->getCode() . "\n";
}
?>
