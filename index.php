<?php

require("./vendor/smarty/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty();

// TODO: Récupérer les 5 derniers articles enregistré en BDD
$smarty->assign(array(
    "article1" => "Tournevis Torx 5",
    "article2" => "Tournevis plat 8",
    "article3" => "Tournevis Cruciforme 8",
    "article4" => "Clé a pipe 13",
    "article5" => "Clé à molette"
));

$smarty->assign(array(
    "refarticle1" => "tournevistorx5",
    "refarticle2" => "tournevisplat8",
    "refarticle3" => "tourneviscruciforme8",
    "refarticle4" => "cleapipe13",
    "refarticle5" => "cleamolette"
));

$smarty->display("./templates/index.tpl");

?>