<?php
require_once 'Controleurs/controleur.php';

class Controleurpanier implements ControleurMet
{

    private $_template;
    private $_smarty;

    public function __construct($smarty)
    {

        $this->_template = "./templates/panier_full.tpl";
        $this->_smarty =$smarty;
    }

    /*
     * Définition de la vue par défaut
     */
    public function defaultView(){

        if (isset($_GET["id_commande"]))
        {
            $id = $_GET["id_commande"];
        }


        $paniers = PanierQuery::create()->findByIdcommande($id);

        $tabpaniers = array();
        foreach ($paniers as $item)
        {
            $id_article = $item->getIdarticle();
            $article = ArticleQuery::create()->findPk($id_article);
            $qte = $item->getQuantite();
            $prixTTC = $article->getPrixht() * (1 +$article->getTauxtva()->getTauxtva());
            $prixTotal = $qte * $prixTTC;
            $tabpaniers[count($tabpaniers)] = array("qte" => $qte, "id_article" => $id_article,
                "prix" => $article->getPrixht(), "ref"=> $article->getReferencearticle(),
                "desc"=> $article->getDescriptionarticle(), "nom"=> $article->getLibellearticle(),
                "prixTTC" => $prixTTC, "total" => $prixTotal);
        }

        $this->_smarty->assign("Items" , $tabpaniers);

        $this->_smarty->display($this->_template);

    }

}