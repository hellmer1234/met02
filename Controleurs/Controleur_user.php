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
        $tabMenu = array();
        $tabMenu[count($tabMenu)] = array("libelle" => "MonCompte" , "action" => "displayCompte");
        $this->_smarty->assign("ListeMenus", $tabMenu);
        $this->_smarty->assign("panierOK" , 0);

        $this->_smarty->display($this->_template);

    }

    public function compte()
    {
        $tabMenu = array();
        $tabMenu[count($tabMenu)] = array("libelle" => "MonCompte" , "action" => "displayCompte");
        $this->_smarty->assign("ListeMenus", $tabMenu);
        $this->_smarty->assign("panierOK" , 0);

        $this->_smarty->display($this->_template);

    }

    public function inscription()
    {
        $tabMenu = array();
        $tabMenu[count($tabMenu)] = array("libelle" => "MonCompte" , "action" => "displayCompte");
        $this->_smarty->assign("ListeMenus", $tabMenu);
        $this->_smarty->assign("panierOK" , 0);

        $this->_template = "./templates/inscription.tpl";

        $this->_smarty->display($this->_template);

    }

}