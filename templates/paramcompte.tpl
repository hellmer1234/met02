
<div style="background-color:skyblue;">
    <h4>Informations</h4>

    {if $panierOK eq '1'}
        Prix total : {$totalPanier} € TTC <br />
        Nombre d'articles : {$nbArticles}
    {else}

        <ul>
            {foreach $ListeMenus as $menu}
            <li><a href="compte.php?id={$menu.libelle}">{$menu.libelle}</a></li>
            {/foreach}

        </ul>

    {/if}

</div>