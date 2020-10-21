<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class User extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    
    public function index()
    {
        $this->global['pageTitle'] = 'Dashboard';
		$this->global['menudata'] = $this->user_model->getMenuNames( $this->session->userdata ( 'userId' ) );
		$this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    function addSettings()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'Add New Settings';

            $this->loadViews("addSettings", $this->global, $data, NULL);
        }
    }
	
	function addNewSettings()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
			$roleId = $this->input->post('role');
			$salesVal = $this->input->post('chksales');
			$purchaseVal = $this->input->post('chkpurchase');
			$shipmentVal = $this->input->post('chkshipment');
			$invoiceVal = $this->input->post('chkinvoice');
			
			$result = $this->user_model->deleteUserMenus($roleId);
			
			if($salesVal!="")
			{
				$userInfo = array('roleId'=>$roleId, 'menuname'=> $salesVal);
				$this->load->model('user_model');
				$result = $this->user_model->addNewSettings($userInfo);
			}
			
			if($purchaseVal!="")
			{
				$userInfo = array('roleId'=>$roleId, 'menuname'=> $purchaseVal);
				$this->load->model('user_model');
				$result = $this->user_model->addNewSettings($userInfo);
			}
			
			if($shipmentVal!="")
			{
				$userInfo = array('roleId'=>$roleId, 'menuname'=> $shipmentVal);
				$this->load->model('user_model');
				$result = $this->user_model->addNewSettings($userInfo);
			}
			
			if($invoiceVal!="")
			{
				$userInfo = array('roleId'=>$roleId, 'menuname'=> $invoiceVal);
				$this->load->model('user_model');
				$result = $this->user_model->addNewSettings($userInfo);
			}
			
			if($result > 0)
			{
				$this->session->set_flashdata('success', 'Privilege Updated Successfully');
			}
			else
			{
				$this->session->set_flashdata('error', 'Privilege Failed');
			}
			
			redirect('addSettings');
        }
    }
}
?>