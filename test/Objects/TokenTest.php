<?php

namespace Test\Objects;

use Aggunawan\FacebookLogin\Objects\Token;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionProperty;

class TokenTest extends TestCase
{
    /**
     * @throws ReflectionException
     */
    public function testGetUserId()
    {
        $token = new Token();
        $reflection = new ReflectionProperty($token, 'user_id');
        $reflection->setAccessible(true);
        $reflection->setValue($token, 'uid');

        $default = new Token();

        self::assertSame('uid', $token->getUserId());
        self::assertSame(null, $default->getUserId());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetUserId()
    {
        $token = (new Token())->setUserId('uid');
        $reflection = new ReflectionProperty($token, 'user_id');
        $reflection->setAccessible(true);

        self::assertSame('uid', $reflection->getValue($token));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetAppId()
    {
        $token = new Token();
        $reflection = new ReflectionProperty($token, 'app_id');
        $reflection->setAccessible(true);
        $reflection->setValue($token, 'aid');

        $default = new Token();

        self::assertSame('aid', $token->getAppId());
        self::assertSame(null, $default->getAppId());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetAppId()
    {
        $token = (new Token())->setAppId('aid');
        $reflection = new ReflectionProperty($token, 'app_id');
        $reflection->setAccessible(true);

        self::assertSame('aid', $reflection->getValue($token));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetAppName()
    {
        $token = new Token();
        $reflection = new ReflectionProperty($token, 'app_name');
        $reflection->setAccessible(true);
        $reflection->setValue($token, 'appName');

        $default = new Token();

        self::assertSame('appName', $token->getAppName());
        self::assertSame(null, $default->getAppName());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetAppName()
    {
        $token = (new Token())->setAppName('appName');
        $reflection = new ReflectionProperty($token, 'app_name');
        $reflection->setAccessible(true);

        self::assertSame('appName', $reflection->getValue($token));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetType()
    {
        $token = new Token();
        $reflection = new ReflectionProperty($token, 'type');
        $reflection->setAccessible(true);
        $reflection->setValue($token, 'Type');

        $default = new Token();

        self::assertSame('Type', $token->getType());
        self::assertSame(null, $default->getType());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetType()
    {
        $token = (new Token())->setType('Type');
        $reflection = new ReflectionProperty($token, 'type');
        $reflection->setAccessible(true);

        self::assertSame('Type', $reflection->getValue($token));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetScopes()
    {
        $token = new Token();
        $reflection = new ReflectionProperty($token, 'scopes');
        $reflection->setAccessible(true);
        $reflection->setValue($token, ['scope']);

        $default = new Token();

        self::assertSame(['scope'], $token->getScopes());
        self::assertSame([], $default->getScopes());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetScopes()
    {
        $token = (new Token())->setScopes(['scopes']);
        $reflection = new ReflectionProperty($token, 'scopes');
        $reflection->setAccessible(true);

        self::assertSame(['scopes'], $reflection->getValue($token));
    }

    /**
     * @throws ReflectionException
     */
    public function testSetScopesWithEmptyArray()
    {
        $token = (new Token())->setScopes([]);
        $reflection = new ReflectionProperty($token, 'scopes');
        $reflection->setAccessible(true);

        self::assertSame([], $reflection->getValue($token));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetExpiredAt()
    {
        $token = new Token();
        $reflection = new ReflectionProperty($token, 'expired_at');
        $reflection->setAccessible(true);
        $reflection->setValue($token, 111);

        $default = new Token();

        self::assertSame(111, $token->getExpiredAt());
        self::assertSame(null, $default->getExpiredAt());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetExpiredAt()
    {
        $token = (new Token())->setExpiredAt(111);
        $reflection = new ReflectionProperty($token, 'expired_at');
        $reflection->setAccessible(true);

        self::assertSame(111, $reflection->getValue($token));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetIssuedAt()
    {
        $token = new Token();
        $reflection = new ReflectionProperty($token, 'issued_at');
        $reflection->setAccessible(true);
        $reflection->setValue($token, 112);

        $default = new Token();

        self::assertSame(112, $token->getIssuedAt());
        self::assertSame(null, $default->getIssuedAt());
    }

    /**
     * @throws ReflectionException
     */
    public function testSetIssuedAt()
    {
        $token = (new Token())->setIssuedAt(112);
        $reflection = new ReflectionProperty($token, 'issued_at');
        $reflection->setAccessible(true);

        self::assertSame(112, $reflection->getValue($token));
    }

}