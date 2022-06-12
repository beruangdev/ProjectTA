
<?php
class User_model extends CI_Model {

    function login_user($username,$password){
        $query = $this->db->get_where('users',array('username'=>$username));
        
        if($query->num_rows() > 0){
            $data_user = $query->row();
            
            $this->db->where("username='$username'");
            $this->db->where("password='$password'");
            $result = $this->db->get('users')->result();

            if(!empty($result)){
                $this->session->set_userdata('id_users',$data_user->id_users);
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('name',$data_user->name);
                $this->session->set_userdata('tipe_user',$data_user->tipe_user);
                $this->session->set_userdata('is_login',TRUE);
                
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }

}
?>