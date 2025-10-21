<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = htmlspecialchars($_POST['amount']);
    // This is where the payment processing logic can be
    // However, for educational demo purposes a successful payment will be completed
    echo "Payment of " . $amount . " Bitcoin received. Your files will be decrypted shortly.";
}
?>