<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="BONNE Morgan">
    <meta name="Description" content="Site sur l'univers cyberpunk">
    <meta name="Key-words" content="Site univers cyberpunk 2077 jeux vidéo">
    <title>Contact</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="icon" type="image/png" href="img/favicon.ico">
</head>

<body>
    <!--Header avec logo à gauche et menu à droite-->
    <header>
        <!--le logo-->
        <div id="logo">
            <a href="../index.php"><img src="img/Cyberpunk_2077_logo.svg.png" alt="logo"></a>
        </div>
        <!--le menu des différentes pages-->
        <div class="menu">
            <ul>
                <li id="menuNav"><a href="../index.php">Accueil</a></li>
                <li id="menuNav"><a href="Univers.php">Univers</a></li>
                <li id="menuNav"><a href="NightCity.php">NightCity</a></li>
                <li id="menuNav"><a href="Personnage.php">Personnages</a></li>
                <li id="menuNav"><a href="Contact.php">Contact</a></li>
            </ul>
        </div>
    </header>
    <main>
        <!--Ceci est le Titre en haut de page avec une image de fond-->
        <div class="topPageC">
            <div class="titreTop">
                <h2><span>Contactez-nous</span> grâce à ce formulaire</h2>
            </div>
        </div>
        <!--Formulaire de contact-->
        <div class="flex-center">
            <form action="php/form.php" method="POST">
                <fieldset>
                    <!--Titre du formulaire-->
                    <legend>Formulaire de contact</legend>
                    <!--Champs du formulaire-->
                    <p>
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" placeholder="Nom" required>
                    </p>
                    <p>
                        <label for="prenom">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                    </p>
                    <p>
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" placeholder="Adresse@domaine.fr" required>
                    </p>
                    <p>
                        <label for="tel">Numéro de téléphone :</label>
                        <input type="tel" id="tel" name="tel" placeholder="06 12 34 56 78" pattern="^0[67][0-9]{8}$" required>
                    </p>
                    <p>
                        <label for="message">Message :</label>
                        <textarea id="message" name="message" placeholder="Inscrivez votre message" required></textarea>
                    </p>
                    <!--Question de sécurité-->
                    <fieldset>
                        <legend>Sécurité : </legend>
                        <label for="security"><img src="img/captchat.png" alt="captchat"></label>
                        <select name="security" id="security" required>
                            <option value="0">Sélectionnez la bonne réponse</option>
                            <option value="1">8</option>
                            <option value="2">22</option>
                            <option value="3">102</option>
                            <option value="4">4*0</option>
                            <option value="5">((44858493903058/2)*0.001)+1</option>
                            <option value="6">7</option>
                            <option value="7">Aucunes des options</option>
                        </select>
                    </fieldset>
                    <!--Bouton d'envoi-->
                    <div>
                        <input id="submit" type="submit" value="Envoyer">
                    </div>
                </fieldset>
            </form>
        </div>

    </main>
    <!--Footer avec logo à gauche et menu à droite-->
    <footer>
        <div class="container">
            <!--Logo fans le footer à gauche-->
            <div class="flex-center">
                <div id="imgFooter">
                    <a href="index.php"><img src="img/Cyberpunk_2077_logo.svg.png" alt="image logo"></a>
                </div>
            </div>
            <!--Menu dans le footer à droite-->
            <div id="footerPages">
                <ul>
                    <li><a href="../html/Univers.php">Univers</a></li>
                    <li><a href="../html/NightCity.php">NightCity</a></li>
                    <li><a href="../html/Personnage.php">Personnage</a></li>
                    <li><a href="../html/Contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <!--Texte de droit d'auteur-->
        <div id="copyright">
            <p>2024 BONNE Morgan © TOUS DROITS RÉSERVÉS.</p>
        </div>
    </footer>
</body>

</html>