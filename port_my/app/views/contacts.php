<?php
$this->view('header', $data);
?>

<div class="contacts-section">
<div class="contacts-picture">
        <img src="<?=ASSETS?>img/contact.jpg" alt="Contact" title="Contact">
    </div>
    <div class="contacts-form">
        <form action="" method="post">
            <label for="email">Your email</label>
            <br>
            <input type="email" id='email' name='email'> </input>
            <br>
            <label for="subject">Subject</label>
            <br>
            <input type="text" id='subject' name='subject'> </input>
            <br>
            <label for="message">Message</label>
            <br>
            <textarea id='message' name='message' rows= 4 cols= 50> </textarea>
            <br>
            <input class='submit' type="submit" name='submit' value="Send" label = 'SEND'></input>
     </form>
    <?php
$mailer = $this->loadModel('mailer');

    if($_POST){
        $mail= new Mailer;
        $mail->sendContact($_POST['email'],$_POST['subject'],$_POST['message']);
        show( $mail);
    }
    ?>

    </div>

</div>
<div class="contact-data-grid">
<div><a href = "https://www.linkedin.com/in/dimitar-naydenov-358653213/">
    <i class="fab fa-linkedin"></i>
    <span>Dimitar Naydenov</span> </a>
    </div>
    <div><a>
    <i class="fas fa-mobile-alt"></i>
    <span>+359879334835</span>
    </div></a>
    <div><a href = "mailto: abc@example.com">
    <i class="fas fa-at"></i>
    <span>dimitar.n.89@gmail.com</span>
    </div></a>
</div>


<?php
$this->view('footer', $data);
?>