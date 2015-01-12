<?php
/**
 * Created by PhpStorm.
 * User: LMR
 * Date: 12/01/15
 * Time: 18:15
 */

// Inclusion de Propel
require_once './vendor/propel/propel1/runtime/lib/Propel.php';
// Initialisation de Propel avec le fichier de configuration
Propel::init("./propel/build/conf/lempiredesvis-conf.php");
// Rajout des classes générées dans le include path
set_include_path("./propel/build/classes/" . PATH_SEPARATOR . get_include_path());

$categories = CategorieQuery::create()->find();

print_r($categories);