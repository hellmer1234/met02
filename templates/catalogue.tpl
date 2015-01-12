{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7" id="catalogue"
     style="background-color:orange;">
	<h4>Catalogue</h4>

	<div class="row">
		<form action="catalogue.php" method="post">
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<label for="categorie">Catégorie</label>
				<select name="categorie" id="categorie" class="form-control">
						<option value="0">Tout</option>
					{foreach from=$categories item=categorie}
						<option value="{$categorie.id}">{$categorie.nom}</option>
					{/foreach}
				</select>
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<input type="submit" value="Filtrer" class="btn" />
			</div>
		</form>
	</div>
	
		
	
	{foreach from=$catalogue item=produit}
	<div class="row catalogue-item">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
			<p><a href="fichearticle.php?article={$produit.ref}">{$produit.nom}</a><br />
			{$produit.desc}</p>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
			<p>{$produit.prix}<br />
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