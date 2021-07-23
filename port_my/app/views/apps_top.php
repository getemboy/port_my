<?php
$this->view('header', $data);
?>


<div class="apps-container">
    <div class="apps-wrapper">
        <h1>My Projects</h1>
        <div class= "apps-iframe" >
            <div class="apps-navigation">
            <a href="<?=ROOT?>signIn">SIGN IN</a>
            <a href="<?=ROOT?>logIn">LOG IN</a>
            <a href="<?=ROOT?>egn">EGN</a>
            <a href="<?=ROOT?>picture">PICTURES</a>
            <a href="<?=ROOT?>books">BOOKS</a>
            <a href="<?=ROOT?>notes">NOTES</a>
            <?php if(isset($_SESSION['user_name'])){
                echo "<a href='" . ROOT . "logout'> LOG OUT </a>";
            } ?>
            }
            </div>
            <div class="apps-content">
            <?php if(isset($_SESSION['user_name']))
            { 
                echo "<h4 class='greetings'> Hi " . $_SESSION['user_name'] . "!</h4>";
                } ?>
