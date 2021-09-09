<?php

namespace Aggunawan\FacebookLogin\Abstracts;

use GuzzleHttp\Client;

abstract class FacebookGraph extends Init
{
    public function getHttpClient(): Client
    {
        return new Client([
            'base_uri' => "https://graph.facebook.com/{$this->getVersion()}"
        ]);
    }
}