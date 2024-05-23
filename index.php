<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RestoU &bull; Commandez en ligne</title>

    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        include("includes/vue/header.php")
    ?>
    
    <main>
        <div id="background">
            <h1>MoResto</h1>
            <p>Réservez votre repas à Castres</p>
        </div>

        <div id="sideside">
            <div id="left">
                <img src="assets/images/attente.png" alt="Illustration d'une personne attendant" class="illustration">
            </div>
            <div id="right">
                <h2 id="stylized-right">
                    Fini l'attente, réservez votre repas en 3 clics
                </h2>

                <p>
                    Notre tout nouveau système de réservation en ligne vous permet de gagner un temps précieux en évitant les files d'attente. En seulement trois clics, planifiez et réservez votre créneau de récupération de repas. Sélectionnez l'heure qui vous convient le mieux, choisissez vos plats préférés et soyez assuré de récupérer votre repas rapidement et efficacement. Dites adieu à l'attente interminable et profitez d'une expérience de restauration plus fluide et pratique au restaurant universitaire de Castres. Réservez dès maintenant et simplifiez votre routine alimentaire !
                </p>

                <a href="menu.php" class="button">
                    Réserver
                </a>
            </div>
        </div>
    </main>

<script src="scripts/script.js"></script>
</body>
</html>
