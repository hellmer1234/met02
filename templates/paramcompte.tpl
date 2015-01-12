
<div style="background-color:skyblue;">
    <h4>Informations</h4>


    <ul>
        {foreach $ListeMenus as $menu}
        <li><a href="compte.php?id={$menu.libelle}">{$menu.libelle}</a></li>
        {/foreach}

    </ul>

</div>