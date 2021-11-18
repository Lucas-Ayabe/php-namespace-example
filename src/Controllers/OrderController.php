<?php

namespace Lucas\NamespaceExample\Controllers;

use Lucas\NamespaceExample\Models\Order;
use Lucas\NamespaceExample\Views\OrderView;

class OrderController
{
    public function __construct(private Order $order)
    {
    }

    public function show()
    {
        $view = new OrderView($this->order);
        $view->render();
    }

    public function send()
    {
        $this->order->send();
        $view = new OrderView($this->order);
        $view->renderWithMessage("Order sended successfuly");
    }
}
