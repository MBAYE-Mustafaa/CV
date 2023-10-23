<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    // Enregistrez ces données dans une base de données ou envoyez-les par e-mail, selon vos besoins.
    
    // Exemple : Envoyer un e-mail
    $to = "votre-email@example.com";
    $subject = "Nouveau message de contact de $name";
    $messageContent = "Nom: $name\nEmail: $email\nTéléphone: $phone\nMessage:\n$message";
    mail($to, $subject, $messageContent);
}
?>
