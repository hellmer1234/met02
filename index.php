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
for ($i = 0; $i < count($categories); $i++)
{
    $myCategorie = $categories[$i];
    $tabcategories[count($tabcategories)] = array($myCategorie->getIdcategorie(), $myCategorie->getLibellecategorie());
}
$smarty->assign("Categories" , $tabcategories);
$smarty->assign(array("nbCategories" => count($categories)));

$articles = ArticleQuery::create()->limit(5)->find();
$tabArticles = array();
for ($i = 0; $i < count($articles); $i++)
{
    $myArticle = $articles[$i];
    $tabArticles[count($tabArticles)] = array($myArticle->getIdarticle(), $myArticle->getLibellearticle(), $myArticle->getReferencearticle());
}
$smarty->assign("Articles" , $tabArticles);



$articlesPromotion = ArticleQuery::create()->limit(5)->find();
$tabArticlesPromotion = array();
for ($i = 0; $i < count($articlesPromotion); $i++)
{
    $myArticlePromotion = $articlesPromotion[$i];
    $applipromos = $myArticlePromotion->getApplicationpromotions();
    foreach ($applipromos as $applipromo)
    {
        if (!is_null($applipromo->getIdpromo()))
        {
            $promo = $applipromo->getPromotion();
            if( ( $promo->getDatedebut("Y-m-d") < date("Y-m-d") ) && ( $promo->getDatefin("Y-m-d") > date("Y-m-d")) )
            {
                $tabArticlesPromotion[count($tabArticlesPromotion)] = array($myArticlePromotion->getIdarticle(), $myArticlePromotion->getLibellearticle(), $myArticlePromotion->getReferencearticle());
            }
        }
    }


}
$smarty->assign("ArticlesPromotion" , $tabArticlesPromotion);


// TODO: Récupérer les articles en promo
/*
$smarty->assign(array(
    "articlepromo1" => "Clé à pipe 12",
    "articlepromo2" => "Clé anglaise 8",
    "articlepromo3" => "Perceuse Bosch",
    "articlepromo4" => "Ponceuse Villeroy",
));

$smarty->assign(array(
    "refarticlepromo1" => "tournevistorx5",
    "refarticlepromo2" => "tournevisplat8",
    "refarticlepromo3" => "tourneviscruciforme8",
    "refarticlepromo4" => "cleapipe13",
));
*/
// TODO: Récupérer les 5 derniers articles enregistré en BDD
/*$smarty->assign(array(
    "article1" => "Tournevis Torx 5",
    "article2" => "Tournevis plat 8",
    "article3" => "Tournevis Cruciforme 8",
    "article4" => "Clé a pipe 13",
    "article5" => "Clé à molette"
));

$smarty->assign(array(
    "refarticle1" => "tournevistorx5",
    "refarticle2" => "tournevisplat8",
    "refarticle3" => "tourneviscruciforme8",
    "refarticle4" => "cleapipe13",
    "refarticle5" => "cleamolette"
));*/

$smarty->display("./templates/index.tpl");

?>