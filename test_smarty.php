<?php

require("../resources/smarty/smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty();

$smarty->assign("ma_variable","Je suis une variable");

$smarty->assign(array(
    "une_variable" => "Je suis une variable Eloise",
    "une_autre_variable" => "Je suis une belle variable"
    // ...
));



$smarty->display("./templates/parent.tpl");