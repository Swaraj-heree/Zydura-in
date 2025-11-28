<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- 1. ENTER YOUR EMAIL HERE ---
    $to_email = "info@zydura.in"; 
    $subject = "New Feedback Form Submission - Zydura";
    
    // --- 2. COLLECT DATA ---
    $name = htmlspecialchars($_POST['user_name']);
    $age = htmlspecialchars($_POST['user_age']);
    $contact = htmlspecialchars($_POST['user_contact']);
    $prescribed_by = htmlspecialchars($_POST['prescribed_by']);
    $address = htmlspecialchars($_POST['user_address']);
    
    // --- 3. BUILD EMAIL MESSAGE ---
    $message = "You have received a new feedback form submission:\n\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Age: " . $age . "\n";
    $message .= "Contact Number: " . $contact . "\n";
    $message .= "Prescribed By: " . $prescribed_by . "\n";
    $message .= "Address: \n" . $address . "\n";
    
    $headers = "From: no-reply@zydura.in" . "\r\n" .
               "Reply-To: no-reply@zydura.in" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // --- 4. SEND EMAIL ---
    if (mail($to_email, $subject, $message, $headers)) {
        echo "<script>alert('Feedback sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send feedback. Please try again.'); window.history.back();</script>";
    }
} else {
    header("Location: contact.html");
    exit();
}

?>
