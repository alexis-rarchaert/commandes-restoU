<?php

session_start();

if(!isset($_SESSION["id"])) {
    header('Location: ../../connexion.php?login=needed');
}

//Utilisateur, commande
try {
    $bd = new PDO('mysql:host=localhost; dbname=rrl5056a', 'rrl5056a', 'P708424c');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$entree = filter_input(INPUT_POST, 'entree', FILTER_SANITIZE_STRING);
$plat = filter_input(INPUT_POST, 'plat', FILTER_SANITIZE_STRING);
$dessert = filter_input(INPUT_POST, 'dessert', FILTER_SANITIZE_STRING);
$heure = filter_input(INPUT_POST, 'heure', FILTER_SANITIZE_STRING);
$instructions = filter_input(INPUT_POST, 'instructions', FILTER_SANITIZE_STRING);
$pain = filter_input(INPUT_POST, 'pain', FILTER_SANITIZE_STRING);
$id_utilisateur = $_SESSION["id"];

echo "Entree: ", $entree, "<br>";
echo "Plat: ", $plat, "<br>";
echo "Dessert: ", $dessert, "<br>";
echo "Heure: ", $heure, "<br>";
echo "Instruction: ", $instructions, "<br>";
echo "Pain: ", $pain, "<br>";

try {
    $requete = "INSERT INTO `commande` (`payee`, `entree`, `plat`, `dessert`, `commentaire`, `id_utilisateur`, `pain`) VALUES ('off', :entree, :plat, :dessert, :instructions, :id_utilisateur, :pain)";

    $requetePreparee = $bd->prepare($requete);

    $requetePreparee->BindValue(':entree', $entree);
    if($requetePreparee == FALSE) { echo 'erreur passage paramètre pseudo'; }

    $requetePreparee->BindValue(':plat', $plat);
    if($requetePreparee == FALSE) { echo 'erreur passage paramètre pseudo'; }

    $requetePreparee->BindValue(':dessert', $dessert);
    if($requetePreparee == FALSE) { echo 'erreur passage paramètre pseudo'; }

    $requetePreparee->BindValue(':instructions', $instructions);
    if($requetePreparee == FALSE) { echo 'erreur passage paramètre pseudo'; }

    $requetePreparee->BindValue(':pain', $pain);
    if($requetePreparee == FALSE) { echo 'erreur passage paramètre pseudo'; }

    $requetePreparee->BindValue(':id_utilisateur', $id_utilisateur);
    if($requetePreparee == FALSE) { echo 'erreur passage paramètre pseudo'; }

    $requetePreparee->execute();
    if($requetePreparee == FALSE) { echo 'erreur exécution requête'; }

    var_dump($requetePreparee);
    
    $bd = NULL;
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

header('Location: ../../menu.php?commande=success');