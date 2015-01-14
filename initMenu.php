<?php
$tabMenu = array();
$tabMenu[count($tabMenu)] = array("libelle" => "Mon Compte" , "action" => "compte");
$tabMenu[count($tabMenu)] = array("libelle" => "Mes commandes" , "action" => "commande");
$this->_smarty->assign("ListeMenus", $tabMenu);

$this->_smarty->assign("menuOK" , 1);