<?php
    $to = 'write2ranarahul@gmail.com';
    $subject = 'Testing Mail';
    $message = 'This is testing message';
    $headers = 'From: test@adhyay.co.in';

    if( mail($to,$subject,$message,$headers) ){
        echo 'Messge Sent Successfully';
    }else{
        echo 'Error While Emailing';
    }

?>