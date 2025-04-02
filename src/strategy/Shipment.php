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
        //set => $value; - anche così va bene e la proprietà è anche leggibile
    }

    public int $shippingCost {
        get => $this->shippingStrategy->calculateCost($this->products, $this->postalCode);
    }
}
