<?php

namespace Aggunawan\FacebookLogin;

use Aggunawan\FacebookLogin\Abstracts\FacebookGraph;
use Aggunawan\FacebookLogin\Objects\Token;
use GuzzleHttp\Exception\GuzzleException;

class TokenDebugger extends FacebookGraph
{
    /**
     * @throws GuzzleException
     */
    public function debug(string $token): Token
    {
        $token = $this->requestDebug($token);

        return (new Token())
            ->setUserId($token?->data?->user_id)
            ->setAppId($token?->data?->app_id)
            ->setType($token?->data?->type)
            ->setAppName($token?->data?->application)
            ->setExpiredAt($token?->data?->expires_at)
            ->setIssuedAt($token?->data?->issued_at)
            ->setScopes($token?->data?->scopes ?? []);
    }

    /**
     * @throws GuzzleException
     */
    protected function requestDebug(string $token)
    {
        $http = $this->getHttpClient()->get('/debug_token', [
            'headers' => [
                'Authorization' => "Bearer $token"
            ],
            'query' => [
                'input_token' => $token
            ]
        ]);

        return json_decode((string) $http->getBody());
    }
}