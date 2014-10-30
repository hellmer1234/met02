<?php /* Smarty version Smarty-3.1.20, created on 2014-10-16 14:37:11
         compiled from "templates/parent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242245023543fcfdccffde3-34284076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dafbdbe67e5433784417990c26834dae29a4e07' => 
    array (
      0 => 'templates/parent.tpl',
      1 => 1413470230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242245023543fcfdccffde3-34284076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_543fcfdcd11161_84992311',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543fcfdcd11161_84992311')) {function content_543fcfdcd11161_84992311($_smarty_tpl) {?><!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>L'empire des vis - Accueil</title>

    <script src="../resources/jquery/js/jquery.min.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.js"></script>
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

            <div style="background-color:skyblue;">
                <h4>Catégories</h4>
            </div>


        </div>


        <div class="container col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-offset-0"
             style="background-color:green;">
            <h3>Colonne droite</h3>

            <div style="background-color:indianred;">
                <h4>Inscription/Panier</h4>

                <br/>
                Pas encore de compte : <a href="#">S'inscrire</a>
            </div>

            <div style="background-color:skyblue;">
                <h4>News</h4>
            </div>
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
