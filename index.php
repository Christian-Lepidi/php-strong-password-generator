<?php


$form_sent = !empty($_GET["user-number"]);

if ($form_sent){
  $user_number = $_GET["user-number"];
}


function randomPassword($user_number){
    $password ="";
    $possible_characters ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789<>!£$%&/()=?*#@";
    for ($i=0; $i < $user_number; $i++){
       $n= rand(0, strlen($possible_characters)-1);
       $password .= $possible_characters[$n];
    }
    return $password;
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
  <form method="GET">  
   <div class="col-5  mb-3">
    <label for="user-number" class="form-label ms-2">Numero di caratteri</label>
    <input type="number" class="form-control ms-2" id="user-number" name="user-number" min="7" max="15">
   </div>
   <button class="btn btn-success ms-2">Invia</button>
   
  </form> 
  <h3><?php echo randomPassword($user_number)  ?></h3>
</body>
</html>