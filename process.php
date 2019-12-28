<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "davidgunadi@hotmail.com";
    $name = $_POST['iName'];
    $email = $_POST['iEmail'];
    $phone = $_POST['iPhone'];
    $message = $_POST['iMessage'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: http://edgeledger.net/success.html');
  }