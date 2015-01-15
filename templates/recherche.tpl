{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7" id="catalogue"
     style="background-color:orange;">
	<h4>Résultats de recherche</h4>
    <form action="index.php?section=catalogue&amp;action=recherche" method="POST">
	<div class="row">

			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<label for="categorie">Résultats de recherche pour "{$recherche}"</label>
				
			</div>
			
			<input type="hidden" value="{$recherche}" name="recherche" id="recherche" />

	</div>
	
	<div class="row">
		<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
			<select name="categorie" id="categorie" class="form-control">
				<option value="0">Tout</option>
				{foreach $Categories as $Categorie}
					<option value="{$Categorie.id}">{$Categorie.libelle}</option>
				{/foreach}
			</select>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<input type="submit" value="Filtrer" class="btn" />
		</div>
	</div>
    </form>
	{foreach from=$catalogue item=produit}
	<div class="row catalogue-item">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
			<p><a href="index.php?section=catalogue&amp;action=viewArticle&amp;article={$produit.id}">{$produit.nom}</a><br />
			{$produit.desc}</p>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
			<p>{$produit.prix} € HT<br />
			<a href="#" class="btn btn-primary">Ajouter au panier</a></p>
		</div>
	</div>
	{/foreach}
</div>

{/block}

{block name="left"}	
    {include file="categories.tpl"}
{/block}

{block name="right_haut"}
    {include file="connexion.tpl"}
{/block}

{block name="right_bas"}
    {include file="news.tpl"}
{/block}