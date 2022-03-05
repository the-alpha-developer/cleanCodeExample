<?php

declare(strict_types=1);

namespace Alpha\CleanCode;

class HybridEngine implements Engine
{
    public function canStart(): bool
    {
        return $this->hasBatteryCharge() || $this->hasFuel();
    }

    private function hasBatteryCharge(): bool
    {
        return true;
    }

    private function hasFuel(): bool
    {
        return false;
    }
}
