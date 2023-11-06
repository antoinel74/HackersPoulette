<?php
function sanitize($data)
{
    $data = trim($data); // Remove spaces
    $data = stripslashes($data); // Remove backslash
    $data = htmlspecialchars($data); // Convert all char into html char
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = sanitize($_POST['firstname']);
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $subject = sanitize($_POST['subject']);
    $message = sanitize($_POST['message']);

    echo '<pre>';
    print_r($_POST); // TESTING // 
    echo '</pre>';
}
?>

<form class="contact-form" method="POST" action="">

    <label for="firstname">First name :</label>
    <input type="text" id="firstname" name="firstname" required>
    <div class="error-message" id="firstname-error"></div>

    <label for="name">Name :</label>
    <input type="text" id="name" name="name" required>
    <div class="error-message" id="name-error"></div>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
    <div class="error-message" id="email-error"></div>

    <label for="subject">Subject :</label>
    <select id="subject" name="subject" required>
        <option value="hardware">Hardware Issue</option>
        <option value="billing">Billing Issue</option>
        <option value="other">Something else</option>
    </select>
    <div class="error-message" id="subject-error"></div>

    <label for="message">Message :</label>
    <textarea type="text" name="message" placeholder="Type your message here ..." required></textarea>
    <div class="error-message" id="message-error"></div>

    <input type="submit" name="submit" value="Submit" class="submitBtn">

</form>