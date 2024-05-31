<main>
    <h2 id="stylized-left">
        Historique
    </h2>

    <?php

        if(isset($_GET["login"]) && $_GET["login"] == "success") {
            echo "<div class='success'><b>Succès !</b>Vous vous êtes bien connecté.</div>";
        } else if(isset($_GET["login"]) && $_GET["login"] == "already") {
            echo "<div class='already'><b>Vous n'avez pas été connecté !</b> Vous étiez déjà connecté</div>";
        } 
        ?>

    <!-- En tete tabelau -->
    <table>
        <thead>
        
            <tr>
                <th>Date</th>
                <th>Details</th>
                <th>Information</th>
            </tr>
        </thead>

        <tbody>
            <!-- Exemple n°1 -->
            <tr>
                <td rowspan="5">01/05/2024</td>
                <td>Entrée</td>
                <td>Salade</td>
            </tr>
            <tr>
                <td>Plat</td>
                <td>Poulet</td>
            </tr>
            <tr>
                <td>Dessert</td>
                <td>Tarte</td>
            </tr>
            <tr>
                <td>Supplément</td>
                <td>Pain</td>
            </tr>
            <tr>
                <td>Prix</td>
                <td>15€</td>
            </tr>

            <!-- Exemple n°2 -->

            <td rowspan="5">02/05/2024</td>
                <td>Entrée</td>
                <td>Soupe</td>
            </tr>
            <tr>
                <td>Plat</td>
                <td>Poisson</td>
            </tr>
            <tr>
                <td>Dessert</td>
                <td>Mousse</td>
            </tr>
            <tr>
                <td>Supplément</td>
                <td>Fromage</td>
            </tr>
            <tr>
                <td>Prix</td>
                <td>18€</td>
            </tr>
        </tbody>
    </table>

</main>