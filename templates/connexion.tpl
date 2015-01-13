<div>
    <h3>Compte client</h3>
    {if !$connected}
    <form action="connexion.php" method="post">
    	<label for="login">Identifiant : </label><br /><input type="email" class="form-control input-md" name="login" id="login" required /><br />
    	<label for="mdp">Mot de passe : </label><br /><input type="password" class="form-control input-md" name="mdp" id="mdp" required /><br />
    	<input class="btn btn-primary" type="submit" value="Se connecter" />
    	<a href="inscription.php" class="btn btn-default">S'inscrire</a>
    </form>
    {else}
    <h4>TODO: Accès au compte</h4>
        <a href="panier_full.php?id_commande=1">Accéder au panier</a>
    <a href="deconnexion.php" class="btn btn-default">Se déconnecter</a>
    {/if}
    
</div>