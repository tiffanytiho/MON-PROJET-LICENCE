<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de Saisie</title>
  <link rel="stylesheet" type="text/css" href="css/forum.css">
</head>
<body>
    <!-- ENTETE -->
    <?php include 'entete.php'; ?>
    <!-- FIN ENTETE -->

    <center> <h1> Publication </h1> </center>

    <div class="container">
        <div class="forum-input">
            <form method="POST" action="" enctype="multipart/form-data">
                <textarea name="message" placeholder="Saisissez votre message ici..." required></textarea>
                <input type="file" name="image" accept="image/*">
                <input type="text" name="location" placeholder="Entrez votre localisation ou nom du lieu">
            </form>
        </div>
    </div>
    
    <div class="container">
        <h1>Voici une carte Google Maps incorporée :</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.155691767286!2d-122.08404488468854!3d37.421999979830185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f9f9745000b79%3A0x5298621a66203270!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1563294587310!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
        </iframe>

        <p id="geolocation"></p>
        <button type="submit" name="submitButton" class="custom-button"> Envoyer </button>
        
    </div>

    <session>
        <div id="autres">
            <h1> Vous avez la possibilité d'ajouter une catégorie </h1>
            <div class="">

            </div>
        </div>
    </session>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
    <!-- FOOTER -->

    <?php
 
        if(isset($_POST['submitButton'])) {

            
            /*CONNEXION */
            include 'codedeconnexion.php';
            /* CONNEXIONM */

            

        }
    ?>

</body>
</html>