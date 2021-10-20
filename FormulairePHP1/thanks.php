<?php

// quête 1 formulaire +

echo "Merci  " . htmlspecialchars($_POST["User_firstname"]) . " "  .

htmlspecialchars ($_POST["User_lastname"]) . " de nous avoir contacté à propos de " . 

htmlspecialchars ($_POST["User_sujet"]) . ".   Un de nos conseiller vous contactera soit à l'adresse " .

$_POST["User_email"] . " ou par téléphone au " .

htmlspecialchars($_POST["User_phone"]) . "  dans les plus brefs délais pour traiter votre demande : " .

$_POST["User_message"]; 

?>

<?php
 
// quête 2 sécurisation

  $user_firstname = $_POST['User_firstName'];
  $user_lastname = $_POST['User_name'];
  $user_Sujet = $_POST['User_sujet'];
  $user_email = $_POST["User_email"];
  $user_phone = $_POST['User_phone'];
  $user_message = $_POST['User_message'];


    if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
      echo "Merci $user_firstName $user_name de nous avoir contacté à propos de $Sujet.
    Un de nos conseiller vous contactera soit à l’adresse $user_email ou par téléphone au $user_phone dans les plus brefs délais pour traiter votre demande: $user_message ";
      } else {
        echo "L'adresse email '$user_email' est invalide.";
    }
?>

