<?php

//ini_set('display_startup_errors', 1);
//ini_set('display_errors', 1);
//error_reporting(-1);

if (isset($_POST['email'])) { // EDIT THE 2 LINES BELOW AS REQUIRED
    
    function sendCustomMail($email_from, $name, $body)
    {
        require_once('./mailer/class.phpmailer.php');
        include("./mailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
        
        $emailerName     = "Website Mailers";
        $emailerAccount  = "vib.vibhor.jain@gmail.com";
        $emailerPassword = "vibhor@93";
        $email_to        = "vib.vibhor.jain@gmail.com";
        $email_to_name   = "Vibhor Jain";
        $email_subject   = "Contact form for paraselectromech";
        
        
        //echo !extension_loaded('openssl')?"Not Available":"Available";
        
        $mail = new PHPMailer();
        
        //$body             = file_get_contents('contents.html');
        //$body             = eregi_replace("[\]",'',$body);
        
        //$body = "Test Message";
        
        $mail->IsSMTP(); // telling the class to use SMTP
        //$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $mail->SMTPAuth   = true; // enable SMTP authentication
        $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
        $mail->Host       = "ssl://smtp.gmail.com"; // sets GMAIL as the SMTP server
        $mail->Port       = 465; // set the SMTP port for the GMAIL server
        $mail->Username   = $emailerAccount; // GMAIL username
        $mail->Password   = $emailerPassword; // GMAIL password
        
        $mail->SetFrom($emailerAccount, $emailerName);
        
        $mail->AddReplyTo($email_from, $name);
        
        $mail->Subject = $email_subject;
        
        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        
        $mail->MsgHTML($body);
        
        //$address = "er.vibhorjain@gmail.com";
        $mail->AddAddress($email_to, $email_to_name);
        
        //$mail->AddAttachment("images/phpmailer.gif");      // attachment
        //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
        
        if (!$mail->Send()) {
            return false;
        } else {
            return true;
        }
        
    }
    
    
    function died($error)
    {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if (!isset($_POST['first_name']) || !isset($_POST['email']) || !isset($_POST['telephone']) || !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }
    $first_name    = $_POST['first_name']; // required
    $email_from    = $_POST['email']; // required
    $telephone     = $_POST['telephone']; // not required
    $comments      = $_POST['comments']; // required
    $error_message = "";
    $email_exp     = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $first_name)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }
    if (strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }
    if (strlen($error_message) > 0) {
        died($error_message);
    }
    $email_message = "Form details below.\n\n";
    function clean_string($string)
    {
        $bad = array(
            "content-type",
            "bcc:",
            "to:",
            "cc:",
            "href"
        );
        return str_replace($bad, "", $string);
    }
    $email_message .= "Name: " . clean_string($first_name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Telephone: " . clean_string($telephone) . "\n";
    $email_message .= "Comments: " . clean_string($comments) . "\n";
    
    
    // create email headers
    //$headers = 'From: ' . $email_from . "\r\n" . 'Reply-To: ' . $email_from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    if (sendCustomMail($email_from, $first_name, $email_message)) {
        echo "Thank you for contacting us. We will be in touch with you very soon.";
    } else {
        echo "Error sending mail from server. You can call the contact person. Sorry for the inconvenience caused.";
    }
    
    //ini_set('display_startup_errors',1);
    //ini_set('display_errors',1);
    //error_reporting(-1);
    
}
?>