<?php

namespace FactoryMethod\FactoryMethodConcept;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}