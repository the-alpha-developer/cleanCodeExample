<?php

declare(strict_types=1);

namespace Alpha\CleanCode;

class Car
{
    public function __construct(
        private Engine $engine,
    ) {
    }

    public function starts(): bool
    {
        return $this->engine->canStart();
    }
}
