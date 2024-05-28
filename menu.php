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

        <div>
            <div id="menu">
                <div class="card">
                    <img src="assets/images/repas/entree.png" alt="">
    
                    <h2>Entrées</h2>
    
    
                    <input type="checkbox" name="entree1">
                    <label for="entree1">Carottes rapées</label>
                    
                    <input type="checkbox" name="entree2">
                    <label for="entree2">Pizza</label>
                    
                    <input type="checkbox" name="entree3">
                    <label for="entree3">Oeufs mayonnaise</label>
                </div>
    
                <div class="card">
                    <img src="assets/images/repas/plat.png" alt="">
    
                    <h2>Plats</h2>
    
    
                    <input type="checkbox" name="entree1">
                    <label for="entree1">Spaghetti</label>
                    
                    <input type="checkbox" name="entree2">
                    <label for="entree2">Hachis Parmentier</label>
                    
                    <input type="checkbox" name="entree3">
                    <label for="entree3">Ratatouille</label>

                    <input type="checkbox" name="entree3">
                    <label for="entree3">Poisson Pas-Né</label>

                    <input type="checkbox" name="entree3">
                    <label for="entree3">Steak végétal</label>
                </div>
    
                <div class="card">
                    <img src="assets/images/repas/dessert.png" alt="">
    
                    <h2>Desserts</h2>
    
                    <input type="checkbox" name="entree1">
                    <label for="entree1">Ile flottante</label>
    
                    <input type="checkbox" name="entree2">
                    <label for="entree2">Donut au chocolat</label>
                    
                    <input type="checkbox" name="entree3">
                    <label for="entree3">Yaourt aux fruits</label>
                </div>
            </div>
            
            <div id="commanderbutton">
                <a class="button" id="OpenPopup">
                    Commander
                </a>
            </div>
        </div>

        <div id="ext-popup">
            <div id="popup">
                <h2>Finalisez la commande de votre repas</h2>
                <hr>
                <p>Entrée sélectionnée: <span></span></p>
                <p>Plat sélectionné: <span></span></p>
                <p>Dessert sélectionné: <span></span></p>
                <br>
                <p>Heure de la collecte: 
                    <select>
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

                <a class="button" id="OpenPopup">
                    Valider la commande
                </a>
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
    </script>
</body>
</html>
