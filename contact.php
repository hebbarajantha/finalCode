<?php

if(isset($_POST['submit'])){

    $mailFrom=$_POST['email'];
    $subject="Website Response";
    $message=$_POST['msg1'];

    $mailTo="codefury@rediffmail.com";
    $headers="From: ".$mailFrom;
    $txt="you have received an e-mail from".$mailFrom."\n\n".$message;


    if(mail($mailTo, $subject, $txt, $headers))
    {
    echo"<h1>Sent Successfull! Thank You"." We will contact you shortly<h1>";
    }

    header("Location: index.php?mailsend");


}
?>