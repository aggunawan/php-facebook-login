<?php

namespace Aggunawan\FacebookLogin\Objects;

class Token
{
    protected ?string $user_id = null;

    protected ?string $app_id = null;

    protected ?string $app_name = null;

    protected ?string $type = null;

    protected array $scopes = [];

    protected ?int $expired_at = null;

    protected ?int $issued_at = null;

    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    public function getAppId(): ?string
    {
        return $this->app_id;
    }

    public function getAppName(): ?string
    {
        return $this->app_name;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getScopes(): array
    {
        return $this->scopes;
    }

    public function getExpiredAt(): ?int
    {
        return $this->expired_at;
    }

    public function getIssuedAt(): ?int
    {
        return $this->issued_at;
    }

    public function setUserId(?string $user_id): Token
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function setAppId(?string $app_id): Token
    {
        $this->app_id = $app_id;
        return $this;
    }

    public function setAppName(?string $app_name): Token
    {
        $this->app_name = $app_name;
        return $this;
    }

    public function setType(?string $type): Token
    {
        $this->type = $type;
        return $this;
    }

    public function setScopes(array $scopes): Token
    {
        $this->scopes = $scopes;
        return $this;
    }

    public function setExpiredAt(?int $expired_at): Token
    {
        $this->expired_at = $expired_at;
        return $this;
    }

    public function setIssuedAt(?int $issued_at): Token
    {
        $this->issued_at = $issued_at;
        return $this;
    }
}