<?php 
  $nick=$_POST['nickname'];  
  $email=$_POST['email'];  
  $license_key=$_POST['license_key'];  
  $pwd=$_POST['pwd'];  
   require_once 'functions.php';
    require_once 'db.php';

   if(emptyInput($nick, $email, $license_key, $pwd) !== false){
    //header("location: ./main.php?error=emptyinput");
    echo 'Error: empty input';
    exit();
   }

   elseif (userExists($conn, $nick, $email, $license_key, $pwd) !== false){
    //header("location: ./main.php?error=userexists");
    echo 'Error: user exists';
    exit();
   }
?>