<?php

declare(strict_types=1);

namespace Alpha\CleanCode;

class ElectricEngine implements Engine
{
    public function canStart(): bool
    {
        return $this->hasBatteryCharge();
    }

    private function hasBatteryCharge(): bool
    {
        return true;
    }
}
