
<?php 
     $link_admin="../public/css/classe.css";
     ?>

<div class="container-fluid container-danger">
<h2><i>ENREGISTRER UNE CHAMBRE</i></h2>
<div id="container" class='container'>
    <form action="<?= ROOTURL ?>Etudiant/AddChambre" method="POST">

        <label for="numero">Numero</label><input type="text" name="numero" value="" placeholder="Numero">
        <label for="numerobat">Numero Du Batiment</label><input type='text' name="numerobat" value="" placeholder="Numero du batiment">
        <label for="type">TYPE</label><input type="text" name="type" value="" placeholder="Type">
        <button type="submit" class="btn btn-success" name="ajouterc" value="ajouterc">Ajouter</button>
    </form>
</div>
</div>