<?php
class Cliente_model extends CI_Model{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        //test down
    }

    public function add($id_cliente,$nombres,$email,$empresa,$telefono){
        /*INSERT INTO ad_user(
            ad_user_id, ad_client_id, ad_org_id, isactive, created, createdby, 
            updated, updatedby, name, description, password, email, cdt_dni, cdt_idfb)*/
        $this->db->select_max('ad_user_id');
        $max = $this->db->get('ad_user')->row_array();
        
        $id_generado = $max['ad_user_id']+1;
        
        $data = array(
            'ad_user_id'=>($max['ad_user_id']+1),
            'ad_client_id'=>$id_cliente,
            'name'=>$nombres,
            'email'=>$email,
            'description'=>$empresa,
            'phone'=>$telefono,
            'isactive'=>'Y',
            'created'=>'now()',
            'ad_org_id'=>'0',
            'createdby'	=>'100',
            'updatedby'=>'100'
        );
        
       $rs = $this->db->insert('ad_user', $data);
       if($rs){
           
           return $id_generado;
       }else{
           $error = $this->db->error();
           
           return 0;
       }
    }
    
}
?>
