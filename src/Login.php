<?php

namespace Aggunawan\FacebookLogin;

class Login
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getUrl(string $redirectUri): string
    {
        return "https://www.facebook.com/{$this->client->getVersion()}/dialog/oauth?" . http_build_query([
                'client_id' => $this->client->getClientId(),
                'redirect_uri' => $redirectUri,
                'scope' => $this->client->getScopes(),
                'state' => $this->client->getState(),
            ]);
    }

    public function getAccessTokenUrl(string $redirectUri, string $authCode): string
    {
        return "https://graph.facebook.com/{$this->client->getVersion()}/oauth/access_token?" . http_build_query([
                'client_id' => $this->client->getClientId(),
                'redirect_uri' => $redirectUri,
                'client_secret' => $this->client->getClientSecret(),
                'code' => $authCode
            ]);
    }
}