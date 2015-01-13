
<div style="background-color:skyblue;">
    <h4>Informations</h4>

    {if $panierOK eq '1'}
        Prix total : {$totalPanier} € TTC <br />
        Nombre d'articles : {$nbArticles}
    {elseif $panierOK eq '0'}

        <ul>
            {foreach $ListeMenus as $Menu}
            <li><a href="index_dispatcher.php?section=user&action={$Menu.action}&id={$Menu.libelle}">{$Menu.libelle}</a></li>
            {/foreach}

        </ul>

    {/if}

</div>