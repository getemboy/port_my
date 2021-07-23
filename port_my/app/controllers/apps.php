<?php

Class Apps extends Controller
{
    function index()
    {
        $data['page_title']= 'Apps';
        $this->view('apps', $data);
    }


}

?>