<?php /* Smarty version Smarty-3.1.21, created on 2014-10-30 16:56:52
         compiled from "templates/articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:541252018543fd93e0dbc99-29154890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce44ef0099b21dd2c3cdc9f99126e655b22fab6a' => 
    array (
      0 => 'templates/articles.tpl',
      1 => 1413472430,
      2 => 'file',
    ),
    '5dafbdbe67e5433784417990c26834dae29a4e07' => 
    array (
      0 => './templates/parent.tpl',
      1 => 1413472401,
      2 => 'file',
    ),
    '2d724c431be0bf4999ba5c78626770b8f1fe4077' => 
    array (
      0 => './templates/categories.tpl',
      1 => 1413472401,
      2 => 'file',
    ),
    'ea5cbcc94c148d116a8b83a442d11fed258dc7c8' => 
    array (
      0 => './templates/connexion.tpl',
      1 => 1413472368,
      2 => 'file',
    ),
    '1dfa54022f8366c658c8f628cd09ed46667d5a4b' => 
    array (
      0 => './templates/news.tpl',
      1 => 1413472401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '541252018543fd93e0dbc99-29154890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_543fd93e137303_91834618',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543fd93e137303_91834618')) {function content_543fd93e137303_91834618($_smarty_tpl) {?><!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>L'empire des vis - Accueil</title>

    <?php echo '<script'; ?>
 src="../resources/jquery/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../resources/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../resources/jquery/css/jquery.min.css">
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./resources/css/web.css">


</head>
<body>

<div class="container">

    <div class="row" style="border:1px solid #ddd;">
        <div style="background-color:aqua;height:100px;">
            <h1>L'empire des vis</h1>
        </div>
    </div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Rechercher">
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search">  Rechercher...</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Menu 1</a></li>
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="#">Menu 3</a></li>
                    <li><a href="#">Contactez nous</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="row" style="border:1px solid #ddd;">
        <div class="container col-xs-12 col-sm-9 col-md-9 col-lg-2 col-lg-offset-0"
             style="background-color:red;">
            <h3>Colonne gauche</h3>

            
                
    <?php /*  Call merged included template "categories.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '541252018543fd93e0dbc99-29154890');
content_54525fc4e3af75_34722538($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "categories.tpl" */?>

            

        </div>



        
            

<div class="container col-xs-12 col-sm-9 col-md-9 col-lg-8 col-lg-offset-0"
     style="background-color:orange;">
    <h3>Articles</h3>

    - <strong><?php echo $_smarty_tpl->tpl_vars['ma_variable']->value;?>
</strong> <br />


    - <?php echo $_smarty_tpl->tpl_vars['une_variable']->value;?>
 <br />
    - <?php echo $_smarty_tpl->tpl_vars['une_autre_variable']->value;?>



    <div class="container col-xs-12 col-sm-3 col-md-3 col-lg-11 col-lg-offset-0"
         style="background-color:indianred;">
        <h4>Promotions en cours</h4>

        <div style="background-color:greenyellow;height:20px;">Article 1
        </div>
        <div style="background-color:yellowgreen;height:20px;">Article 2
        </div>
        <div style="background-color:greenyellow;height:20px;">Article 3
        </div>
    </div>

    <div class="container col-xs-12 col-sm-3 col-md-3 col-lg-11 col-lg-offset-1"
         style="background-color:skyblue;">
        <h4>Récemment ajoutés</h4>

        <div style="background-color:yellowgreen;height:20px;">Article 1
        </div>
        <div style="background-color:greenyellow;height:20px;">Article 2
        </div>
        <div style="background-color:yellowgreen;height:20px;">Article 3
        </div>
    </div>
</div>

        



        <div class="container col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-offset-0"
             style="background-color:green;">
            <h3>Colonne droite</h3>

            
                
    <?php /*  Call merged included template "connexion.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("connexion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '541252018543fd93e0dbc99-29154890');
content_54525fc4e59734_59172634($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "connexion.tpl" */?>

            





                
                    
    <?php /*  Call merged included template "news.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '541252018543fd93e0dbc99-29154890');
content_54525fc4e665c2_68474546($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "news.tpl" */?>

                

        </div>

    </div>

    <div class="row" style="border:1px solid #ddd;">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-12 col-lg-offset-0"
             style="background-color:mistyrose;height:100px;">
            <h3>Footer</h3>
        </div>
    </div>

</div>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2014-10-30 16:56:52
         compiled from "./templates/categories.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54525fc4e3af75_34722538')) {function content_54525fc4e3af75_34722538($_smarty_tpl) {?>
<div style="background-color:skyblue;">
    <h4>Catégories</h4>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2014-10-30 16:56:52
         compiled from "./templates/connexion.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54525fc4e59734_59172634')) {function content_54525fc4e59734_59172634($_smarty_tpl) {?><div style="background-color:indianred;">
    <h4>Inscription/Panier</h4>

    <br/>
    Pas encore de compte : <a href="#">S'inscrire</a>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2014-10-30 16:56:52
         compiled from "./templates/news.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54525fc4e665c2_68474546')) {function content_54525fc4e665c2_68474546($_smarty_tpl) {?><div style="background-color:skyblue;">

    <h4>News</h4>

</div><?php }} ?>
