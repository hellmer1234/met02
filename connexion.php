<?php
require ("initPage.php");

$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

$client = ClientQuery::create()->findOneByLogin($login);

if($client == NULL){
	echo "CONNAIS PAS";
	exit;
}

if($client->GetMDP() != $mdp){
	echo "MAUVAIS PASS";
	exit;
}
//var_dump($client);

$_SESSION['idclient'] = $client->getIdClient();
$_SESSION['login'] = $client->getLogin();

header("Location: index.php");

?>