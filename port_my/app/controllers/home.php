<?php

Class Home extends Controller
{
    function index()
    {   
        //$database = new Database();
        //$data['result'] = $database->db_read('SELECT * FROM images');
        //show($data['result'][0]->image);
        $data['page_title']= 'Home';
        $this->view('index', $data);
    }


}

?>