<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
         <link rel="stylesheet" href=<?= $link_admin ??  "" ?>> 
    <title><?= $tiltle ?? "Sa allocation" ?></title>
</head>

<html lang="en">

<body>

    <header class="bgSecondary">
        <h1 class="text-center m-0">
        ESPACE ADMINISTRATION
        </h1>
        <h3>Prenom Nom</h3>
    </header>
    <button class="deconnexion position-absolute btn btn-primary" id='deconnexion'
                    style="right: 10px; top: 10px;"><a href="<?= ROOTURL ?>/auth/logout" class="" style="text-decoration: none;color: white;font-weight: bold;font-size: 16px;">Deconnexion</a></button>
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" id="Etudiant" href="#">Enregistrer Etudiant</a></li>
            <li class="nav-item"><a class="nav-link" id="listeE" href="#">Liste Etudiant</a></li>
            <li class="nav-item"><a class="nav-link" id="Chambre" href="#">Enregistrer Chambre</a></li>
            <li class="nav-item"><a class="nav-link" id="listeC" href="#">Liste Chambre</a></li>
            
        </ul>
    </div>

    <div class="affiche" id="affiche">
        <?= $content ?>
    </div> 

</body>
    <script src="./public/js/admin.js"></script>
</html>