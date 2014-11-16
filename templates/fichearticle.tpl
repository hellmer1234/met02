{extends file="parent.tpl"}
{block name="content"}

<div class="container col-xs-12 col-sm-9 col-md-9 col-lg-8 col-lg-offset-0"
     style="background-color:orange;">
	<h4>Article Ref</h4>
</div>

{/block}

{block name="left"}
    {include file="categories.tpl"}
{/block}

{block name="right_haut"}
    {include file="connexion.tpl"}
{/block}
