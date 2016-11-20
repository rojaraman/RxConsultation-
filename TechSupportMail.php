<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// the message
$msg = $_POST["message"];
$name = $_POST["name"];
$issue = $_POST["issue"];
$Phno = $_POST["phno"];
$headers = "From: " . $_POST["name"] . "\r\n" .
        "Phone: " . $_POST["phno"];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email
//mail(to,subject,message,headers,parameters);
$returnmail = mail("roja.raman@kony.com", $issue, $msg);
if ($returnmail == FALSE) {
    echo 'mail not sent';
}
?>