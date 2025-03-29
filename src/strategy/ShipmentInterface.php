<?php
// Strategy
interface ShipmentInterface
{
    public function calculateCost(array $products, int $postalCode): int;
}
