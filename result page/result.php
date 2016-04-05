<?php

if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$result = $_POST['result'];

if($result !='')
{
//  To redirect form on a particular page
header("Location:http://aucoe.annauniv.edu/cgi-bin/result/cgrade.pl?regno=$result" );
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Coming soon page">
    <meta name="author" content="Your name">
    <title>Coming soon page built on Twitter Bootstrap</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href="css/text.css" rel="stylesheet" type='text/css'>
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type='text/css'>
    <!-- Jquery Countdown -->
    <link href="css/jquery.countdown.css" rel="stylesheet" type='text/css'>
    <!-- Fontawesome -->
    <link href="css/font-awesome.css" rel="stylesheet" type='text/css'>
    <link href="css/gif.css" rel="stylesheet" type='text/css'>
    <!-- Full screen slider -->
    <link href="css/full-screen-slider.css" rel="stylesheet" type='text/css'>
    <link href="css/resu.css" rel="stylesheet" type='text/css'>
    <!-- Coming soon -->
    <link href="css/coming-soon.css" rel="stylesheet" type='text/css'>
    <!-- Coming soon responsive -->
    <link href="css/coming-soon-responsive.css" rel="stylesheet" type='text/css'>
    <!--[if IE 7]>
      <link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.min.css">
    <![endif]-->
      <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/coming-soon-ie-lt-9.css">
    <![endif]-->
  </head>
  <body>
    <div class="full-screen-slider">
      <!-- Put the list of images you want to slide in full screen here.
       The image which has the class 'active' will be the starting slide.
     -->




    </div>

    <div class="container">





      <div class="widget transparent lighting-border rounded-corner">
        <h1 class="brand align-center">
          <i class="icon-check"></i> Anna University
        </h1>
        
        <h2 class="description">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Keep calm its just an exam &nbsp &nbsp <img class="Centered" src="img/an1.gif" alt="loading" height="150px" width="150px" />
        </h2>
        <!-- Below div will be transformed as counter -->

        <div class=resu>
        <form method="post">
      <strong>  Register no:</strong> <input id="result" name="result" placeholder='Enter no' type=text maxlength="15"> <br>
        <input type="submit" id='submit' name="submit" type='submit' value='submit'"> <input type="reset">
      </form>
    </div>

    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script type="text/javascript" src="js/full-screen-slider.js"></script>
    <script type="text/javascript" src="js/coming-soon.js"></script>
  </body>
</html>
