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
        $tabMenu = array();
        $tabMenu[count($tabMenu)] = array("libelle" => "Mon Compte" , "action" => "compte");
        $client = ClientQuery::create()->findPk($_SESSION['idclient']);
        $adresse = AdresseQuery::create()->filterByTypeAdresse("Facturation")->findOneByIdclient($_SESSION['idclient']);
        $this->_smarty->assign("ListeMenus", $tabMenu);
        $compte = array(
            "login" => $client->getLogin(), 
            "Nom" => $client->getNom(), 
            "Prenom" => $client->getPrenom(), 
            "Telephone" => $client->getNumTelephone(),
            "Adresse" => $adresse->getNumeroRue() . " " . $adresse->getRue(),
            "CodePostal" => $adresse->getCodePostal(),
            "Ville" => $adresse->getVille()
        );
        $this->_smarty->assign("Compte", $compte);
        $this->_smarty->assign("panierOK" , 0);
        $this->_template = "./templates/compte.tpl";
        $this->_smarty->display($this->_template);

    }

    public function inscription()
    {
        $this->_template = "./templates/inscription.tpl";
        $this->_smarty->display($this->_template);
    }

    public function connexion()
    {
        $login = htmlspecialchars($_POST['login']);
        $mdp = htmlspecialchars($_POST['mdp']);

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

    public function deconnexion()
    {
        $_SESSION['idclient'] = "";
        $_SESSION['login'] = "";

        session_destroy();

        header("Location: index.php");
    }

}