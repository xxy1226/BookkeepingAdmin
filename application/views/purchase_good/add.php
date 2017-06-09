<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Purchase Good Add</h3>
            </div>
            <?php echo form_open('purchase_good/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="OnSale" value="1"  id="OnSale" />
							<label for="OnSale" class="control-label"><span class="text-danger">*</span>OnSale</label>
							<span class="text-danger"><?php echo form_error('OnSale');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="UnitPrice" class="control-label"><span class="text-danger">*</span>UnitPrice</label>
						<div class="form-group">
							<input type="text" name="UnitPrice" value="<?php echo $this->input->post('UnitPrice'); ?>" class="form-control" id="UnitPrice" />
							<span class="text-danger"><?php echo form_error('UnitPrice');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="UNIT" class="control-label">UNIT</label>
						<div class="form-group">
							<input type="text" name="UNIT" value="<?php echo $this->input->post('UNIT'); ?>" class="form-control" id="UNIT" />
							<span class="text-danger"><?php echo form_error('UNIT');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="Description" class="form-control" id="Description"><?php echo $this->input->post('Description'); ?></textarea>
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