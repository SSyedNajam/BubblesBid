<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $companyname = $_POST['companyname'];
    $website = $_POST['website'];

    $mailTo = "najamulhassan2439@gmail.com";
    $headers = "Form: ".$email;
    $txt = "You have recived an e-mail from ".$name.".\n\n"."Company Name: ".$companyname.".\n\n"."Website: ".$website;

    mail($mailTo,$txt,$headers);
    header("Location: register.php?mailsend");
}


?>