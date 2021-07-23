<?php

Class Picture extends Controller
{
    function index()
    {   
        header('Location:' . ROOT . 'picture/image');
        die;
    }

    function image () {
        $user = $this->loadModel("user");
        if(!$result = $user->check_logged_in())
        {
            header('Location:' . ROOT . 'login');
			die;
        }
        $data['page_title']= 'Picture';
        $this->view('picture', $data);

    }


}

?>