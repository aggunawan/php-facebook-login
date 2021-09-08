<?php

namespace Aggunawan\FacebookLogin\Abstracts;

use Aggunawan\FacebookLogin\Contracts\Graph;

abstract class Init implements Graph
{
    protected string $version;

    public function getVersion(): string
    {
        return $this->version ?? self::VERSION;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;
        return $this;
    }
}