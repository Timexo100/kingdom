<?php

include "prince.php";

/* 
* Данный класс реализует паттерн Factory,
* принцев может быть больше одного
* и к тому же они могут быть разные.
*/

abstract class PrinceFactoryAbstract
{
    public function create($type)
    {
        switch ($type) {
            case 'legal':
                return new LegalPrince();
            case 'illegal':
            default:
                return new IllegalPrince();
        }
    }
}

class PrinceFactory extends PrinceFactoryAbstract
{
}
