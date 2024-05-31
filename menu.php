<?php

session_start();

if(!isset($_SESSION["id"])) {
    header('Location: connexion.php');
}

?>
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
    include("includes/vue/header.php");
    ?>
    
    <main>
        <h2 id="stylized-left">
            Menu du jour
        </h2>

        <?php

        if(isset($_GET["commande"]) && $_GET["commande"] == "success") {
            echo "<div class='success'><b>Succès !</b>Votre commande à bien été prise en compte !</div>";
        } 

        ?>

        <div>
        <form>
            <div id="menu">
                    <div class="card" id="entree">
                        <img src="assets/images/repas/entree.png" alt="">
        
                        <h2>Entrées</h2>
                    </div>
        
                    <div class="card" id="plat">
                        <img src="assets/images/repas/plat.png" alt="">
        
                        <h2>Plats</h2>
                    </div>
        
                    <div class="card" id="dessert">
                        <img src="assets/images/repas/dessert.png" alt="">
        
                        <h2>Desserts</h2>
                    </div>
                </div>
                
                <div id="commanderbutton">
                    <input type="submit" value="Commander" class="button"  id="OpenPopup">
                </div>

        </div>
        </form>

        <div id="ext-popup">
            <div id="popup">
                <form action="includes/controleurs/reservation.php" method="POST">

                    <h2>Finalisez la commande de votre repas</h2>
                    <hr>
                    <p>Entrée sélectionnée: <span id="inputEntree"></span><input type="text" name="entree" id="choixEntree" hidden></p>
                    <p>Plat sélectionné: <span id="inputPlat"></span><input type="text" name="plat" id="choixPlat" hidden></p>
                    <p>Dessert sélectionné: <span id="inputDessert"></span><input type="text" name="dessert" id="choixDessert" hidden></p>
                    <br>
                    <p>Heure de la collecte: 
                        <select name="heure">
                            <option value="11:30">11h30</option>
                            <option value="11:45">11h45</option>
                            <option value="12:00">12h00</option>
                            <option value="12:15">12h15</option>
                            <option value="12:30">12h30</option>
                            <option value="12:45">12h45</option>
                            <option value="13:00">13h00</option>
                            <option value="13:15">13h15</option>
                            <option value="13:30">13h30</option>
                        </select>
                    </p>

                    <input type="checkbox" name="pain" id="pain">
                    <label for="pain">Souhaitez-vous du pain ?</label>
                    
                    <br><input type="text" name="instructions" id="instructions" placeholder="Donnez une instruction à la personne chargée de la préparation de votre repas">

                    <input type="submit" class="button">

                </form>
            </div>
        </div>
        
       
    </main>

    <script src="scripts/script.js"></script>

    <script>
        // On click on label, check the checkbox
        document.querySelectorAll('label').forEach(label => {
            label.addEventListener('click', () => {
                const checkbox = label.previousElementSibling;
                checkbox.checked = !checkbox.checked;
            });
        });

        const popupButton = document.getElementById('OpenPopup');
        const extPopup = document.getElementById('ext-popup');
        const popup = document.getElementById('popup');

        popupButton.addEventListener('click', () => {
            console.log('click');
            extPopup.style.display = 'block';
        });

        //on form submit
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const choixEntree = document.getElementById('entree');
            const choixPlat = document.getElementById('plat');
            const choixDessert = document.getElementById('dessert');

            const entree = document.getElementById('choixEntree');
            const plat = document.getElementById('choixPlat');
            const dessert = document.getElementById('choixDessert');

            const entreesChoisies = choixEntree.querySelectorAll('input[type="checkbox"]:checked');
            const platsChoisis = choixPlat.querySelectorAll('input[type="checkbox"]:checked');
            const dessertsChoisis = choixDessert.querySelectorAll('input[type="checkbox"]:checked');

            const inputEntree = document.getElementById('inputEntree');
            const inputPlat = document.getElementById('inputPlat');
            const inputDessert = document.getElementById('inputDessert');

            var entreeValue = '';
            var platValue = '';
            var dessertValue = '';

            for (let i = 0; i < entreesChoisies.length; i++) {
                entreeValue += entreesChoisies[i].nextElementSibling.textContent + ', ';
            }

            for (let i = 0; i < platsChoisis.length; i++) {
                platValue += platsChoisis[i].nextElementSibling.textContent + ', ';
            }

            for (let i = 0; i < dessertsChoisis.length; i++) {
                dessertValue += dessertsChoisis[i].nextElementSibling.textContent + ', ';
            }

            entreeValue = entreeValue.slice(0, -2);
            platValue = platValue.slice(0, -2);
            dessertValue = dessertValue.slice(0, -2);

            entree.value = entreeValue || 'Aucune entrée sélectionnée';
            plat.value = platValue || 'Aucun plat sélectionné';
            dessert.value = dessertValue || 'Aucun dessert sélectionné';

            inputEntree.textContent = entreeValue || 'Aucune entrée sélectionnée';
            inputPlat.textContent = platValue || 'Aucun plat sélectionné';
            inputDessert.textContent = dessertValue || 'Aucun dessert sélectionné';

        });

        var url = "https://api.repas.crous.alexis-rarchaert.fr/getRepas/r666";

        fetch(url)
            .then(response => response.json())
            .then(data => {
                const entrees = data[0].entrees;
                const plats = data[0].plats;
                const desserts = data[0].desserts;

                for (let i = 0; i < entrees.length; i++) {
                    entree.innerHTML += `<input type="checkbox" name="entree${i}"><label for="entree${i}">${entrees[i]}</label>`;
                }

                for (let i = 0; i < plats.length; i++) {
                    plat.innerHTML += `<input type="checkbox" name="plat${i}"><label for="plat${i}">${plats[i]}</label>`;
                }

                for (let i = 0; i < desserts.length; i++) {
                    dessert.innerHTML += `<input type="checkbox" name="dessert${i}"><label for="dessert${i}">${desserts[i]}</label>`;
                }
            });
    </script>
</body>
</html>
