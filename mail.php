<?php


if (!empty($_POST)) {
    $name = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    $contenu = "Nom: $name\n";
    $contenu .= "Email: $email\n";
    $contenu .= "Message:\n$message\n\n";

    $fichier = "messages.txt";

    if ($handle = fopen($fichier, 'a')) {

        fwrite($handle, $contenu);
        fclose($handle);

        echo "Mail envoyé et enregistré.";
        echo "Vous serez rediger sur la page Accueil dans 3 secondes ";

        header("refresh:3;url=index.php");
    } else {
        echo "Erreur : Impossible d'ouvrir le fichier pour l'enregistrement.";
    }
} else {
    echo "Aucune donnée reçue.";
}