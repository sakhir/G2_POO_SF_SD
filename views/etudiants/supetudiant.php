


<?php 
     $link_admin="../../public/css/classe.css";
?>

<?php
    if (isset($data)) {
        
 if ($data[0]=="1") {
    echo "<h1>Suppression d etudiant de matricule  ".$data[1]." reuissi </h1>";
}
else {
   echo "<h1>Suppression d etudiant de matricule ".$data[1]." echouee </h1>";
}

    }
?>

