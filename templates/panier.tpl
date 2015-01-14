<div style="background-color:skyblue;">
    <h4>Informations</h4>

    {if $panierOK eq '1'}
        Prix total : {$totalPanier} € TTC <br />
        Nombre d'articles : {$nbArticles}
    {else}

        <br />

    {/if}

</div>