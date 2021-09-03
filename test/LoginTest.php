<?php

namespace Test;

use Aggunawan\FacebookLogin\Client;
use Aggunawan\FacebookLogin\Login;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testGetLoginUrl()
    {
        $client = (new Client())
            ->setClientId('client-id')
            ->setState('state')
            ->setRedirectUrl('redirect-url');

        $login = new Login($client);

        $this->assertEquals(
            'https://www.facebook.com/v11.0/dialog/oauth?client_id=client-id&redirect_uri=redirect-url&scope=public_profile&state=state',
            $login->getUrl()
        );
    }

    public function testGetLoginUrlWithDifferentPayload()
    {
        $client = (new Client())
            ->setVersion('v10.0')
            ->setClientId('client-id')
            ->setState('state')
            ->setRedirectUrl('redirect-url')
            ->setScopes(['lorem', 'ipsum']);

        $login = new Login($client);

        $this->assertEquals(
            'https://www.facebook.com/v10.0/dialog/oauth?client_id=client-id&redirect_uri=redirect-url&scope=lorem%2Cipsum&state=state',
            $login->getUrl()
        );
    }

    public function testGetLoginUrlWithUnsetPayload()
    {
        $login = new Login(new Client());

        $this->assertEquals(
            'https://www.facebook.com/v11.0/dialog/oauth?client_id=&redirect_uri=&scope=public_profile',
            $login->getUrl()
        );
    }

    public function testGetExchangeTokenUrl()
    {
        $client = (new Client())
            ->setClientId('client-id')
            ->setClientSecret('client-secret')
            ->setRedirectUrl('redirect-url');

        $login = new Login($client);

        $this->assertEquals(
            'https://graph.facebook.com/v11.0/oauth/access_token?client_id=client-id&redirect_uri=redirect-url&client_secret=client-secret&code=auth-code',
            $login->getAccessTokenUrl('auth-code')
        );
    }
}