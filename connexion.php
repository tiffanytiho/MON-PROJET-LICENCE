<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/connexion.css">
        <title>Page de Connexion</title>
    </head>
    <body class="body">
        <main>
        <div class="login-container">
            <div class="left">
                <img src="images/connexion.png" alt=" photo de connexion">
            </div>
            <div class="right">
                <h1>Connexion</h1>
                <form method="POST" >
                    <input type="email" name="email" placeholder="Email " required>
                    <input type="password" name="motpasse" placeholder="Mot de passe" required> <br>
                    
                    <button type="submit" name="submitButton" class="custom-button"> Se connecter </button>
                </form>

                <!-- Action après avoir appuyé sur le bouton connexion -->
                <?php

                if (isset($_POST['submitButton'])) {
                    // Connexion à la base de données 
                    /*$serveur = "localhost";
                    $utilisateur = "root";
                    $mot_de_passe_bd = "";
                    $base_de_donnees = "projet_simplon";

                    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $base_de_donnees);*/

                    /*FOOTER */
                    include 'codedeconnexion.php';
                    /* FOOTER */

                    // Vérifier la connexion à la base de données
                    if ($connexion->connect_error) {
                        die("Échec de la connexion à la base de données : " . $connexion->connect_error);
                    } else {
                        // Récupérez les données du formulaire
                        $email = $_POST['email'];
                        $motpasse = $_POST['motpasse'];

                        // Préparer une requête SQL avec une requête préparée
                        $sql = "SELECT * FROM utilisateur WHERE email = ?";
 
                        // Créer une requête préparée
                        $requete = $connexion->prepare($sql);

                        if (!$requete) {
                            die("Erreur de préparation de la requête : " . $connexion->error);
                        }

                        // Lier les paramètres
                        $requete->bind_param("s", $email);

                        // Exécuter la requête préparée
                        if ($requete->execute()) {
                            // Obtenir le résultat de la requête
                            $result = $requete->get_result();

                            if ($result->num_rows === 1) {
                                $row = $result->fetch_assoc();
                                $hashedPassword = $row['motpasse'];

                                if (password_verify($motpasse, $hashedPassword)) {
                                    // L'utilisateur est authentifié, vous pouvez le rediriger vers sa page d'accueil par exemple
                                    header("Location: forum.php");
                                    exit; // Assurez-vous de quitter le script après la redirection
                                } else {
                                    // L'authentification a échoué
                                    echo "<p class='error-message'>Mot de passe incorrect.</p>";
                                }
                            } else {
                                // L'utilisateur n'a pas été trouvé dans la base de données
                                echo "<p class='error-message'>Utilisateur non trouvé.</p>";
                            }
                        } else {
                            die("Erreur lors de l'exécution de la requête : " . $requete->error);
                        }

                        // Fermer la requête préparée
                        $requete->close();
                    }
                }

                ?>
                <p>Pas encore de compte ? <a href="creation.php">Créer un compte</a></p>
            </div>
        </div>
        </main>
    </body>
</html>