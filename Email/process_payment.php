<?php

// EDUCATIONAL DEMO: This file simulates the "backend" of a ransom payment.
// In a real attack, this would involve cryptocurrency validation.
// For this demo, it just acknowledges the "payment" to continue the simulation.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = htmlspecialchars($_POST['amount']);
    // This is where the payment processing logic would be.
    // However, for educational demo purposes a successful payment will be shown.
    echo "<h1>Payment Simulation</h1>";
    echo "<p><strong>EDUCATIONAL DEMO ONLY</strong></p>";
    echo "<p>Payment of " . $amount . " Bitcoin supposedly received.</p>";
    echo "<p>In a real attack, the attacker's server would now validate this transaction on the blockchain. If valid, they might send a decryption key. In many cases, attackers take the money and are never heard from again.</p>";
    echo "<a href='ransom_note.html'>Go Back</a>";
}

// Just put a message on this page that says what would happen if the Bitcoin was really sent out.
// Put the same email background and header as the ransom_note.html, just a different message.

?>