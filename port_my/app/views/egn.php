<?php
$this->view('apps_top', $data);
?>
<div>
<form action="" method="post">
            <label for="egn">Въведете ЕГН за проверка</label>
            <br>
            <input type="text" id='egn' name='egn'> </input>
            <br>
            <input type='submit' name="submit"></input>

        <?php if ($_POST){
            echo $this->egn_view;

        
        }
        else { echo 'ЕГН-то не е валидно';}
    
    ?>
</div>




<?php
$this->view('apps_bottom', $data);
?>