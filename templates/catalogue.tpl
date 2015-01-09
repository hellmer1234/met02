{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 col-lg-offset-0"
     style="background-color:orange;">
	<h4>Catalogue</h4>

	<div>
		Paramètres de filtre
	</div>
	
	{for $i=1 to 3}
	<div class="row catalog-item">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
			<p>Article {$i}<br />
			Description de l'article, qui est super de la mort qui tue !</p>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
			<p>X.XX€<br />
			<a href="#" class="btn btn-primary">Ajouter au panier</a></p>
		</div>
	</div>
	{/for}
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