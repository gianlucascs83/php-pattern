<?php
class UPS implements ShipmentInterface
{
    public function calculateCost(array $products, int $postalCode): int
    {
        return 25;
    }
}
