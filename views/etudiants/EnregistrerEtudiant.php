<?php 
     $link_admin="../public/css/classe.css";
?>
 
<h2><i>ENREGISTRER  ETUDIANT</i></h2>
    <div id="container" class='container'>
    <form action="<?= ROOTURL ?>Etudiant/AddEtudiant" method="POST">
        
        <label for="matricule">MATRICULE</label> <input type="text" name="matricule" value="" placeholder="Matricule">
        <label for="nom">NOM</label> <input type='text' name="nom" value="" placeholder="Nom">
        <label for="prenom">PRENOM</label> <input type='text' name="prenom" value="" placeholder="Prenom">
        <label for="telephone">TELEPHONE</label> <input type='text' name="tel" value="" placeholder="Telephone">
        <label for="email">EMAIL</label> <input type='text' name="email" value="" placeholder="Email">
        <label for="date_de_naissance">DATE DE NAISSANCE</label> <input type="text" name="ddn" value="" placeholder="Date de naissance">
        <button type="submit" class="btn btn-success"  name="ajoutere" value="ajoutere">Ajouter</button>
    </form>
</div>