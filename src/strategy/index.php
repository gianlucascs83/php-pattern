<?php
spl_autoload_register(function ($class) {
    require $_SERVER["DOCUMENT_ROOT"] . "/strategy/$class.php";
});

$shippingCourier = "DHL"; // DHL, FedEx, UPS
$productsInCart = ["Product 1", "Product 2"];
$postalCode = 00162;
$subtotal = 120;

// Client code
$shipment = new Shipment($productsInCart, $postalCode);
$shipment->shippingStrategy = new $shippingCourier();
$total = $shipment->shippingCost + $subtotal;

echo <<<RES
    Subtotal: € {$subtotal} <br>
    Shipping: € {$shipment->shippingCost} <br>
    Total: € {$total}
RES;
