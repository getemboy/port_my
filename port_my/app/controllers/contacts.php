<?php

Class Contacts extends Controller
{
    function index()
    {
        
        
        $data['page_title']= 'Contacts';
        $this->view('contacts', $data);
        
    }


}

?>