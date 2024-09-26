<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "raoulthomas@hotmai.com"; // Your email address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $body = "
    <html>
    <body>
        <h2>Contact Form Submission</h2>
        <p><strong>Name: </strong> $name </p>
        <p><strong>Email: </strong> $email </p>
        <p><strong>Message: </strong> $message </p>
    </body>
    </html>
    ";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send!";
    }
}
?>
