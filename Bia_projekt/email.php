<?php


    $name = $_POST['nev'];
    $email = $_POST['email'];
    $subject = "Uj_weboldal_email";
    $message = $_POST['uzenet'];
    $save=$name+"   "+$email+"  "+$message;
    $myfile = fopen("email.txt", "w");
    fwrite($myfile, $save);
    fclose($myfile);
?>
