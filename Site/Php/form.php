<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="icon" type="image/png" href="../img/favicon.ico">
</head>

<body>
    <main>
        <div class="formPage">
            <!--Traitement du formulaire-->
            <?php
            //Vérification de la réponse à la question de sécurité
            if ($_POST["security"] == 7) {
                //si la question de sécurité est bien répondu, on enregistre les informations dans un fichier
                $tab["nom"] = $_POST["nom"];
                $tab["prenom"] = $_POST["prenom"];
                $tab["email"] = $_POST["email"];
                $tab["tel"] = $_POST["tel"];
                $tab["message"] = $_POST["message"];
                $savetab = serialize($tab);
                $fichier = fopen("info.txt", "a+");
                fwrite($fichier, $savetab);
                fclose($fichier);
                echo "\n <h2>Votre message a bien été envoyé</h2>";
            } else {
                //si la question de sécurité est mal répondu, on affiche un message d'erreur 
                echo "\n <h2>La réponse à la question de sécurité est incorrecte</h2>";
                //et on redirige vers la page de contact
                header("Refresh: 3; url=../Contact.php"); 
                return;
            }
            ?>
            <button><a href="../Contact.php">Retour</a></button>
        </div>
    </main>
</body>

</html>