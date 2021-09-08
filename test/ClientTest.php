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

}