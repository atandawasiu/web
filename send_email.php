<?php
// Configuration
$to = 'atandawasiu13@gmail.com';
$subject = 'Request Submission';

//Validate Form Data
if($_SERVER['REQUEST_METHOD']===
'POST') {

    // Get Form Data
    $name =!empty($_POST['name'])?
    trim($_POST['name']):'Anonymous';
    
    $email =filter_var($_POST['email'],
    FILTER_VALIDATE_EMAIL);
    
    $message =!($_POST['message'])?
    trim($_POST['message']):";
    
    if($email && $message){
    
        // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    
    // Create email body
    $email_content ="Name:$name<br>Email:
    $email<br><br>Message:<br>$message";
    
    
    //Send email
    if(mail($to,&$subject,$email_content,$headers)){
        echo"<p>Your Message Has Been Sent Succefully.</p>";}
        else{
            echo"<h2>Oops!</h2>"; echo"<p>We're Sorrry, But Something Went Wrong. Please Try Again Later.</p>";
        } else {
         echo "<p>Please Provide A Valid Email And Message.</p>";
    }

    } else {
     echo"<p>405 Method Not Allowed.</p>";
     
}
?>








