<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Good Edit</h3>
            </div>
			<?php echo form_open('good/edit/'.$good['GoodID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="GoodName" class="control-label"><span class="text-danger">*</span>GoodName</label>
						<div class="form-group">
							<input type="text" name="GoodName" value="<?php echo ($this->input->post('GoodName') ? $this->input->post('GoodName') : $good['GoodName']); ?>" class="form-control" id="GoodName" />
							<span class="text-danger"><?php echo form_error('GoodName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Brand" class="control-label">Brand</label>
						<div class="form-group">
							<input type="text" name="Brand" value="<?php echo ($this->input->post('Brand') ? $this->input->post('Brand') : $good['Brand']); ?>" class="form-control" id="Brand" />
							<span class="text-danger"><?php echo form_error('Brand');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Weight" class="control-label">Weight</label>
						<div class="form-group">
							<input type="text" name="Weight" value="<?php echo ($this->input->post('Weight') ? $this->input->post('Weight') : $good['Weight']); ?>" class="form-control" id="Weight" />
							<span class="text-danger"><?php echo form_error('Weight');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Pic" class="control-label">Pic</label>
						<div class="form-group">
							<input type="text" name="Pic" value="<?php echo ($this->input->post('Pic') ? $this->input->post('Pic') : $good['Pic']); ?>" class="form-control" id="Pic" />
							<span class="text-danger"><?php echo form_error('Pic');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="Description" class="form-control" id="Description"><?php echo ($this->input->post('Description') ? $this->input->post('Description') : $good['Description']); ?></textarea>
							<span class="text-danger"><?php echo form_error('Description');?></span>
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