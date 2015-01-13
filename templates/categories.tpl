
<div style="background-color:skyblue;">
    <h4>Catégories ({$nbCategories})</h4>


    <ul>
        {foreach $Categories as $Categorie}
        <li><a href="index_dispatcher.php?section=catalogue&categorie={$Categorie.id}">{$Categorie.libelle}</a></li>
        {/foreach}

    </ul>

</div>