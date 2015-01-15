<?php
require_once 'Controleurs/controleur.php';

class Controleurajax implements ControleurMet
{

    private $_template;
    private $_smarty;

    public function __construct($smarty)
    {

        $this->_template = "./templates/ajax.tpl";
        $this->_smarty =$smarty;
    }

    public function defaultView()
    {
        $this->displayData("testLMR");
    }

    public function action()
    {
        
    }

    public function ajoutPanier(){
        $qte = $_POST['Qte'];
        $article = $_POST['article'];
        if($_SESSION['panier'] == 0){
            $_SESSION['panier'] = array('id' => $article, 'qte' => $qte);
        }

        $this->displayData(print_r($_SESSION['panier']));
    }

    public function displayData($data)
    {
        $this->_smarty->assign("data" , $data);
        $this->_smarty->display($this->_template);
    }


}