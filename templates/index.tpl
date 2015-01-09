{extends file="parent.tpl"}
{block name="content"}

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 col-lg-offset-0"
     style="background-color:orange;">
    <h3>Accueil du site</h3>

    <div style="background-color:skyblue;">

    	<h4>Articles en promotion :</h4>
    	<ul>
        <li><a href="fichearticle.php?article={$refarticlepromo1}">{$articlepromo1}</a></li>
        <li><a href="fichearticle.php?article={$refarticlepromo2}">{$articlepromo2}</a></li>
        <li><a href="fichearticle.php?article={$refarticlepromo3}">{$articlepromo3}</a></li>
        <li><a href="fichearticle.php?article={$refarticlepromo4}">{$articlepromo4}</a></li>
        </ul>

	</div>


    <div style="background-color:skyblue;">

    	<h4>Les 5 derniers articles :</h4>
    	<ul>
        <li><a href="fichearticle.php?article={$refarticle1}">{$article1}</a></li>
        <li><a href="fichearticle.php?article={$refarticle2}">{$article2}</a></li>
        <li><a href="fichearticle.php?article={$refarticle3}">{$article3}</a></li>
        <li><a href="fichearticle.php?article={$refarticle4}">{$article4}</a></li>
        <li><a href="fichearticle.php?article={$refarticle5}">{$article5}</a></li>
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
