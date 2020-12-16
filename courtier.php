<?php

abstract class Сourtier
{
    abstract public function sayHello();
}

class Employee extends Сourtier
{
    public function sayHello()
    {
        echo "Hello! I'm employee!";
    }
}

class Driver extends Сourtier
{
    public function sayHello()
    {
        echo "Hello! I'm driver!";
    }
}

