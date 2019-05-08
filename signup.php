<?php
  $name=$_POST["Name"];
  $Email=$_POST["Email"];
  $pass=$_POST["Password"];
  $conf_pass=$_POST["Confirm Password"];
  
  if(preg_match("/[^A-Za-z'-]/",$name)){
    die('invalid name and name should be alpha');
  
  else{
    if($pass!=$conf_pass)
      die('password not same');
    else{
      echo "Welcome ". $name."<br/>";
      echo "email ". $Email."<br/>";
      echo "pass ". $pass."<br/>";
      
      exit();
    }
  }
  ?>
