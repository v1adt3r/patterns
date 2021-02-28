<?php

namespace FactoryMethod\FactoryMethodConcept;

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();

        return "Creator::someOperation() ".$product->operation();
    }
}