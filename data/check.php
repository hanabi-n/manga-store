<?php
  
  require 'db.php';

  $loggedin = false;

  if(isset($_POST)){
 
      session_start();
      $users = getAll();
           
      foreach($users as $u){
          if($_POST['email'] == $u['email'] and $_POST['password'] == $u['password']){
              $loggedin = true;
          }
      } 


      // переменная     
      $_SESSION['mail']     = $_POST['email'];
      $_SESSION['userName'] = getOneUser($_POST['email']);
      // $_SESSION['roleID']   = getOneUser($_POST['email']);
  }



  if($loggedin){
        header("Location: ../manga.php");

  }else{ 
        header("Location: ../signIn.php?notlogged");
  }


//   if(isset($_POST['firstname']) && isset($_POST['password'])){

//     session_start();

//     //переменная
//     $_SESSION['username'] = $_POST['firstname'];
    
    

//     header("Location:courses.php");
// }




?>

