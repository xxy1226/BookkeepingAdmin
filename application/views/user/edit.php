<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['UserID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="Password" value="<?php echo ($this->input->post('Password') ? $this->input->post('Password') : $user['Password']); ?>" class="form-control" id="Password" />
							<span class="text-danger"><?php echo form_error('Password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="UserName" class="control-label"><span class="text-danger">*</span>UserName</label>
						<div class="form-group">
							<input type="text" name="UserName" value="<?php echo ($this->input->post('UserName') ? $this->input->post('UserName') : $user['UserName']); ?>" class="form-control" id="UserName" />
							<span class="text-danger"><?php echo form_error('UserName');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>