<?php
class UPS implements ShipmentInterface
{
    public function price(array $products, int $postalCode): int
    {
        return 25;
    }
}
