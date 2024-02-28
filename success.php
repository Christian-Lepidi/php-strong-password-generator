<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Page</title>
</head>
<body>
  <h1 class="text-center text-success mb-4">PASSWORD GENERATA CON SUCCESSO</h1>  
  <h3 class="text-center text-danger"><?php echo $_SESSION["password"]  ?></h3> 

</body>
</html>