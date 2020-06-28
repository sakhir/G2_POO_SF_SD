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

    <nav class="navbar">
        <span id="navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <ul id="main-nav">
            <li>
                <a href="<?= ROOTURL ?>Etudiant/EnregistrerEtudiant" class="nav-links" id="Etudiant">Enregistrer Etudiant</a>
            </li>
            <li>
                <a href="<?= ROOTURL ?>Etudiant/ListeEtudiant" class="nav-links" id="listeE">Liste Etudiant</a>
            </li>
            <li>
                <a href="<?= ROOTURL ?>Etudiant/EnreChambre" class="nav-links" id="Chambre">Enregistrer Chambre</a>
            </li>
            <li>
                <a href="<?= ROOTURL ?>Etudiant/ListeChambre" class="nav-links" id="listeC">Liste Chambre</a>
            </li>
        </ul>
    </nav>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
        crossorigin="anonymous"></script>

    <div class="affiche" id="affiche">
        <?= $content ?>
    </div> 

</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--  <script>
        let mainNav=document.getElementById('main-nav');
        let navbarToggle=document.getElementById('navbar-toggle');

        navbarToggle.addEventListener('click',function(){

            if(this.classList.contains('active')){
                mainNav.style.display="none";
                this.classList.remove('active');
            }
            else{
                mainNav.style.display="flex";
                this.classList.add('active');

            }
        });
    $(document).ready(function(){
        $('.nav-links').click(function(e){
            if(e.target.id === 'Etudiant'){
                $('#affiche').load('<?= ROOTURL ?>/etudiants/EnregistrerEtudiant');
            }else if(e.target.id === 'listeE'){
                $('#affiche').load('<?= ROOTURL ?>/etudiants/ListeEtudiant');
            }else if(e.target.id === 'Chambre'){
                $('#affiche').load('<?= ROOTURL ?>/etudiants/EnreChambre');
            }else if(e.target.id === 'listeC'){
                $('#affiche').load('<?= ROOTURL ?>Etudiant/ListeChambre');
            }
        });
    });
    </script> 
 -->

</html>