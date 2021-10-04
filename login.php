<form  method="POST">
        <h1>Inloggen admin</h1>
        
        <fieldset>
          <label for="name">Gebruikersnaam:</label>
          <input type="text" id="name" name="username" required>
          
          <label for="password">Wachtwoord:</label>
          <input type="password" id="mail" name="password" required>
        
        <input type="submit" name="submit">
 </form>

<?php

include "database.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $username = stripcslashes($username);  
  $password = stripcslashes($password);  

      
      $db = new database();
      $db->login($username, $password);      
  }


?>