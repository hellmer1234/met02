{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7"
     style="background-color:orange;">
    <h4>Mes commandes</h4>


</div>

{/block}

{block name="left"}
    {include file="paramcompte.tpl"}
{/block}

{block name="left_bas"}
    {include file="categories.tpl"}
{/block}


{block name="right_haut"}
    {include file="connexion.tpl"}
{/block}

{block name="right_bas"}
    {include file="news.tpl"}
{/block}