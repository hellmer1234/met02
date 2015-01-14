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

    public function displayData($data)
    {
        $this->_smarty->assign("data" , $data);
        $this->_smarty->display($this->_template);
    }


}