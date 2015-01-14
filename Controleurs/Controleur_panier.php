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
            $paniers = PanierQuery::create()->findByIdcommande($id);
        }
        else
        {
            $paniers = array();
        }




        $tabpaniers = array();
        $total_panier = 0;
        $nb_articles = 0;
        foreach ($paniers as $item)
        {
            $id_article = $item->getIdarticle();
            $article = ArticleQuery::create()->findPk($id_article);
            $qte = $item->getQuantite();
            $prixTTC = $article->getPrixht() * (1 +$article->getTauxtva()->getTauxtva());
            $prixTotal = $qte * $prixTTC;
            $total_panier = $total_panier + $prixTotal;
            $nb_articles = $nb_articles + $qte;
            $tabpaniers[count($tabpaniers)] = array("qte" => $qte, "id_article" => $id_article,
                "prix" => $article->getPrixht(), "ref"=> $article->getReferencearticle(),
                "desc"=> $article->getDescriptionarticle(), "nom"=> $article->getLibellearticle(),
                "prixTTC" => $prixTTC, "total" => $prixTotal);
        }

        $this->_smarty->assign("panierOK" , 1);

        include "initMenu.php";


        $this->_smarty->assign("totalPanier" , $total_panier);
        $this->_smarty->assign("nbArticles" , $nb_articles);

        $this->_smarty->assign("Items" , $tabpaniers);

        $this->_smarty->display($this->_template);

    }

}