<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Card Add</h3>
            </div>
            <?php echo form_open('card/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="UserID" class="control-label">User</label>
						<div class="form-group">
							<select name="UserID" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['UserID'] == $this->input->post('UserID')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['UserID'].'" '.$selected.'>'.$user['UserName'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="BankID" class="control-label">Bank</label>
						<div class="form-group">
							<select name="BankID" class="form-control">
								<option value="">select bank</option>
								<?php 
								foreach($all_banks as $bank)
								{
									$selected = ($bank['BankID'] == $this->input->post('BankID')) ? ' selected="selected"' : "";

									echo '<option value="'.$bank['BankID'].'" '.$selected.'>'.$bank['BankName'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="CardTypeID" class="control-label">Card Type</label>
						<div class="form-group">
							<select name="CardTypeID" class="form-control">
								<option value="">select card_type</option>
								<?php 
								foreach($all_card_types as $card_type)
								{
									$selected = ($card_type['CardTypeID'] == $this->input->post('CardTypeID')) ? ' selected="selected"' : "";

									echo '<option value="'.$card_type['CardTypeID'].'" '.$selected.'>'.$card_type['CardType'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ExpMonth" class="control-label">ExpMonth</label>
						<div class="form-group">
							<select name="ExpMonth" class="form-control">
								<option value="">select</option>
								<?php 
								$ExpMonth_values = array(
									'01'=>'01 Jan',
									'02'=>'02 Feb',
									'03'=>'03 Mar',
									'04'=>'04 Apr',
									'05'=>'05 May',
									'06'=>'06 Jun',
									'07'=>'07 Jul',
									'08'=>'08 Aug',
									'09'=>'09 Sep',
									'10'=>'10 Oct',
									'11'=>'11 Nov',
									'12'=>'12 Dec',
								);

								foreach($ExpMonth_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('ExpMonth')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ExpYear" class="control-label">ExpYear</label>
						<div class="form-group">
							<select name="ExpYear" class="form-control">
								<option value="">select</option>
								<?php 
								$ExpYear_values = array(
									'17'=>'2017',
									'18'=>'2018',
									'19'=>'2019',
									'20'=>'2020',
									'21'=>'2021',
									'22'=>'2022',
									'23'=>'2023',
									'24'=>'2024',
									'25'=>'2025',
								);

								foreach($ExpYear_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('ExpYear')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="CardNum" class="control-label">CardNum</label>
						<div class="form-group">
							<input type="text" name="CardNum" value="<?php echo $this->input->post('CardNum'); ?>" class="form-control" id="CardNum" />
							<span class="text-danger"><?php echo form_error('CardNum');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="SecureNum" class="control-label">SecureNum</label>
						<div class="form-group">
							<input type="text" name="SecureNum" value="<?php echo $this->input->post('SecureNum'); ?>" class="form-control" id="SecureNum" />
							<span class="text-danger"><?php echo form_error('SecureNum');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Balance" class="control-label">Balance</label>
						<div class="form-group">
							<input type="text" name="Balance" value="<?php echo $this->input->post('Balance'); ?>" class="form-control" id="Balance" />
							<span class="text-danger"><?php echo form_error('Balance');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Limit" class="control-label">Limit</label>
						<div class="form-group">
							<input type="text" name="Limit" value="<?php echo $this->input->post('Limit'); ?>" class="form-control" id="Limit" />
							<span class="text-danger"><?php echo form_error('Limit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Order" class="control-label">Order</label>
						<div class="form-group">
							<input type="text" name="Order" value="<?php echo $this->input->post('Order'); ?>" class="form-control" id="Order" />
							<span class="text-danger"><?php echo form_error('Order');?></span>
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