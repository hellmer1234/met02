<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="page d'inscription sur le site l'empire des vis" />
    <meta name="robots" content="noindex,nofollow" />

    <title>L'empire des vis - Inscription</title>

    <script src="./resources/jquery/js/jquery.min.js"></script>
    <script src="./resources/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./resources/jquery/css/jquery.min.css">
    <link rel="stylesheet" href="./resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./resources/css/web.css">


</head>
<body>

<div class="container">

<form id="form_inscription" name="form_inscription" class="form-horizontal">
    <fieldset>

        <legend>Inscription</legend>

        <div class="form-group">

            <div id="erreur_catch" class="col-md-5  col-md-offset-4"  >

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput_email">Email</label>
            <div class="col-md-5">
                <input id="textinput_email" name="textinput_email" type="email" placeholder="" class="form-control input-md" required="required" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput_saisie">Mot de passe</label>
            <div class="col-md-5">
                <input id="passwordinput_saisie" name="passwordinput_saisie" type="password" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput_confirm">Confirmer le mot de passe</label>
            <div class="col-md-5">
                <input id="passwordinput_confirm" name="passwordinput_confirm" type="password" placeholder="confirmation" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="radios_civilite">Civilité</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios_civilite-0">
                    <input type="radio" name="radios_civilite" id="radios_civilite-0" value="M" checked="checked">
                    M
                </label>
                <label class="radio-inline" for="radios_civilite-1">
                    <input type="radio" name="radios_civilite" id="radios_civilite-1" value="Mlle">
                    Mlle
                </label>
                <label class="radio-inline" for="radios_civilite-2">
                    <input type="radio" name="radios_civilite" id="radios_civilite-2" value="Mme">
                    Mme
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput_nom">Nom</label>
            <div class="col-md-5">
                <input id="textinput_nom" name="textinput_nom" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput_prenom">Prénom</label>
            <div class="col-md-5">
                <input id="textinput_prenom" name="textinput_prenom" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="telephone">Numero de téléphone</label>
            <div class="col-md-5">
                <div class="input-group">
                    <input id="telephone" name="telephone" class="form-control" placeholder="numéro de téléphone" type="tel" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" required="">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Type
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Domicile</a></li>
                            <li><a href="#">Portable</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput_adresse">Adresse</label>
            <div class="col-md-5">
                <input id="textinput_adresse" name="textinput_adresse" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput_codePostal">Ville</label>
            <div class="col-md-2">
                <input id="textinput_codePostal" name="textinput_codePostal" type="number" placeholder="code postal" class="form-control input-md" pattern="([A-Z]+[A-Z]?\-)?[0-9]{1,2} ?[0-9]{3}" required="">

            </div>

            <div class="col-md-3">
                <input id="textinput_ville" name="textinput_ville" type="text" placeholder="Ville" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="button_annuler"></label>
            <div class="col-md-8">
                <button id="button_annuler" name="button_annuler" class="btn btn-danger">Annuler</button>
                <button id="button_valider" name="button_valider" class="btn btn-success">Valider</button>
            </div>
        </div>

    </fieldset>
</form>

</div>


<script src="./resources/js/valid_form.js" type="text/javascript" ></script>

</body>
</html>
