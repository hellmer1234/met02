<?php
require_once 'Controleurs/controleur.php';

class Controleuruser implements ControleurMet
{

	private $_template;
	private $_smarty;

	public function __construct($smarty)
	{
		$this->_template = "./templates/compte.tpl";
		$this->_smarty =$smarty;
	}

	/*
	 * Définition de la vue par défaut
	 */
	public function defaultView()
	{
		$this->compte();
	}

	public function compte()
	{
		include "initMenu.php";

		$client = ClientQuery::create()->findPk($_SESSION['idclient']);
		$this->_smarty->assign("ListeMenus", $tabMenu);
		$compte = array(
			"login" => $client->getLogin(),
			"Nom" => $client->getNom(), 
			"Prenom" => $client->getPrenom(), 
			"Telephone" => $client->getNumTelephone()
		);
		$this->_smarty->assign("Compte", $compte);
		$this->_smarty->assign("panierOK" , 0);
		$this->_smarty->assign("menuOK" , 1);
		$this->_template = "./templates/compte.tpl";
		$this->_smarty->display($this->_template);

	}

	public function commande()
	{
	   include "initMenu.php";

		$this->_template = "./templates/commande.tpl";
		$this->_smarty->display($this->_template);
	}

	public function inscription()
	{
		$this->_template = "./templates/inscription.tpl";
		$this->_smarty->display($this->_template);
	}

	public function validerInscription()
	{
		$client = new Client();
		$adresse = new Adresse();
		$client->setLogin($_POST['textinput_email']);
		$client->setMDP($_POST['passwordinput_saisie']);
		$client->setNom($_POST['textinput_nom']);
		$client->setPrenom($_POST['textinput_prenom']);
		$client->setNumTelephone($_POST['telephone']);

		$adresse->setNumeroRue($_POST['textinput_numrue']);
		$adresse->setRue($_POST['textinput_adresse']);
		$adresse->setCodePostal($_POST['textinput_codePostal']);
		$adresse->setVille($_POST['textinput_ville']);
		$adresse->setTypeAdresse("Facturation");

		$client->addAdresse($adresse);
		$client->save();

		$this->connexion($_POST['textinput_email'], $_POST['passwordinput_saisie']);
	}

	public function connexion($identifiant = "", $pass = "")
	{
		if($identifiant == "" && $pass == ""){
			$login = htmlspecialchars($_POST['login']);
			$mdp = htmlspecialchars($_POST['mdp']);
		} else {
			$login = $identifiant;
			$mdp = $pass;
		}

		$client = ClientQuery::create()->findOneByLogin($login);

		if($client == NULL){
			echo "Le compte ou le mot de passe est erroné";
			exit;
		}

		if($client->GetMDP() != $mdp){
			echo "Le compte ou le mot de passe est erroné";
			exit;
		}
		//var_dump($client);

		$_SESSION['idclient'] = $client->getIdClient();
		$_SESSION['login'] = $client->getLogin();

		header("Location: index.php");
	}

	public function modifierCompte()
	{
		$client = ClientQuery::create()->findOneByLogin($login);
		$client->setLogin($_POST['textinput_email']);
		$client->setMDP($_POST['newpasswordinput_saisie']);
		$client->setNom($_POST['textinput_nom']);
		$client->setPrenom($_POST['textinput_prenom']);
		$client->setNumTelephone($_POST['telephone']);
		$client->save();

		$this->connexion($_POST['textinput_email'], $_POST['passwordinput_saisie']);
	}

	public function deconnexion()
	{
		$_SESSION['idclient'] = "";
		$_SESSION['login'] = "";

		session_destroy();

		header("Location: index.php");
	}

}