 <?php


if($_POST){

$errors = array(); 

       if (empty($_POST['firstname'])){
          $error['firstname1'] = "veuillez saisir un champ";

       if (empty($_POST['lastname'])){
          $error['lastname1'] = "veuillez saisir un champ";
          }
       if (empty($_POST['sujet'])){
          $error['sujet1'] = "veuillez saisir un sujet";
          } 
       if (empty($_POST['email'])){
          $error['email1'] = "veuillez saisir un email";
          }
       if (empty($_POST['phone'])){
          $error['phone1'] = "veuillez saisir un numéro de téléphone";
          } 
       if (empty($_POST['message'])){
          $error['message1'] = "veuillez saisir un message";
          }


      if (count($errors) == 0){
         header("location: thanks.php");
         exit();
      }
}
}

?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>


  <body>

  <form action="thanks.php" method="post">

<div>
    <p>
      <label  for="fisrtname">Prénom</label>
      <input  type="text"  id="fisrtname"  name="User_firstname" require>
    </p> 
    <p><?php if(isset($_POST['firstname1'])) echo $errors['firstname1'];  ?></p>
      
</div>

<div>
    <p>
      <label  for="lastname">Nom</label>
      <input  type="text" id="lastname"  name="User_lastname" require>
    </p>
     <p> <?php if(isset($errors['lastname1'])) echo $errors['lastname1']; ?> </p>

</div>


<div>
      <label for="sujet">Sujet</label>
      <select id="sujet-select" name="User_sujet" require>
          <option value="votre compte">votre compte </option>
          <option value="vos commandes">vos commandes</option>
          <option value="votre dernier achat">votre dernier achat</option>
          <option value="nos">nos produits</option>        
       </select>
       <p> <?php if(isset($errors['message1'])) echo $errors['message1']; ?></p> 
</div>


<div>
   <p>
      <label for="email">Email </label>
      <input type="email"  id="email"  name="User_email" require>
  </p>
      <p> <?php if(isset($errors['email1'])) echo $errors['email1']; ?> </p>
</div>

     
<div>
    <p>
      <label  for="phone">Téléphone </label>
      <input  type="text"  id="phone"  name="User_phone" require>
    </p>
     <p> <?php if(isset($errors['phone1'])) echo $errors['phone1']; ?> </p>  
     
</div>


<div>
    <p>
      <label  for="message">Message </label>
      <textarea  id="message"  name="User_message"></textarea require>
   </p> 
     <p> <?php if(isset($errors['message1'])) echo $errors['message1']; ?></p>  
</div>
    

<div  class="button">
      <p>
      <button  type="submit"> Go one ! </button>
     </p>
</div>
  </form>


  </body>
</html>