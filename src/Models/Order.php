<?php

namespace Lucas\NamespaceExample\Models;

class Order
{
    /**
     * @param {Product[]} $produtos
     */
    public function __construct(private array $products)
    {
    }

    public function send(): bool
    {
        return true;
    }

    public function totalPrice(): float
    {
        return array_reduce(
            array_map(
                fn (Product $product) => $product->price(),
                $this->products
            ),
            fn ($total, $price) => $total + $price,
            0
        );
    }

    public function __toString()
    {
        $products = join(
            ", ",
            array_map(
                fn (Product $product) => (string) $product,
                $this->products
            )
        );

        return "$products and the total price is: {$this->totalPrice()}";
    }
}
