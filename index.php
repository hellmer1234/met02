<?php

require("./vendor/smarty/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty();

include('conf.inc.php');
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=$db";
    
    $pdo = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e){
    die('Erreur : ' . $e->getMessage());
}

$articlespromo = array();

$request = "SELECT referencearticle as ref, libellearticle as nom FROM article WHERE idarticle IN (SELECT idarticle FROM applicationpromotion WHERE idpromo IN (SELECT idpromo FROM promotion WHERE datedebut < DATE(NOW()) AND datefin > DATE(NOW())))";
$request = "SELECT article.referencearticle as ref, article.libellearticle as nom, ap.qqtearticlepromo as qte FROM article INNER JOIN applicationpromotion as ap WHERE article.idarticle = ap.idarticle AND idpromo IN (SELECT idpromo FROM promotion WHERE datedebut < DATE(NOW()) AND datefin > DATE(NOW()))";

$stmt = $pdo->query($request);
while($row = $stmt->fetch()) {
    $articlespromo[$row['ref']] = array('ref' => $row['ref'], 'nom' => $row['nom'], 'qte' => $row['qte']);
}

$smarty->assign("articlespromo", $articlespromo);

$derniersarticles = array();

$request = "SELECT referencearticle as ref, libellearticle as nom FROM article ORDER BY dateajout DESC limit 5";

$stmt = $pdo->query($request);
while($row = $stmt->fetch()) {
    $derniersarticles[$row['ref']] = array('ref' => $row['ref'], 'nom' => $row['nom']);
}

$smarty->assign("lastarticles", $derniersarticles);

$smarty->display("./templates/index.tpl");

?>