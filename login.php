<form  method="POST">
        <h1>Inloggen admin</h1>
        
        <fieldset>
          <label for="name">Gebruikersnaam:</label>
          <input type="text" id="name" name="username">
          
          <label for="password">Wachtwoord:</label>
          <input type="password" id="mail" name="password">
        
        <input type="submit" name="submit">
 </form>

<?php

include "database.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $username = $_POST['username'];
      $password = $_POST['password'];

      $db = new database();
      $db->login($username, $password);      
  }


?>