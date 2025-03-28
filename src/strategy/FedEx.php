<?php
class FedEx implements ShipmentInterface
{
    public function price(array $products, int $postalCode): int
    {
        return 21;
    }
}
