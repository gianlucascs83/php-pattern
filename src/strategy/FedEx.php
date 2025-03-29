<?php
class FedEx implements ShipmentInterface
{
    public function calculateCost(array $products, int $postalCode): int
    {
        return 21;
    }
}
