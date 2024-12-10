            <!--Traitement du formulaire-->
            <?php
            //Vérification de la réponse à la question de sécurité
            if ($_POST["security"] == 7) {
                header("Refresh: 3; url=../Contact.php"); 
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
                
            } else {
                //si la question de sécurité est mal répondu, on affiche un message d'erreur 
                echo "\n <h2>La réponse à la question de sécurité est incorrecte</h2>";
                //et on redirige vers la page de contact
                header("Refresh: 3; url=../Contact.php"); 
                return;
            }
            
            
//probleme avec la possibilité d'enlever  le required dans le code
//retour en arrière possible après envoi, avec toutes les infos gardées donc possibilité de spam
//faire redirection directement après l'envoi des infos
//auto évaluation pas tout remplis
?>
            
            