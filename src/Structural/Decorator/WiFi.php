<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Decorator;


class WiFi extends BookingDecorator
{
    private const PRICE = 2;

    protected Booking $booking;

    public function __construct(Booking $booking)
    {
        parent::__construct($booking);
        $this->booking = $booking;
    }

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}