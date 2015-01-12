{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7"
     style="background-color:orange;">
    <h3>Résumé du compte</h3>

    
</div>

{/block}

{block name="left"}
    {include file="paramcompte.tpl"}
{/block}

{block name="right_haut"}
    {include file="connexion.tpl"}
{/block}

{block name="right_bas"}
    {include file="news.tpl"}
{/block}