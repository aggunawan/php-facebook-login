<?php

use Aggunawan\FacebookLogin\Client;
use Aggunawan\FacebookLogin\Login;

require_once('./vendor/autoload.php');

echo "Client id : ";
$clientId = trim(fgets(STDIN));

echo "Client secret : ";
$clientSecret = trim(fgets(STDIN));

echo "Client redirect URI : ";
$redirectUri = trim(fgets(STDIN));

echo "Scopes, default public_profile and separated by comma: ";
$scopes = trim(fgets(STDIN));

$client = (new Client())
    ->setRedirectUrl($redirectUri)
    ->setClientId($clientId)
    ->setClientSecret($clientSecret);

$login = new Login($client);

echo "Visit this link at your browser : {$login->getUrl()} \n" ;
echo "And paste given auth code here : ";
$authCode = trim(fgets(STDIN));
echo "Visit this link at your browser to see the access token : {$login->getAccessTokenUrl($authCode)}";