<?php
require_once 'Controleurs/controleur.php';

class Controleurcatalogue implements ControleurMet
{

    private $_template;
    private $_smarty;

    public function __construct($smarty)
    {

        $this->_template = "./templates/catalogue.tpl";
        $this->_smarty =$smarty;
    }

    /*
     * Définition de la vue par défaut
     */
    public function defaultView(){

        $listeArticles = array();

        if(empty($_GET) || (isset($_GET['categorie']) && intval($_GET['categorie'])) == 0){
            $listeArticles = ArticleQuery::create()->find();
        } else {
            $idCategorie = intval($_GET['categorie']);
            $listeCat = CatalogueQuery::create()->findByIdCategorie($idCategorie);
            foreach($listeCat as $cat){
                $article = ArticleQuery::create()->findPk($cat->getIdArticle());
                array_push($listeArticles, $article);
            }
        }
        $catalogue = array();
        $categories = array();

        foreach ($listeArticles as $article) {
            $catalogue[count($catalogue)] = array("id" => $article->getIdArticle(), "nom" => $article->GetLibelleArticle(), "desc" => $article->getDescriptionArticle(), "prix" =>$article->getPrixHT());
        }

        $this->_smarty->assign('catalogue', $catalogue);

        $this->_smarty->display($this->_template);

    }

    public function viewArticle(){

        $idarticle = intval($_GET["article"]); // Intval permet d'être sur d'avoir une valeur entière. Si conversion impossible, retourne 0

        $article = ArticleQuery::create()->findPk($idarticle);

        $this->_smarty->assign("refarticle", $article->GetReferenceArticle());
        $this->_smarty->assign("nom", $article->GetLibelleArticle());
        $this->_smarty->assign("description",$article->GetDescriptionArticle());
        $this->_smarty->assign("prixht",number_format($article->getPrixHT(), 2));
        $this->_smarty->assign("stock",$article->getQqteStock());

        $listeAvis = AvisQuery::create()->findByIdArticle($idarticle);
        $tabAvis = array();
        /*echo '<pre>';
        foreach($listeAvis as $avis){
            $tabAvis[count($tabAvis)] = array("redacteur" => $avis->getRedacteur(), "note" => $avis->getNote(), "contenu" => $avis->getDescriptionAvis());
        }
        echo '</pre>';*/
        $this->_smarty->assign("listeavis", $tabAvis);

        $this->_template = "./templates/fichearticle.tpl";

        $this->_smarty->display($this->_template);

    }

}