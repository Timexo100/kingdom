<?php

include "king.php";
include "prince_factory.php";

$king = King::get_instance();
$king->set_name("George I");
$king->greets();
echo $king->get_name();

$prince_factory = new PrinceFactory();

$prince1 = $prince_factory->create('legal');
$prince2 = $prince_factory->create('illegal');

echo get_class($prince1) ;
echo get_class($prince2);