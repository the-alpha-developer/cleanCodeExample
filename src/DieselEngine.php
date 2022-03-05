<?php

declare(strict_types=1);

namespace Alpha\CleanCode;

class DieselEngine implements Engine
{
    public function canStart(): bool
    {
        return $this->hasFuel();
    }

    private function hasFuel(): bool
    {
        return false;
    }
}
