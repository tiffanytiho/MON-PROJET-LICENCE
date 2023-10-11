<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/creation.css">
    <title>Page de Connexion</title>
</head>
<body class="body">
    <main>
        <div class="login-container">
            <div class="left">
                <img src="images/creation1.jfif" alt=" photo de connexion">
            </div>

            <div class="right">
                <h1>Créez votre compte</h1>
                <form method="POST">
                    <input type="text" name="nom" placeholder="Nom d'utilisateur" required>
                    <input type="text" name="prenom" placeholder="Prénom d'utilisateur" required>
                    <input type="email" name="email" placeholder=" email" required>
                    <input type="password" name="motpasse" placeholder="Mot de passe" required><br>

                    <button type="submit" name="submitButton" class="custom-button"> Créer </button>
                </form> 

            <!-- Action apres avoir appuyé sur le bouton créer -->
            <?php

                if (isset($_POST['submitButton'])) {
                    // Récupérer les données du formulaire
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $email = $_POST['email'];
                    $motpasse = $_POST['motpasse'];

                    /*FOOTER */
                    include 'codedeconnexion.php';
                    /* FOOTER */

                    // Connexion à la base de données (à personnaliser)
                    /*$serveur = "localhost";
                    $utilisateur = "root";
                    $mot_de_passe_bd = "";
                    $base_de_donnees = "projet_simplon";

                    // Créer une connexion à la base de données
                    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $base_de_donnees);*/

                    // Vérifier la connexion à la base de données
                    if ($connexion->connect_error) {
                        die("Échec de la connexion à la base de données : " . $connexion->connect_error);
                    }

                    // Utilisez des requêtes préparées pour éviter les injections SQL
                    $insertion = "INSERT INTO utilisateur (nom, prenom, email, motpasse) VALUES (?, ?, ?, ?)";
                    $requete = $connexion->prepare($insertion);

                    if (!$requete) {
                        die("Erreur de préparation de la requête : " . $connexion->error);
                    }

                    // Hachez le mot de passe pour des raisons de sécurité
                    $motpasse_hache = password_hash($motpasse, PASSWORD_DEFAULT);

                    // Liez les paramètres et exécutez la requête
                    $requete->bind_param("ssss", $nom, $prenom, $email, $motpasse_hache);

                    if ($requete->execute()) {
                        header("Location: connexion.php");
                        exit; // Assurez-vous de quitter le script après la redirection
                    } else {
                        echo "Erreur lors de l'inscription : " . $requete->error;
                    }

                    // Fermez la connexion à la base de données
                    $connexion->close();
                }

            ?>
        </div>
    </main>
</body>
</html>
