<?php

namespace Aggunawan\FacebookLogin;

class Login
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getUrl(string $redirectUri, string $state = null, array $scopes = ['public_profile']): string
    {
        return "https://www.facebook.com/{$this->client->getVersion()}/dialog/oauth?" . http_build_query([
                'client_id' => $this->client->getClientId(),
                'redirect_uri' => $redirectUri,
                'scope' => implode(',', $scopes),
                'state' => $state,
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