<?php

use Aggunawan\FacebookLogin\TokenDebugger;
use GuzzleHttp\Exception\GuzzleException;

require_once('../vendor/autoload.php');

echo "Token : ";
$token = trim(fgets(STDIN));

try {
    $debugger = (new TokenDebugger())->debug($token);
} catch (GuzzleException $e) {
    die;
}

echo "Token user id : {$debugger->getUserId()}\n";
echo "Token app id : {$debugger->getAppId()}\n";
echo "Token app name : {$debugger->getAppName()}\n";
echo "Token type : {$debugger->getType()}\n";
echo 'Token scopes : ' . implode(', ', $debugger->getScopes()) . "\n";
echo "Token expired at : {$debugger->getExpiredAt()}\n";
echo "Token issued at : {$debugger->getIssuedAt()}";