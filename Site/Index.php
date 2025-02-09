<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="BONNE Morgan">
    <meta name="Description" content="Site sur l'univers cyberpunk">
    <meta name="Key-words" content="Site univers cyberpunk 2077 jeux vidéo">
    <title>CyberPunk</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="icon" type="image/png" href="img/favicon.ico">
</head>

<body>
    <!--Header avec logo à gauche et menu à droite-->
    <header>
        <!--le logo-->
        <div id="logo">
            <a href="index.php"><img src="img/Cyberpunk_2077_logo.svg.png" alt="logo"></a>
        </div>
        <!--le menu des différentes pages-->
        <div class="menu">
            <ul>
                <li id="menuNav"><a href="index.php">Accueil</a></li>
                <li id="menuNav"><a href="html/Univers.php">Univers</a></li>
                <li id="menuNav"><a href="html/NightCity.php">NightCity</a></li>
                <li id="menuNav"><a href="html/Personnage.php">Personnages</a></li>
                <li id="menuNav"><a href="html/Contact.php">Contact</a></li>
            </ul>
        </div>
    </header>
    <main>
        <!--Ceci est le titre en haut de page qui fait la taille de l'écran avec une image de fond-->
        <div class="imgTop">
            <div class="titre">
                <h1>CyberPunk <span>2077</span></h1>
                <h4>Un univers <span>futuriste</span></h4>
            </div>
        </div>
        <!--Une séparation entre le titre de haut de page et les autres élèments de la page avec des liens cliquable-->
        <div class="separation">
            <ul>
                <!--Les liens qui renvoient sur les différentes parties de l'Index "scroll auto"-->
                <li><a href="#UniversScroll">Univers</a></li>
                <li><a href="#NCScroll">NightCity</a></li>
                <li><a href="#PersoScroll">Personnages</a></li>
            </ul>
        </div>
        <!--Les éléments de la page qui introduisent aux pages du site, pour ici la page Univers-->
        <div class="flex-center">
            <div class="elemUnivers" id="UniversScroll">
                <div class="elemUniversGauche flex-center">
                    <h2>UN UNIVERS FUTURISTE QUI CLAQUE</h2>
                    <!--1ere image-->
                    <img src="img/voiture.jpg" alt="Image d'illustration style cyberpunk">
                    <!--Le texte 1ere image (gauche)-->
                    <h4>Ce monde Cyberpunk</h4>
                    <p>L'histoire de Cyberpunk 2077 prend place sur Terre en 2077 et se déroule dans la mégapole
                        futuriste
                        de NightCity dans l’État libre de Californie. Dans ce monde futuriste à tendance cyberpunk et
                        dystopique où règnent la pauvreté et les inégalités, l'influence des mégacorporations est
                        prédominante, celles-ci ayant pris le pas sur les gouvernements et dictant leur loi. Ainsi que
                        celle du cyberespace, la « Nouvelle Frontière » de cette époque.</p>
                    <!--Le bouton qui renvoie sur la page Univers-->
                    <button><a href="Univers.html">Voir plus</a></button>
                </div>
                <div class="elemUniversDroite flex-center">
                    <!--2eme image-->
                    <img src="img/techno_cyberpunk.png" alt="Image d'illustration style cyberpunk">
                    <!--Le texte 2eme image (droite)-->
                    <h4>Des technologies révolutionnaires</h4>
                    <p>Dans cet univers, certains usages de la technologie se sont démocratisés, notamment les
                        ajouts
                        d'implants cybernétiques permettant diverses augmentations du corps humain, ainsi que
                        l'usage de
                        drogues de synthèse variées et de « danse sensorielle.</p>
                </div>
            </div>
        </div>
        <!--Pour ici introduction à la page NightCity-->
        <div class="elemNC" id="NCScroll">
            <div class="NCtitre">
                <h2>NIGHTCITY, LÀ OÙ LE CRIME NE DORT JAMAIS</h2>
            </div>
            <!--L'image-->
            <div class="NCimg">
                <img src="img/nightcity.jpg" alt="Image d'illustration de la ville de NightCity">
            </div>
            <!--Le texte-->
            <div class="flex-center">
                <div class="NCtexte">
                    <h4>Une ville tentaculaire</h4>
                    <p>NightCity est une ville tentaculaire, où les gratte-ciels côtoient les bidonvilles, où les
                        corporations règnent en maître et où la criminalité est omniprésente. La ville est divisée en
                        six
                        districts, chacun ayant sa propre identité et sa propre histoire. Les quartiers les plus riches
                        côtoient les bidonvilles les plus pauvres, créant une atmosphère de tension permanente. La ville
                        est
                        également le théâtre de nombreux conflits entre les différentes factions qui la peuplent,
                        chacune
                        cherchant à étendre son influence et à asseoir son pouvoir sur la ville.</p>
                    <!--Le bouton qui renvoie sur la page NightCity-->
                    <div>
                        <button><a href="NightCity.html">Voir plus</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!--Pour ici introduction à la page Personnage-->
        <div class="elemP" id="PersoScroll">
            <div class="imgPerso">
                <!--Les images des personnages-->
                <img src="img/V.png" alt="photo de profil du personnage V">
                <img src="img/Jackie_Welles.webp" alt="photo de profil du personnage Jackie Welles">
                <img src="img/Johnny_Silverhand.webp" alt="photo de profil du personnage Johnny Silverhand">
            </div>
            <div class="flex-center">
                <div class="Ptexte">
                    <!--Le texte-->
                    <h2>Des personnages hauts en couleur</h2>
                    <p>Le jeu met en scène de nombreux personnages hauts en couleur, chacun ayant sa propre histoire et
                        sa
                        propre personnalité. Parmi eux, on retrouve V, le personnage principal du jeu, un mercenaire à
                        la
                        recherche de la clé de l'immortalité, Jackie Welles, son fidèle compagnon de route, et Johnny
                        Silverhand, un rocker rebelle bien décidé à renverser le système. Chacun de ces personnages a un
                        rôle à jouer dans l'histoire du jeu, et le joueur devra apprendre à les connaître et à interagir
                        avec eux pour progresser dans l'aventure.</p>
                </div>
            </div>
            <!--Le bouton qui renvoie sur la page Personnage-->
            <div class="flex-center">
                <button><a href="Personnage.html">Voir plus</a></button>
            </div>
        </div>
    </main>
    <!--Le footer avec une image et une liste de liens qui renvoient sur les différentes pages-->
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
                    <li><a href="html/Univers.php">Univers</a></li>
                    <li><a href="html/NightCity.php">NightCity</a></li>
                    <li><a href="html/Personnage.php">Personnage</a></li>
                    <li><a href="html/Contact.php">Contact</a></li>
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