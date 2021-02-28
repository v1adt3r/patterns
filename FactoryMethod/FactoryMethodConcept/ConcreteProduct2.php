<?php

namespace FactoryMethod\FactoryMethodConcept;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "ConcreteProduct1::operation()";
    }
}