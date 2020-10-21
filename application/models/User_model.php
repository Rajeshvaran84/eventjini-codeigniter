<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }
	
	function getMenuNames($userId)
    {
        $this->db->select('menuname');
        $this->db->from('tbl_privileges');
        $this->db->where('roleId =', $userId);
        $query = $this->db->get();
        
        return $query->result();
    }
	
	function deleteUserMenus($roleId)
    {
		$this->db->delete('tbl_privileges', array('roleId'=>$roleId));
    }

    function addNewSettings($userInfo)
    {
		$this->db->trans_start();
		$this->db->insert('tbl_privileges', $userInfo);
		
		$insert_id = $this->db->insert_id();
		
		$this->db->trans_complete();
        
        return $insert_id;
    }
}