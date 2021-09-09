<?php

namespace Test;

use Aggunawan\FacebookLogin\Objects\Token;
use Aggunawan\FacebookLogin\TokenDebugger;
use Mockery;
use PHPUnit\Framework\TestCase;

class TokenDebuggerTest extends TestCase
{
    public function testDebugToken()
    {
        $debugger = Mockery::mock(TokenDebugger::class)->makePartial();
        $debugger->shouldAllowMockingProtectedMethods();
        $debugger
            ->shouldReceive('requestDebug')
            ->andReturn(
                json_decode(
                    '{"data":{"app_id":"1","type":"USER","application":"Token","data_access_expires_at":111,"expires_at":222,"is_valid":true,"issued_at":333,"scopes":["scope_one","scope_two"],"granular_scopes":[{"scope":"scope_one"},{"scope":"scope_two"}],"user_id":"444"}}'
                )
            );

        $fetchedToken = $debugger->debug('token');

        $token = (new Token())
            ->setAppId("1")
            ->setType('USER')
            ->setAppName('Token')
            ->setExpiredAt(222)
            ->setIssuedAt(333)
            ->setScopes(["scope_one","scope_two"])
            ->setUserId(444);

        self::assertSame($token->getAppId(), $fetchedToken->getAppId());
        self::assertSame($token->getType(), $fetchedToken->getType());
        self::assertSame($token->getAppName(), $fetchedToken->getAppName());
        self::assertSame($token->getExpiredAt(), $fetchedToken->getExpiredAt());
        self::assertSame($token->getIssuedAt(), $fetchedToken->getIssuedAt());
        self::assertSame($token->getScopes(), $fetchedToken->getScopes());
        self::assertSame($token->getUserId(), $fetchedToken->getUserId());
    }

    public function testDebugTokenWithInvalidResponse()
    {
        $debugger = Mockery::mock(TokenDebugger::class)->makePartial();
        $debugger->shouldAllowMockingProtectedMethods();
        $debugger
            ->shouldReceive('requestDebug')
            ->andReturn(json_decode(''));

        $fetchedToken = $debugger->debug('token');

        $token = new Token();

        self::assertSame($token->getAppId(), $fetchedToken->getAppId());
        self::assertSame($token->getType(), $fetchedToken->getType());
        self::assertSame($token->getAppName(), $fetchedToken->getAppName());
        self::assertSame($token->getExpiredAt(), $fetchedToken->getExpiredAt());
        self::assertSame($token->getIssuedAt(), $fetchedToken->getIssuedAt());
        self::assertSame($token->getScopes(), $fetchedToken->getScopes());
        self::assertSame($token->getUserId(), $fetchedToken->getUserId());
    }
}