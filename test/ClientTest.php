<?php

namespace Test;

use Aggunawan\FacebookLogin\Client;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

class ClientTest extends TestCase
{
    public function testGetDefaultGraphVersion()
    {
        $client = new Client();

        $this->assertEquals('v11.0', $client->getVersion());
    }

    public function testSetGraphVersion()
    {
        $client = new Client();
        $client->setVersion('v10.0');

        $reflection = new ReflectionProperty(Client::class, 'version');
        $reflection->setAccessible(true);

        $this->assertEquals('v10.0', $reflection->getValue($client));
        $this->assertEquals('v10.0', $client->getVersion());
    }

    public function testGetDefaultClientId()
    {
        $client = new Client();

        $this->assertEquals('', $client->getClientId());
    }

    public function testSetClientId()
    {
        $client = new Client();
        $client->setClientId('client-id');

        $reflection = new ReflectionProperty(Client::class, 'clientId');
        $reflection->setAccessible(true);

        $this->assertEquals('client-id', $reflection->getValue($client));
        $this->assertEquals('client-id', $client->getClientId());
    }

    public function testGetDefaultClientSecret()
    {
        $client = new Client();

        $this->assertEquals('', $client->getClientSecret());
    }

    public function testSetClientSecret()
    {
        $client = new Client();
        $client->setClientSecret('client-secret');

        $reflection = new ReflectionProperty(Client::class, 'clientSecret');
        $reflection->setAccessible(true);

        $this->assertEquals('client-secret', $reflection->getValue($client));
        $this->assertEquals('client-secret', $client->getClientSecret());
    }

    public function testGetDefaultState()
    {
        $client = new Client();

        $this->assertEquals(null, $client->getState());
    }

    public function testSetState()
    {
        $client = new Client();
        $client->setState('state');

        $reflection = new ReflectionProperty(Client::class, 'state');
        $reflection->setAccessible(true);

        $this->assertEquals('state', $reflection->getValue($client));
        $this->assertEquals('state', $client->getState());
    }

    public function testGetDefaultScopes()
    {
        $client = new Client();

        $this->assertEquals('public_profile', $client->getScopes());
    }

    public function testSetScopes()
    {
        $client = new Client();
        $client->setScopes(['public_profile', 'insight']);

        $reflection = new ReflectionProperty(Client::class, 'scopes');
        $reflection->setAccessible(true);

        $this->assertEquals(['public_profile', 'insight'], $reflection->getValue($client));
        $this->assertEquals('public_profile,insight', $client->getScopes());
    }

    public function testGetDefaultRedirectUrl()
    {
        $client = new Client();

        $this->assertEquals('', $client->getRedirectUrl());
    }

    public function testSetRedirectUrl()
    {
        $object = new Client();
        $object->setRedirectUrl('redirect-url');

        $reflection = new ReflectionProperty(Client::class, 'redirectUrl');
        $reflection->setAccessible(true);

        $this->assertEquals('redirect-url', $reflection->getValue($object));
        $this->assertEquals('redirect-url', $object->getRedirectUrl());
    }
}