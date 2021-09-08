<?php

namespace Aggunawan\FacebookLogin;

class Client
{
    private string $version = 'v11.0';

    private string $clientId = '';

    private string $clientSecret = '';

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): Client
    {
        $this->version = $version;
        return $this;
    }

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