<?php

require 'vendor/autoload.php';

use Square\Legacy\SquareClient as SquareClient;
use Square\Legacy\Environment as Environment;
use Square\Legacy\Exceptions\ApiException as ApiException;
use Dotenv\Dotenv;

// Load the .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$square = new SquareClient([
    'accessToken' => $_ENV['SQUARE_ACCESS_TOKEN'],
    'environment' => Environment::SANDBOX
]);

try {
    $apiResponse = $square->getLocationsApi()->listLocations();
    if ($apiResponse->isSuccess()) {
        $result = $apiResponse->getResult();
        foreach ($result->getLocations() as $location) {
            printf(
                "%s: %s, %s, %s<p/>", 
                $location->getId(),
                $location->getName(),
                $location->getAddress()?->getAddressLine1(),
                $location->getAddress()?->getLocality()
            );
        }
    } else {
        $errors = $apiResponse->getErrors();
        foreach ($errors as $error) {
            printf(
                "%s<br/> %s<br/> %s<p/>", 
                $error->getCategory(),
                $error->getCode(),
                $error->getDetail()
            );
        }
    }
} catch (ApiException $e) {
    echo "ApiException occurred: <b/>";
    echo $e->getMessage() . "<p/>";
}
?>
