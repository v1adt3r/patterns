<?php

namespace FactoryMethod\FactoryMethodConcept;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}