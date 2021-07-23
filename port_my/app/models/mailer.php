<?php
/*
if (isset($_POST['submit'])){
    $guest_mail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = "Email from: " . $guest_mail . "\n\n" . "mail: " .$_POST['message'];
    $my_mail = 'dimitar.n.89@gmail.com';
    $headers = "From: " . $guest_mail;

    mail($my_mail,$subject,$message, $headers);
    header("Location: contact.php?mailsend");
}
*/

class Mailer
{
    public function sendContact($guest_mail, $subject, $message)
    {
        $message = "Email from: " . $guest_mail . "\n\n" . "mail: " . $message;
        $my_mail = 'dimitar.n.89@gmail.com';
        $headers = "From: " . $guest_mail;
        mail($my_mail,$subject,$message, $headers);
        return "Your message has been sent";
    }



}


?>

