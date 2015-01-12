<?php

// Inclusion de Propel
require_once './vendor/propel/propel1/runtime/lib/Propel.php';
// Initialisation de Propel avec le fichier de configuration
Propel::init("./propel/build/conf/lempiredesvis-conf.php");
// Rajout des classes générées dans le include path
set_include_path("./propel/build/classes/" . PATH_SEPARATOR . get_include_path());

require("./vendor/smarty/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty();

$categories = CategorieQuery::create()->find();
$tabcategories = array();
foreach ($categories as $myCategorie)
{
    $tabcategories[count($tabcategories)] = array("id" => $myCategorie->getIdcategorie(), "libelle" => $myCategorie->getLibellecategorie());
}
$smarty->assign("Categories" , $tabcategories);
$smarty->assign(array("nbCategories" => count($categories)));

$articles = ArticleQuery::create()->limit(5)->find();
$tabArticles = array();
foreach ($articles as $myArticle)
{
    $tabArticles[count($tabArticles)] = array("id" => $myArticle->getIdarticle(), "libelle" => $myArticle->getLibellearticle(), "ref" => $myArticle->getReferencearticle());
}
$smarty->assign("Articles" , $tabArticles);



$articlesPromotion = ArticleQuery::create()->limit(5)->find();
$tabArticlesPromotion = array();
foreach ($articlesPromotion as $myArticlePromotion)
{
    $applipromos = $myArticlePromotion->getApplicationpromotions();
    foreach ($applipromos as $applipromo)
    {
        if (!is_null($applipromo->getIdpromo()))
        {
            $promo = $applipromo->getPromotion();
            if( ( $promo->getDatedebut("Y-m-d") < date("Y-m-d") ) && ( $promo->getDatefin("Y-m-d") > date("Y-m-d")) )
            {
                $tabArticlesPromotion[count($tabArticlesPromotion)] = array("id" => $myArticlePromotion->getIdarticle(), "libelle" => $myArticlePromotion->getLibellearticle(), "ref" => $myArticlePromotion->getReferencearticle());
            }
        }
    }


}
$smarty->assign("ArticlesPromotion" , $tabArticlesPromotion);

$smarty->display("./templates/index.tpl");

?>