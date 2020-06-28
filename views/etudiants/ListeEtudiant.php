
<?php 
     $link_admin="../public/css/classe.css";
     ?>


<table style="border:5px; background-color: green;">
		<td><h2><i>LISTE DES ETUDIANTS</i></h2></td>
	</table>
	<table border="5px" class="scroll">
		<tr>
			<td>MATRICULE</td>
			<td>NOM</td>
			<td>PRENOM</td>
			<td>EMAIL</td>
               <td>TELEPHONE</td>
               <td>DATE DE NAISSANCE</td>
               <td>Action</td>
             
		</tr>
    <?php foreach($data as $etudiant) {?>
    <tr>
                <td><?php echo $etudiant->getMatricule(); ?></td>
                <td><?php echo $etudiant->getNom(); ?></td>
                <td><?php echo $etudiant->getPrenom(); ?></td>
                <td><?php echo $etudiant->getEmail(); ?></td>
                <td><?php echo $etudiant->getTelephone() ?></td>
                <td><?php echo $etudiant->getDate_de_naissance() ;?></td>
                <td><a href="#"?matricule=<?php echo $etudiant->getMatricule(); ?> class="btn btn-success">Modifier</a>
                <a href="#"?matricule=<?php echo $etudiant->getMatricule();?> class="btn btn-danger" > Supprimer</a></td>
    </tr>
    <?php } ?>
	</table>
