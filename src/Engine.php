<?php

declare(strict_types=1);

namespace Alpha\CleanCode;

class Engine
{
    public function getFuelType(): string
    {
        return "electric";
    }

    public function batteryHasCharge(): bool
    {
        return true;
    }
}
