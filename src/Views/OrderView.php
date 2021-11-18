<?php

namespace Lucas\NamespaceExample\Views;

use Lucas\NamespaceExample\Models\Order;

class OrderView
{
    public function __construct(private Order $order)
    {
    }

    public function render(): void
    {
        echo "Order: {$this->order}\n";
    }

    public function renderWithMessage(string $message)
    {
        echo "Order: {$this->order}\nMessage: $message\n";
    }
}
