<?php 
     $link_admin="../public/css/classe.css";
     ?>
 
<table style="border:5px; background-color: green;">
		<td><h2><i>LISTE DES CHAMBRES</i></h2></td>
	</table>
	<table border="5px" class="scroll">
		<tr>
			<td>NUMERO</td>
			<td>NUMERO DU BATIMENT</td>
			<td>TYPE</td>
      <td>Action </td>
		</tr>
    <?php foreach($data as $cham) { ?>
    <tr>
                <td><?php echo $cham->getNumero(); ?></td>
                <td><?php echo $cham->getNumerobat(); ?></td>
                <td><?php echo $cham->getTyp(); ?></td>
                <td><a href="<?= ROOTURL ?>Etudiant/ModifierChambre/<?php echo $cham->getNumero(); ?>" class="btn btn-success">Modifier</a>
                <a href="<?= ROOTURL ?>Etudiant/SupprimerChambre/<?php echo $cham->getNumero(); ?>" class="btn btn-danger" > Supprimer</a></td>
    </tr>
    <?php } ?>
	</table>