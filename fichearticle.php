<?php

require("./vendor/smarty/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty();

$refarticle = $_GET["article"];

include('conf.inc.php');
try{
	$dsn = "mysql:host=localhost;port=3306;dbname=$db";
	
	$pdo = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e){
	die('Erreur : ' . $e->getMessage());
}

$request = "SELECT referencearticle as ref, libellearticle as nom, descriptionarticle as `desc`, prixht, qqtestock, idtaux FROM article WHERE referencearticle LIKE '$refarticle'";

$stmt = $pdo->query($request);
$infosarticle = $stmt->fetch();

$avis = array();
$request = "SELECT * from avis WHERE idarticle = (SELECT idarticle FROM article WHERE referencearticle LIKE '$refarticle')";
$stmt = $pdo->query($request);
while ($row = $stmt->fetch()){
	$avis[$row['idavis']] = array('redacteur' => $row['redacteur'], 'note' => $row['note'], 'contenu' => $row['descriptionavis']);
}

$smarty->assign("refarticle", $infosarticle['ref']);
$smarty->assign("nom", $infosarticle['nom']);
$smarty->assign("description",$infosarticle['desc']);
$smarty->assign("prixht",number_format($infosarticle['prixht'], 2));
$smarty->assign("stock",$infosarticle['qqtestock']);
$smarty->assign("listeavis", $avis);

$smarty->display("./templates/fichearticle.tpl");

?>