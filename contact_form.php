<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject];
//     $message = $_POST['message'];

//     $to = "hanifkhuzairi98@gmail.com";
//     $subject = "$subject";
//     $headers = "From: $email";

//     $mailBody = "Name: $name\n";
//     $mailBody .= "Email: $email\n\n";
//     $mailBody .= "Message:\n$message\n\n";

//     if (mail($to, $subject, $mailBody, $headers)) {
//         echo "Thank you for your message. We will get back to you shortly.";
//     } else {
//         echo "Oops! Something went wrong. Please try again later.";
//     }
// }
// if(isset($_POST['submit'])) {
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    // $to = "info@ravenatic.com";
    // $subject = "$subject";

    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= "From: ".$email."\n";

    // $mailBody = "You have recived an email from: ".$name."\n";
    // $mailBody .= "Email: ".$email."\n\n";
    // $mailBody .= "Message:\n".$message."\n\n";

    // if (mail($to, $subject, $mailBody, $headers)) {
    //     // echo "Thank you for your message. We will get back to you shortly.";
    //     header('Location: ..\html\Thankyou.html');
    // } else {
    //     // echo "Oops! Something went wrong. Please try again later.";
    //     header('Location: ..\html\Wrong.html');
    // }
//     $name = htmlspecialchars($_POST['name']);
//     $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
//     $subject = htmlspecialchars($_POST['subject']);
//     $message = htmlspecialchars($_POST['message']);

//     if ($email) {
//         $to = "info@ravenatic.com";
//         $subject = "$subject";

//         $headers = "MIME-Version: 1.0" . "\r\n";
//         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//         $headers .= "From: " . $email . "\n";

//         $mailBody = "You have received an email from: " . $name . "\n";
//         $mailBody .= "Email: " . $email . "\n\n";
//         $mailBody .= "Message:\n" . $message . "\n\n";

//         if (mail($to, $subject, $mailBody, $headers)) {
//             header('Location: ../html/Thankyou.html');
//             exit();
//         } else {
//             header('Location: ../html/Wrong.html');
//             exit();
//         }
//     } else {
//         // Invalid email address, handle accordingly
//         header('Location: ../html/Wrong.html');
//         exit();
//     }
// } else {
//     // Invalid request method, handle accordingly
//     header('Location: ../html/Wrong.html');
//     exit();
// }
// class EmailSender
// {
//     private $to;
//     private $subject;
//     private $headers;
//     private $mailBody;

//     public function __construct($to, $subject, $fromEmail)
//     {
//         $this->to = $to;
//         $this->subject = $subject;

//         $this->headers = "MIME-Version: 1.0" . "\r\n";
//         $this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//         $this->headers .= "From: $fromEmail\n";
//     }

//     public function sendEmail($name, $email, $message)
//     {
//         $name = htmlspecialchars($name);
//         $email = filter_var($email, FILTER_VALIDATE_EMAIL);
//         $message = htmlspecialchars($message);

//         if ($email) {
//             $this->mailBody = "You have received an email from: $name\n";
//             $this->mailBody .= "Email: $email\n\n";
//             $this->mailBody .= "Message:\n$message\n\n";

//             return mail($this->to, $this->subject, $this->mailBody, $this->headers);
//         }

//         return false;
//     }
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     $emailSender = new EmailSender("info@ravenatic.com", $subject, $email);

//     if ($emailSender->sendEmail($name, $email, $message)) {
//         header('Location: ../html/Thankyou.html');
//         exit();
//     } else {
//         header('Location: ../html/Wrong.html');
//         exit();
//     }
// } else {
//     // Invalid request method, handle accordingly
//     header('Location: ../html/Wrong.html');
//     exit();
// }
class EmailSender
{
    private $to;
    private $subject;
    private $headers;
    private $mailBody;

    public function __construct($to, $subject, $fromEmail)
    {
        $this->to = $to;
        $this->subject = $subject;

        // Use htmlentities to properly encode special characters in email headers
        $this->headers = "MIME-Version: 1.0\r\n";
        $this->headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $this->headers .= "From: " . htmlentities($fromEmail) . "\r\n";
    }

    public function sendEmail($name, $email, $message)
    {
        // Use htmlspecialchars to properly encode special characters in email content
        $name = htmlspecialchars($name);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $message = htmlspecialchars($message);

        if ($email) {
            $this->mailBody = "You have received an email from: $name\r\n";
            $this->mailBody .= "Email: $email\r\n\r\n";
            $this->mailBody .= "Message:\r\n$message\r\n\r\n";

            // Use additional_headers parameter to include custom headers
            return mail($this->to, $this->subject, $this->mailBody, $this->headers);
        }

        return false;
    }
}

// Verify CAPTCHA response
function verifyCaptcha($captchaResponse)
{
    $secretKey = '6LeqKZgpAAAAACtxWRTjSri0_zPB78fvsjfy6sK5'; // Replace with your reCAPTCHA secret key

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captchaResponse");
    $responseKeys = json_decode($response, true);

    return $responseKeys['success'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captchaResponse = $_POST['g-recaptcha-response'];

    // Verify CAPTCHA
    if (!verifyCaptcha($captchaResponse)) {
        header('Location: ../html/Wrong.php'); // Redirect to error page if CAPTCHA verification fails
        exit();
    }

    // Replace 'info@ravenatic.com' with your actual email
    $emailSender = new EmailSender("info@ravenatic.com", $subject, $email);

    if ($emailSender->sendEmail($name, $email, $message)) {
        header('Location: ../html/Thankyou.php');
        exit();
    } else {
        header('Location: ../html/Wrong.php');
        exit();
    }
} else {
    // Invalid request method, handle accordingly
    header('Location: ../html/Wrong.php');
    exit();
}
?>