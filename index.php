<?php
require_once __DIR__."/functions.php";


$form_sent = !empty($_GET["user-number"]);

if ($form_sent){
  $user_number = $_GET["user-number"];
}

if(!empty($user_number)){
  header("Location: ./success.php");
  session_start();
  $_SESSION["password"]=randomPassword($user_number);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Strong Password</title>
</head>
<body>
  <h1 class="text-center text-danger mb2">PASSWORD GENERATOR</h1>
  <form method="GET">  
   <div class="col-5  mb-3">
    <label for="user-number" class="form-label ms-2">Numero di caratteri</label>
    <input type="number" class="form-control ms-2" id="user-number" name="user-number" min="7" max="15">
   </div>
   <button class="btn btn-success ms-2">Invia</button>
   
  </form> 
  <h3 class="text-center mt-3"><?php echo randomPassword($user_number)  ?></h3>
</body>
</html>