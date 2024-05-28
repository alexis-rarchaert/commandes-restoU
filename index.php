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

        <div class="sideside">
            <div class="left">
                <img src="assets/images/attente.png" alt="Illustration d'une personne attendant" class="illustration">
            </div>
            <div class="right">
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

        <div class="sideside ml-50">
            <div class="left">
                <h2>
                    Payez là ou vous le désirez.
                </h2>

                <p>
                    Notre système de paiement en ligne vous permet de régler votre repas de la manière qui vous convient le mieux. Choisissez parmi une variété de modes de paiement, y compris les cartes de crédit, les cartes de débit et les paiements mobiles. Vous pouvez également choisir de payer en ligne ou en personne, selon vos préférences. Notre système de paiement sécurisé garantit que vos informations personnelles et financières sont protégées à tout moment. Profitez de la commodité de payer en ligne ou en personne et choisissez le mode de paiement qui vous convient le mieux. Simplifiez votre expérience de restauration et profitez de la flexibilité de notre système de paiement en ligne dès aujourd'hui !
                </p>

                <a href="menu.php" class="button">
                    Réserver
                </a>
            </div>
            <div class="right">
                <img src="assets/images/attente.png" alt="Illustration d'une personne attendant" class="illustration">
            </div>
        </div>
    </main>

    <footer>
        <div>
            <img src="assets/images/crous_restauration.png" alt="Logo de l'application" id="logo">
        </div>
        <div>
            <a href="#">LESCROUS.FR</a> | <a href="#">MENU DU JOUR</a> | <a href="#">MODES DE PAIEMENT</a> | <a href="#">HISTORIQUE</a>
        </div>
    </footer>

<script src="scripts/script.js"></script>
</body>
</html>
