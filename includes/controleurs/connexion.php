<?php

session_start();

if(isset($_SESSION["id"])) {
    header('Location: ../../historique.php?login=already');
}

//Utilisateur, commande
try {
    $bd = new PDO('mysql:host=localhost; dbname=rrl5056a', 'rrl5056a', 'P708424c');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
$mot_de_passe = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);

try {
    $requete = "SELECT mot_de_passe, id_utilisateur, nom, prenom FROM utilisateur WHERE mail = :mail";

    $requetePreparee = $bd->prepare($requete);

    $requetePreparee->bindValue(':mail', $mail);
    $requetePreparee->execute(); // Exécuter la requête

    $resultat = $requetePreparee->fetch();
    $mot_de_passe_stocke = $resultat['mot_de_passe']; // Récupérer le mot de passe stocké

    if(password_verify($mot_de_passe, $mot_de_passe_stocke)) {
        echo "Mot de passe correct";

        $_SESSION["id"] = $resultat["id_utilisateur"];
        $_SESSION["nom"] = $resultat["nom"];
        $_SESSION["prenom"] = $resultat["prenom"];

        header('Location: ../../historique.php?login=success');
    } else {
        echo "Mot de passe incorrect";
        session_destroy();
        header('Location: ../../?login=error');
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}