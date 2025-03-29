<?php
// Context
class Shipment
{
    public function __construct(
        private array $products,
        private int $postalCode,
    ) {}

    public ShipmentInterface $shippingStrategy {
        set => $this->shippingStrategy = $value;
    }

    public int $shippingCost {
        get => $this->shippingStrategy->calculateCost($this->products, $this->postalCode);
    }
}
