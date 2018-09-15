<?php
class Csetting_model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        //test down
    }
    
    public function  modificarColumna() {
        $fields = array(
            'url_image' => array(
                //'null' => TRUE,
                'name'=>'url_image',
                'type' => 'TEXT'
               
            )
        );
      //  $this->dbforge->modify_column('cdt_order', $fields);
        // gives ALTER TABLE table_name CHANGE old_name new_name TEXT
        $this->db->query('ALTER TABLE cdt_order ALTER column url_image  TYPE text ;');
    }
    
}