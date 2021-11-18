<?php

namespace Lucas\NamespaceExample\Application;

use Lucas\NamespaceExample\Controllers\OrderController;

class Application
{
    public function __construct(private OrderController $controller)
    {
    }

    public function run(): void
    {
        $this->controller->show();
        $this->controller->send();
    }
}
