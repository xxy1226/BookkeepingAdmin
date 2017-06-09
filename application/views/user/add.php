<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="UserName" class="control-label"><span class="text-danger">*</span>UserName</label>
						<div class="form-group">
							<input type="text" name="UserName" value="<?php echo $this->input->post('UserName'); ?>" class="form-control" id="UserName" />
							<span class="text-danger"><?php echo form_error('UserName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ShowName" class="control-label"><span class="text-danger">*</span>ShowName</label>
						<div class="form-group">
							<input type="text" name="ShowName" value="<?php echo $this->input->post('ShowName'); ?>" class="form-control" id="ShowName" />
							<span class="text-danger"><?php echo form_error('ShowName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="Password" class="form-control" id="Password" />
							<span class="text-danger"><?php echo form_error('Password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Password2" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="Password2" class="form-control" id="Password" />
							<span class="text-danger"><?php echo form_error('Password');?></span>
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