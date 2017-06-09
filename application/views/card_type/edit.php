<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Card Type Edit</h3>
            </div>
			<?php echo form_open('card_type/edit/'.$card_type['CardTypeID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="CardType" class="control-label"><span class="text-danger">*</span>CardType</label>
						<div class="form-group">
							<input type="text" name="CardType" value="<?php echo ($this->input->post('CardType') ? $this->input->post('CardType') : $card_type['CardType']); ?>" class="form-control" id="CardType" />
							<span class="text-danger"><?php echo form_error('CardType');?></span>
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