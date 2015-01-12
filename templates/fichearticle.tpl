{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7"
     style="background-color:orange;">
	<h4>Article {$nom}</h4>

	<div class="row">
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8" style="background: cyan">
			<div class="row">
				{$description}
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="background: darkgrey">
			<div class="row">
				{$prixht} € HT
			</div>
			<div class="row">
				Stock restant : {$stock} pièces
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-lg-offset-8 col-md-offset-6 col-sm-offset-6">
			<input type="number" value="0" name="qte" id="qte"/> <button class="btn btn-primary">Ajouter</button>
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

	{foreach from=$listeavis item=avis}
	<div class="row avis">
		<div class="infosAvis">Rédacteur : {$avis.redacteur}<br />
		Note : {$avis.note}</div>
		<p>{$avis.contenu}</p>
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
