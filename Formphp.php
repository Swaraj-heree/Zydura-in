<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- 1. SETTINGS ---
    // The email where the form submissions will go
    $recipient_email = "info@zydura.in"; 
    $subject = "New Website Inquiry (Zydura)";

    // --- 2. GET DATA FROM HTML ---
    // specific names must match your HTML 'name="..."' attributes
    $name = htmlspecialchars($_POST['user_name']);
    $visitor_email = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL); // This is the new field
    $contact = htmlspecialchars($_POST['user_contact']);
    $age = htmlspecialchars($_POST['user_age']);
    $prescribed_by = htmlspecialchars($_POST['prescribed_by']);
    $address = htmlspecialchars($_POST['user_address']);

    // --- 3. CREATE EMAIL MESSAGE ---
    $email_content = "You have received a new inquiry from your website.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $visitor_email\n";
    $email_content .= "Phone: $contact\n";
    $email_content .= "Age: $age\n";
    $email_content .= "Prescribed By: $prescribed_by\n";
    $email_content .= "Address: $address\n";

    // --- 4. HEADERS (The 'Reply-To' Fix) ---
    // 'From' must be your domain (no-reply@zydura.in) to avoid Spam folder
    // 'Reply-To' is the visitor's email, so the client can just hit 'Reply'
    $headers = "From: no-reply@zydura.in" . "\r\n";
    $headers .= "Reply-To: $visitor_email" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // --- 5. SEND ---
    if (mail($recipient_email, $subject, $email_content, $headers)) {
        // Success: Redirect back to contact page with a success alert
        echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='contact.html';</script>";
    } else {
        // Failure: Show error
        echo "<script>alert('Sorry, failed to send email. Please try again.'); window.history.back();</script>";
    }

} else {
    // If someone tries to open this file directly, go back to form
    header("Location: contact.html");
    exit();
}
?>
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


