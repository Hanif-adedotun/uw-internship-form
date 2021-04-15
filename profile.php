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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
      <!-- Css file -->
      <link rel="stylesheet" href="css/style.css" type="text/css">

    <title>Profile page</title>
 </head>
<body>
    <h1>Welcome intern <?php echo $username ?></h1>
   
     <div class="container-fluid">
      <div class="row align-items-start">
        <div class="col-md-4 col-sm-12">
        
          <div class="shadow div-container ">
          <div class="col-head ">Your projects timeline</div>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Completed 50%</div>
          </div>
              <?php
              echo '<div class="col-sm-12 task">';
              $i = 0;
              foreach ($tasks as $val) {
                
                echo '<p><span><i class="bi bi-caret-right-fill"></i></span>'.$val.' <i class="bi bi-clock"></i><span class="timeline"> '.$timeline[$i].'</span></p>';
                $i++;
              }
              echo '</div>';
            ?>
              
            
          </div>
        </div>

        <div class="col-md-4 col-sm-12">
          
          <div class="shadow div-container ">
            <div class="col-head">Personal Information</div>
            <div class="list">
              <div class="intern-avatar"><i class="bi bi-person-circle" ></i></div>
              <p><b class="color">Username:</b> <?php echo $username.' '.$lastname;?></p>
              <p><b class="color">Email:</b> <?php echo $_POST['email'] ?></p>
              <p><b class="color">Skills:</b><?php foreach($skills as $s){echo '<span> '.$s.', </span>';}?></p>
              <p><b class="color">Position:</b> <?php echo $position ;?></p>
              <p><b class="color">Group:</b> <?php echo $group ;?></p>
              <p><b class="color">Date started:</b> <i class="bi bi-calendar3" ></i> <?php echo $dateStarted ;?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12">
        
          <div class="shadow div-container ">
          <div class="col-head">Completed projects</div>
          <p><h3>Title of project</h3></p>
          <h4 class="mini-head">Project details</h4>
          <p><a href="#">Github link to project</a></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>

        </div>
   </div>
   <div class='row align-items-start'>
   </div>
</body>
</html>