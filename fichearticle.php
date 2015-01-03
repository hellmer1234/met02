<?php

require("./vendor/smarty/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty();

$refarticle = $_GET["article"];

// Remplacer ça par une requête SQL pour avoir les infos de l'article
$smarty->assign("refarticle","$refarticle");
$smarty->assign("description","Superbe outil pour bricoler");
$smarty->assign("prixttc","10.0");
$smarty->assign("stock","172");

$smarty->display("./templates/fichearticle.tpl");

?>