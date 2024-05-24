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

        <div id="popup">
            <span id="close">&times;</span>
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
        const popup = document.getElementById('popup');
        const close = document.getElementById('close');

        popupButton.addEventListener('click', () => {
            popup.style.display = 'block';
        });

        close.addEventListener('click', () => {
            popup.style.display = 'none';
        });
    </script>
</body>
</html>
