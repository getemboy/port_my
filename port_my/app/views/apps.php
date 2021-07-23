<?php
$this->view('header', $data);
?>


<div class="apps-container">
    <div class="apps-wrapper">
        <h1>My Projects</h1>
        <div class= "apps-iframe" >
            <div class="apps-navigation">
            <a href="<?=ROOT?>signIn">SIGN IN</a>
            <a href="<?=ROOT?>logIN">LOG IN</a>
            <a href="<?=ROOT?>egn">EGN</a>
            <a href="<?=ROOT?>picture">PICTURES</a>
            <a href="<?=ROOT?>books">BOOKS</a>
            <a href="<?=ROOT?>notes">NOTES</a>
            </div>
            <div class="apps-content">
            </div>
        </div>
    </div>
</div>



<?php
$this->view('footer', $data);
?>