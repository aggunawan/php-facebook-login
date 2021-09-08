<?php

namespace Aggunawan\FacebookLogin\Contracts;

interface Graph
{
    const VERSION = 'v11.0';

    public function getVersion(): string;

    public function setVersion(string $version): self;
}