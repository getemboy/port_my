<?php

Class egn extends Controller
{
    function index()
    {   
        //$database = new Database();
        //$data['result'] = $database->db_read('SELECT * FROM images');
        //show($data['result'][0]->image);
        $data['page_title']= 'Egn';
        $this->view('egn', $data);
        if($_POST)
            {
                $egn1 = $this->loadModel('EgnCheck');
         $egn1->egnCheck($_POST['egn']);
            
            
            
            }
        
        
    }


}

?>