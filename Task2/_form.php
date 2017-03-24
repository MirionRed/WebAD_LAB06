<?php
$method ="";
$valid = 0;
$salutation = $name = $email = $phone = "";
$salutationERR=$nameERR=$emailERR=$phoneERR="";
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(empty($_POST["salutation"])){
      $salutationERR = "Please select salutation";
    } else {
      $salutation = test_input($_POST["salutation"]);
    }

    if(empty($_POST["name"])){
      $nameERR = "Please enter name";
    }else {
      $name = test_input($_POST["name"]);
    }

    if(empty($_POST["email"])){
      $emailERR = "Please enter email";
    }else {
      $email = test_input($_POST["email"]);
      if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $emailERR = "Invalid email";
        //echo "Invalid email";
        $valid--;
      }
    }

    if(empty($_POST["phone"])){
      $phoneERR = "Please enter phone number";
    }else {
      $phone = test_input($_POST["phone"]);
      if (!preg_match("/^[0-9]*$/",$_POST["phone"])) {
        $phoneERR = "Invalid phone number";
        //echo "Invalid phone number";
        $valid--;
      }
    }
  }
  else {
    
  }

  function test_input($data){
    global $valid;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $valid++;
    return $data;
  }
?>
