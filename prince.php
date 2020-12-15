<?php

abstract class Prince
{
}

class LegalPrince extends Prince
{
    public function __construct()
    {
        echo "Legal prince was born!" . PHP_EOL;
    }
}

class IllegalPrince extends Prince
{
    public function __construct()
    {
        echo "Illegal prince was born!" . PHP_EOL;
    }
}