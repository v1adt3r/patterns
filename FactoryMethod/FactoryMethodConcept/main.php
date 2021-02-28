<?php

require '../../vendor/autoload.php';

use FactoryMethod\FactoryMethodConcept\ConcreteCreator1;
use FactoryMethod\FactoryMethodConcept\ConcreteCreator2;
use FactoryMethod\FactoryMethodConcept\Creator;

function clientCode(Creator $creator)
{
    echo "clientCode\n" .$creator->someOperation();
}

clientCode(new ConcreteCreator1());
echo "\n";
clientCode(new ConcreteCreator2());