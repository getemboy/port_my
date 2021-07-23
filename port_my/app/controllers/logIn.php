<?php

Class LogIn extends Controller
{
    function index()
    {   

        $data['page_title']= 'Log In';
        if(isset($_POST['username_l']) && isset($_POST['pass_l']))
            {
                $user = $this->loadModel('user');
                $user->login($_POST);
            }

        $this->view('logIn', $data);
    }


}

?>