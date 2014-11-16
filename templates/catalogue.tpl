{extends file="parent.tpl"}
{block name="content"}

<div class="container col-xs-12 col-sm-9 col-md-9 col-lg-8 col-lg-offset-0"
     style="background-color:orange;">
	<h4>Catégorie + N°</h4>
	<ul>
		<li>
			<div>
				Artcile 1
			</div>
			<div>
				Prix et ajout au panier
			</div>
		</li>
		<li>
			<div>
				Artcile 2
			</div>
			<div>
				Prix et ajout au panier
			</div>
		</li>
		<li>
			<div>
				Artcile 3
			</div>
			<div>
				Prix et ajout au panier
			</div>
		</li>
	</ul>
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