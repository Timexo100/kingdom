<?php

abstract class Prince
{
}

class LegalPrince extends Prince implements Blessable
{
    public function __construct()
    {
        echo "Legal prince was born!" . PHP_EOL;
    }

    public function give_a_blessing()
    {
        //Код для благословения
    }
}

class IllegalPrince extends Prince
{
    public function __construct()
    {
        echo "Illegal prince was born!" . PHP_EOL;
    }
}