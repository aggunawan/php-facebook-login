<?php

namespace Aggunawan\FacebookLogin;

use Aggunawan\FacebookLogin\Abstracts\Init;

class Client extends Init
{
    private string $clientId = '';

    private string $clientSecret = '';

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): Client
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function setClientSecret(string $clientSecret): Client
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

}