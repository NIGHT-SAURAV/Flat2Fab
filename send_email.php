<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $organizationName = $_POST['organization_name'];
    $personName = $_POST['person_name'];
    $personPosition = $_POST['person_position'];
    $message = $_POST['message'];
    
    $to = "kecmemories.bct@gmail.com"; // Target email address
    $subject = "New Form Submission";
    $body = "Organization: $organizationName\nPerson: $personName\nPosition: $personPosition\n\nMessage:\n$message";
    $headers = "From: line2inspiration@gmail.com\r\n"; // Valid sender email
    $headers .= "Reply-To: line2inspiration@gmail.com\r\n"; // Optional: Allow replies to the sender
    $headers .= "X-Mailer: PHP/" . phpversion(); // Additional header for identification
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed!";
    }
}
?>
