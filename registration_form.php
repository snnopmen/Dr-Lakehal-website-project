<?php  
  
  if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
     
    $mailTo = "dr.lakehal@gmail.com";
    $headers = "from: ".$mail;
    $txt = "you have received an e-mail from ".$name.". \n\n".$phone;


    mail($mailTo,$phone,$txt,$headers);
    header("Location: index.php?mailsned");
  }

 