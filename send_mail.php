<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "admin@odinaisolutions.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    mail($to, $subject, $message, $headers);
    
    echo "Email sent successfully!";
}
?>
