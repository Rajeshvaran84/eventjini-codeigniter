<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function loginMe($email, $password)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.password, BaseTbl.name, BaseTbl.roleId, Roles.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Roles','Roles.roleId = BaseTbl.roleId');
        $this->db->where('BaseTbl.email', $email);
        $query = $this->db->get();
        
        $user = $query->row();
        
        if(!empty($user)){
            if(verifyHashedPassword($password, $user->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
}
?>