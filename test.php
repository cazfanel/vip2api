<?php

use Swagger\Client\Configuration;
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authorization = "apikey testkey"; // string |

try {
    $result = $api_instance->meGet($authorization);
    var_dump($result->getters());
    var_dump($result->getPbx());
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->meGet: ', $e->getMessage(), PHP_EOL;
}
