<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

class SingleRoomBooking implements Booking
{

    public function calculatePrice(): int
    {
        return 30;
    }

    public function getDescription(): string
    {
        return 'single room';
    }
}
