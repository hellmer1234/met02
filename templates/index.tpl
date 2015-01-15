{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7" style="background-color: rgb(215,215,215)">
    <div>

    	<h4>Nos promotions</h4>
    	<ul classe="listepromotions">
            {foreach $ArticlesPromotion as $articlepromo}
                <li><a href="index.php?section=catalogue&amp;action=viewArticle&amp;article={$articlepromo.id}">{$articlepromo.libelle}</a></li>
            {/foreach}
        </ul>

	</div>


    <div>

    	<h4>Nos nouveautés</h4>
    	<ul classe="listenouveautes">
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
