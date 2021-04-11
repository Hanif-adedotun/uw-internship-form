<?php
// Get Username for database
require 'testdb.php';
// Using this file imported

// there will be a function here that will validate the information, that either returns an old form with problems or a profiule page 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!-- Css file -->
      <link rel="stylesheet" href="css/style.css" type="text/css">

    <title>Profile page</title>
 </head>
<body>
    <h1>Welcome intern <?php echo $username ?></h1>
     <p>Your email is <?php echo $_POST['email'] ?></p>
</body>
</html>