<?php

declare(strict_types=1);

namespace Alpha\CleanCode;

class Car
{

    public function starts(): bool
    {
        $engine = new Engine();

        if ($engine->getFuelType() == "electric") {
            if ($engine->batteryHasCharge()) {
                return true;
            }
            return false;
        }

        return true;
    }
}
