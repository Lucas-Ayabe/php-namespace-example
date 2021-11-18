<?php

namespace Lucas\NamespaceExample\Models;

class Product
{
    public function __construct(private string $name, private float $price)
    {
    }

    public function price(): float
    {
        return $this->price;
    }

    public function __toString()
    {
        return "Product {$this->name} costs {$this->price}";
    }
}
