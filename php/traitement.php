<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       $prenom = $_POST['prenom'];
       $nom = $_POST['nom'];
       $email = $_POST['email'];
       $sujet = $_POST['sujet'];
       $message = $_POST['message'];
       $EmailTo = "bibi080@live.fr";
       $EmailFrom = $_POST['email'];
    

        $Body = "";
        $Body .= "prenom: ";
        $Body .= $prenom;
        $Body .= "\n";
        $Body .= "nom: ";
        $Body .= $nom;
        $Body .= "\n";
        $Body .= "email: ";
        $Body .= $email;
        $Body .= "\n";
        $Body .= "sujet: ";
        $Body .= $sujet;
        $Body .= "\n";
        $Body .= "message: ";
        $Body .= $message;
        $Body .= "\n";


       $success = mail($EmailTo, $sujet, "From: <$EmailFrom>");

       if ($success){
           echo "votre message à bien été envoyé.";
       }
       else{
           echo "Une erreur s'est produite à l'envoi de votre message.";
       }
    ?>
</body>
</html>