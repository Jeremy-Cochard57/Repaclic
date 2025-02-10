<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Optimisez vos dépenses grâce à nos services de dépannage informatique à distance. ZenovaTech offre des solutions personnalisées, fiables et efficaces pour les particuliers et les entreprises, avec une assistance disponible 24h/24 et 7j/7.">
    <title>Dépannage informatique à distance - Accueil</title>
    <link rel="icon" href="Image/ZENOVATECH.ico">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <style>
        @media (max-width: 768px) {
            .bubble {
                display: none;
            }

            .bubble,
            #chatBtn {
                display: none;
            }
        }
    </style>
</head>

<body>
    <?php include 'Integration/nav.php'; ?>
    <?php include 'Integration/add.html'; ?>

    <!-- Slogan -->
    <div class="sloganHaut">
        <h1 class="GrosTitre">Optimisez vos dépenses, payez à la déduction !</h1>
    </div>

    <!-- Conteneur principal -->
    <div class="container">
        <!-- Qui sommes-nous -->
        <div class="Quisommes-nous">
            <h1 id="Quisommes-nousH1">Qui sommes-nous ?</h1>
            <p>Nous sommes des entrepreneurs passionnés et ambitieux, animés par la volonté d’aider un maximum de
                personnes à des <strong>tarifs définis par vous.</strong><br></p>
            <p>Nous croyons que <strong>les difficultés des uns ne devraient pas être une opportunité de profit pour les
                    autres.</strong><br></p>
            <p>Forts d’une <strong>solide expérience</strong> dans le domaine du dépannage informatique, nous avons
                consolidé nos
                compétences afin de vous offrir un <strong>service à distance fiable, efficace et à
                    l'écoute.</strong><br></p>
            <p id="MarginQuisommes-nous"><strong>N’hésitez pas à nous contacter pour n'importe toute interrogation
                    !</strong><br></p>
            <p>📧 E-mail : <a class="mailQuiSommes-nous" href="mailto:Help@repaclic.fr">Help@repaclic.fr</a></p>
        </div>

        <!-- Vidéo Présentation -->
        <div class="video-container">
            <video autoplay loop muted>
                <source src="Video/videopresentation.mp4" type="video/mp4">
                Désolé, votre navigateur ne prend pas en charge la vidéo.
            </video>
        </div>
    </div>

    <?php include 'Integration/nousContacter.html'; ?>

</html>