<?php
    // Only process POST reqeusts.
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Get the form fields and remove whitespace.
    //     $firstname = strip_tags(trim($_POST["firstname"]));
	// 	$firstname = str_replace(array("\r","\n"),array(" "," "),$firstname);
    //     $lastname = strip_tags(trim($_POST["lastname"]));
	// 	$lastname = str_replace(array("\r","\n"),array(" "," "),$lastname);
    //     $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    //     $phone = trim($_POST["phone"]);
    //     $message = trim($_POST["message"]);

    //     // Check that data was sent to the mailer.
    //     if ( empty($firstname) OR empty( $phone ) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         // Set a 400 (bad request) response code and exit.
    //         http_response_code(400);
    //         echo "Oops! There was a problem with your submission. Please complete the form and try again.";
    //         exit;
    //     }

    //     // Update this to your desired email address.
    //     $recipient = "contact@yourdomain.com";
	// 	$subject = "Message from $firstname";

    //     // Email content.
    //     $email_content = "Name: $firstname . ' ' . $lastname \n";
    //     $email_content .= "Email: $email\n\n";
    //     $email_content .= "Subject: $subject\n\n";
    //     $email_content .= "Phone: $phone\n";
    //     $email_content .= "Message: $message\n";

    //     // Email headers.
    //     $email_headers = "From: $firstname <$email>\r\nReply-to: <$email>";

    //     // Send the email.
    //     if (mail($recipient, $subject, $email_content, $email_headers)) {
    //         // Set a 200 (okay) response code.
    //         http_response_code(200);
    //         echo "Thank You! Your message has been sent.";
    //     } else {
    //         // Set a 500 (internal server error) response code.
    //         http_response_code(500);
    //         echo "Oops! Something went wrong and we couldn't send your message.";
    //     }

    // } else {
    //     // Not a POST request, set a 403 (forbidden) response code.
    //     http_response_code(403);
    //     echo "There was a problem with your submission, please try again.";
    // }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "bharathgo.official@gmail.com"; // Replace with your email address
    $subject = "New Contact Message from $firstname $lastname";
    $body = "Name: $firstname $lastname\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success", "message" => "Your message has been sent successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to send the message. Please try again later."]);
    }
}
?>
