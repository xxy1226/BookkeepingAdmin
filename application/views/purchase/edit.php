<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Purchase Edit</h3>
            </div>
			<?php echo form_open('purchase/edit/'.$purchase['PurchaseID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="CardID" class="control-label"><span class="text-danger">*</span>Card</label>
						<div class="form-group">
							<select name="CardID" class="form-control">
								<option value="">select card</option>
								<?php 
								foreach($all_cards as $card)
								{
									$selected = ($card['CardID'] == $purchase['CardID']) ? ' selected="selected"' : "";

									echo '<option value="'.$card['CardID'].'" '.$selected.'>'.$card['Description'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('CardID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="StoreID" class="control-label"><span class="text-danger">*</span>Store</label>
						<div class="form-group">
							<select name="StoreID" class="form-control">
								<option value="">select store</option>
								<?php 
								foreach($all_stores as $store)
								{
									$selected = ($store['StoreID'] == $purchase['StoreID']) ? ' selected="selected"' : "";

									echo '<option value="'.$store['StoreID'].'" '.$selected.'>'.$store['StoreName'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('StoreID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="Date" value="<?php echo ($this->input->post('Date') ? $this->input->post('Date') : $purchase['Date']); ?>" class="has-datepicker form-control" id="Date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="GST" class="control-label">GST</label>
						<div class="form-group">
							<input type="text" name="GST" value="<?php echo ($this->input->post('GST') ? $this->input->post('GST') : $purchase['GST']); ?>" class="form-control" id="GST" />
							<span class="text-danger"><?php echo form_error('GST');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="PST" class="control-label">PST</label>
						<div class="form-group">
							<input type="text" name="PST" value="<?php echo ($this->input->post('PST') ? $this->input->post('PST') : $purchase['PST']); ?>" class="form-control" id="PST" />
							<span class="text-danger"><?php echo form_error('PST');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="Total" value="<?php echo ($this->input->post('Total') ? $this->input->post('Total') : $purchase['Total']); ?>" class="form-control" id="Total" />
							<span class="text-danger"><?php echo form_error('Total');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Memo" class="control-label">Memo</label>
						<div class="form-group">
							<input type="text" name="Memo" value="<?php echo ($this->input->post('Memo') ? $this->input->post('Memo') : $purchase['Memo']); ?>" class="form-control" id="Memo" />
							<span class="text-danger"><?php echo form_error('Memo');?></span>
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