<?php

if(isset($_POST['submit'])){
    $name =$_POST["quote-request-name"];
    $company =$_POST["quote-request-company"];
    $mailFrom =$_POST["quote-request-email"];
    $phone =$_POST["quote-request-phone"];
    $interest =$_POST["quote-request-interest.value"];
    $time_reach = $_POST["quote-request-reach"];
    $message =$_POST["quote-request-message"];

    $mailTo="info@gegson.com.ng";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    mail(mailTo,$company,$txt,headers);
    header("Location:index.html?mailsend");
}