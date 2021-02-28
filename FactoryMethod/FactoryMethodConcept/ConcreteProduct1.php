<?php

namespace FactoryMethod\FactoryMethodConcept;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "ConcreteProduct1::operation()";
    }
}