{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7"
     style="background-color:orange;">
    <h3>Accueil du site</h3>

    <div style="background-color:skyblue;">

    	<h4>Articles en promotion :</h4>
    	<ul>
            {foreach $ArticlesPromotion as $articlepromo}
                <li><a href="index.php?section=catalogue&amp;action=viewArticle&amp;article={$articlepromo.id}">{$articlepromo.libelle}</a></li>
            {/foreach}
        </ul>

	</div>


    <div style="background-color:skyblue;">

    	<h4>Les 5 derniers articles :</h4>
    	<ul>
            {foreach $Articles as $article}
                <li><a href="index.php?section=catalogue&amp;action=viewArticle&amp;article={$article.id}">{$article.libelle}</a></li>
            {/foreach}
        </ul>

	</div>
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
