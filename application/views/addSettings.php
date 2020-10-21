<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="fa fa-users"></i> User Role Settings</h1>
	</section>
    
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">	
					<?php $this->load->helper("form"); ?>
					<form role="form" id="addUser" action="<?php echo base_url() ?>addNewSettings" method="post" role="form">
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="role">Role</label>
										<select class="form-control required" id="role" name="role">
											<option value="0">Select Role</option>
											<?php
											if(!empty($roles)) {
											foreach ($roles as $rl) {
											?>
											<option value="<?php echo $rl->roleId ?>" <?php if($rl->roleId == set_value('role')) {echo "selected=selected";} ?>><?php echo $rl->role ?></option>
											<?php } } ?>
										</select>
									</div>
								</div>
								<div class="col-md-6">&nbsp;</div>
								
								<div class="col-md-12">
									<input type="checkbox" name="chksales" id="chksales" value="Sales Orders"> Sales Orders
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="checkbox" name="chkpurchase" id="chkpurchase" value="Purchase Orders"> Purchase Orders
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="checkbox" name="chkshipment" id="chkshipment" value="Shipments"> Shipments
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="checkbox" name="chkinvoice" id="chkinvoice" value="Invoice"> Invoice
								</div>
							</div>
						</div><!-- /.box-body -->

						<div class="box-footer">
							<input type="submit" class="btn btn-primary" value="Submit" />
						</div>
					</form>
				</div>
			</div>
			
			<div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
            </div>
		</div>    
	</section>
</div>