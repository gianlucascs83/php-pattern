<?php
class DHL implements ShipmentInterface
{
    public function calculateCost(array $products, int $postalCode): int
    {
        return 22;
    }
}
