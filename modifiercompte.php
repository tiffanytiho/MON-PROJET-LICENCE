<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>profile edit data and skills - Bootdey.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/modifierCompte.css">
    </head>
    <body>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4>John Doe</h4>
                                        <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                        <button class="btn btn-primary">Suivre</button>
                                        <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>Twitter
                                        </h6>
                                        <span class="text-secondary">@bootdey</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                            Instagram
                                        </h6>
                                        <span class="text-secondary">bootdey</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary">
                                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                            </svg>
                                            Facebook
                                        </h6>
                                        <span class="text-secondary">bootdey</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nom </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="nom" class="form-control" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> Prénoms  </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="prenom" class="form-control" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" name="email" class="form-control" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="tel" name="telephone" class="form-control" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="tel" name="mobile" class="form-control" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                <h6 class="mb-0">Addresse</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="adress" name="adresse" class="form-control" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="button" name="submitButton" class="btn btn-primary px-4" value="Enregistrer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"> </script>
<script type="text/javascript"> </script>
</body>
</html>

<?php
if(isset($_POST['submitButton'])) {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];
    $mobile=$_POST['mobile'];
    $adresse=$_POST['adresse']; 

    // Connexion à la base de données (à personnaliser)
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe_bd = "";
    $base_de_donnees = "projet simplon";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $base_de_donnees);

    // Vérifier la connexion à la base de données
    if ($connexion->connect_error) {
        die("Échec de la connexion à la base de données : " .$connexion->connect_error);
    }

    // Préparer et exécuter la requête d'insertion
    $insertion = "INSERT INTO utilisateur (nom, prenom, email, motpasse) VALUES ( ?, ?, ?, ?)";
    $requete = $connexion->prepare($insertion);

    if (!$requete) {
        die("Erreur de préparation de la requête : " .$connexion->error);
    }

    $requete->bind_param("ssss", $nom, $prenom, $email, $motpasse);

    if ($requete->execute()) {
        header("Location:connexion.php");
    } else {
        echo "Erreur lors de l'inscription : " . $requete->error;
    }

}

?>