<?php
class DHL implements ShipmentInterface
{
    public function price(array $products, int $postalCode): int
    {
        return 22;
    }
}
