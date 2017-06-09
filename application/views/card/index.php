<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cards Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('card/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CardID</th>
						<th>UserID</th>
						<th>BankID</th>
						<th>CardTypeID</th>
						<th>ExpMonth</th>
						<th>ExpYear</th>
						<th>CardNum</th>
						<th>SecureNum</th>
						<th>Balance</th>
						<th>Limit</th>
						<th>Order</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cards as $c){ ?>
                    <tr>
						<td><?php echo $c['CardID']; ?></td>
						<td><?php echo $c['UserID']; ?></td>
						<td><?php echo $c['BankID']; ?></td>
						<td><?php echo $c['CardTypeID']; ?></td>
						<td><?php echo $c['ExpMonth']; ?></td>
						<td><?php echo $c['ExpYear']; ?></td>
						<td><?php echo $c['CardNum']; ?></td>
						<td><?php echo $c['SecureNum']; ?></td>
						<td><?php echo $c['Balance']; ?></td>
						<td><?php echo $c['Limit']; ?></td>
						<td><?php echo $c['Order']; ?></td>
						<td><?php echo $c['Description']; ?></td>
						<td>
                            <a href="<?php echo site_url('card/edit/'.$c['CardID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('card/remove/'.$c['CardID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
