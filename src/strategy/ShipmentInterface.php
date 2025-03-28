<?php
// Strategy
interface ShipmentInterface
{
    public function price(array $products, int $postalCode): int;
}
