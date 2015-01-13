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
}