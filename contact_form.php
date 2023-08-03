<?php
// Check if form is submitted
if(isset($_POST['submit'])) {
    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set your email address where you want to receive emails. 
    $to = 'connect.bilalsheikh@gmail.com';
    $subject = 'Contact Form Submission from '.$name;

    // Prepare email headers
    $headers = "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
    $headers .= 'From: <'.$email.'>'."\r\n";

    // Prepare HTML email body
    $htmlEmailContent = "<h2>Contact Form Submission</h2>
                         <p><b>Name:</b> {$name}</p>
                         <p><b>Email:</b> {$email}</p>
                         <p><b>Message:</b><br/>{$message}</p>";

    // Send email
    if(mail($to, $subject, $htmlEmailContent, $headers)){
        echo 'Email has sent successfully.';
    }else{
       echo 'Email sending failed.';
    }
}
?>
