<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "james@leadkinetics.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "You have received  e-mail from ".$name.".\n\n"

    mail();
}