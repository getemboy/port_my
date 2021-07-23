<?php

Class SignIn extends Controller
{
    function index()
    {   
        //$database = new Database();
        //$data['result'] = $database->db_read('SELECT * FROM images');
        //show($data['result'][0]->image);
        $data['page_title']= 'Sign in';

        if(isset($_POST['username_s']) && isset($_POST['pass_s']))
            {
                $user = $this->loadModel('user');
                $user->signin($_POST);
            }

        $this->view('signIn', $data);
    }


}

?>