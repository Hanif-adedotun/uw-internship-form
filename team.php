<?php
require 'testdb.php';
// Using this file imported

$team = array('Tochukwu Nwoke','Emmanuel Oreoluwa' ,'Hiqmat Atobiloye ', 'Hanif Adedotun ', 'Animashaun Hassan Olamide' );
$teamSkills = array('C++, Python ',' HTML, CSS, JavaScript ', 'Web dev, SEO, Digital Marketing ', 'Graphic design, HTML, CSS ', 'Budget, Finance, Marketing');
$teamimage = array('','images/emmanuel.jpg','','images/Hanif.jpeg', 'images/hassan.jpg');
$mentors = array('Emmanuel Amodu', 'Oddy Bassey', 'Zainab Sulyman');

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

    <title>Team credit</title>
 </head>
<body>
    <h1>Meet our team</h1>
     <div class="container-fluid">
          <div class="row team-container">
               <div class="col-md-6 col-sm-12">
                    <img src='images/team3.svg' class='team-img' alt='Team SVG Icon'/>
               </div>
               <div class="col-md-6 col-sm-12 dev-lead">
                    <div ><img class='lead-img' src='images/sovam.jpg' alt='Project lead Image'/></div>
                    <h2 class='lead-name'>Sovam Pradhan</h2>
                    <h4 class='lead-title'>Project lead</h4>
                    <p class='lead-skill'>Full stack developer</p>
                    <p class='lead-skill'>HTML, CSS, PHP, Python </p>
                    <p class='lead-quote'>Quote: Any fool can write code that a Computer can Understand. Good Programmers write Code that Human can Understand</p>
               </div>
          </div>
          <div class='row'>
               <?php 
               $i = 0;
               foreach ($team as $val) {
                  echo  "<div class='col-md-2 col-sm-10 dev-team'>";
                  echo   (empty($teamimage[$i])) ?  "<i class='bi bi-person-circle team-li-img'></i>":"<img class='dev-team-img' src='".$teamimage[$i]."' alt='Team profile' />"; 
                  echo    "<h4 class='lead-name'>". $val . "</h4>";
                  echo   "<p class='dev-team-skill'>" .$teamSkills[$i] ."</p>";
                  echo   "</div>";
                 $i++;
               }
               ?>
          </div>
          <div class='row mentors'>
               <div class='col-md-3'><h2>Our Mentors</h2></div>

               <?php 
               foreach($mentors as $m){echo '<div class="col-md-3 col-sm-12 mentor">'.$m.'</div>';}
               ?>
          
          </div>
     </div>
</body>
</html>