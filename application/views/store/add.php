<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Store Add</h3>
            </div>
            <?php echo form_open('store/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Icon" class="control-label">Icon</label>
						<div class="form-group">
							<input type="text" name="Icon" value="<?php echo $this->input->post('Icon'); ?>" class="form-control" id="Icon" />
							<span class="text-danger"><?php echo form_error('Icon');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="StoreName" class="control-label"><span class="text-danger">*</span>StoreName</label>
						<div class="form-group">
							<input type="text" name="StoreName" value="<?php echo $this->input->post('StoreName'); ?>" class="form-control" id="StoreName" />
							<span class="text-danger"><?php echo form_error('StoreName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Web" class="control-label">Web</label>
						<div class="form-group">
							<input type="text" name="Web" value="<?php echo $this->input->post('Web'); ?>" class="form-control" id="Web" />
							<span class="text-danger"><?php echo form_error('Web');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="Address" value="<?php echo $this->input->post('Address'); ?>" class="form-control" id="Address" />
							<span class="text-danger"><?php echo form_error('Address');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="WorkTime" class="control-label">WorkTime</label>
						<div class="form-group">
							<textarea name="WorkTime" class="form-control" id="WorkTime"><?php echo $this->input->post('WorkTime'); ?></textarea>
							<span class="text-danger"><?php echo form_error('WorkTime');?></span>
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