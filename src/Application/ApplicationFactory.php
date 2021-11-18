<?php

namespace Lucas\NamespaceExample\Application;

use Lucas\NamespaceExample\Controllers\OrderController;
use Lucas\NamespaceExample\Models\Order;
use Lucas\NamespaceExample\Models\Product;

class ApplicationFactory
{
    public static function make(): Application
    {
        return new Application(
            new OrderController(
                new Order(
                    [
                        new Product('pen', 10),
                        new Product('pencil', 3),
                        new Product('eraser', 5),
                    ]
                )
            )
        );
    }
}
