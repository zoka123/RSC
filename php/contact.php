<?php

// Your Email Address
$youremail = "rsc@foi.hr";

// Register Form
if (isset($_POST['email']) && isset($_POST['text']) && isset($_POST['name']) && filter_var(
        $_POST['email'],
        FILTER_VALIDATE_EMAIL
    )
) {

    // Detect & Prevent Header Injections
    $test = "/(content-type|bcc:|cc:|to:)/i";
    foreach ($_POST as $key => $val) {
        if (preg_match($test, $val)) {
            exit;
        }
    }

    // Email Format
    $body = "New Contact Mail \n\n";
    $body .= "========== \n\n";
    $body .= "Name:  $_POST[name] \n\n";
    $body .= "Email:  $_POST[email] \n\n";
    $body .= "Text:  $_POST[text] \n\n";

    //Send email
    mail($youremail, "New Contact Mail", $body, "From:" . $_POST['email']);

    die('No post data to process');
}

?>