{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 col-lg-offset-0"
     style="background-color:orange;">
	<h4>Article {$refarticle}</h4>

	<div class="row">
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8" style="background: cyan">
			<div class="row">
				{$description}
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="background: darkgrey">
			<div class="row">
				{$prixttc}€
			</div>
			<div class="row">
				Stock restant : {$stock} pièces
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-lg-offset-8 col-md-offset-6 col-sm-offset-6">
			<input type="number" /> <button class="btn btn-primary">Ajouter</button>
		</div>
	</div>

	<div class="row">
		<table>
			<tr>
				<th>Type d'outil</th>
				<th>Matériaux</th>
			</tr>
			<tr>
				<td>{$refarticle}</td>
				<td>Métal, manche caoutchouc</td>
			</tr>
		</table>
	</div>

	<div class="row">
		LISTE DES AVIS
	</div>
</div>

{/block}

{block name="left"}
    {include file="categories.tpl"}
{/block}

{block name="right_haut"}
    {include file="connexion.tpl"}
{/block}
