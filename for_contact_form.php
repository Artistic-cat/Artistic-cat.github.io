<?php
    $name= $_POST['Name'];
    $visitor_email= $_POST['Email ID'];
    $message= $_POST['Message'];

    $email_from= 'sris17ee@cmrit.ac.in';
    $email_subject= 'New Message from Portfolio';
    $email_body= 'Name: $name \n'.
        'Email ID: $visitor_email \n'.
        'Message: $message \n';
    $to= 'sristi.sinha30@gmail.com';
    $headers= 'From: $email_from \r\n';
    $headers= 'Reply-To: $visitor_email \r\n';
    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");
    
?>