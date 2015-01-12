
<div style="background-color:skyblue;">
    <h4>Catégories ({$nbCategories})</h4>


    <ul>
        {foreach $Categories as $itemvar}
        <li><a href="index.php?theme=categorie&id={$itemvar[0]}">{$itemvar[1]}</a></li>
        {/foreach}

    </ul>

</div>