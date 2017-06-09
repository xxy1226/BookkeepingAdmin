<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Purchases Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('purchase/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>PurchaseID</th>
						<th>CardID</th>
						<th>StoreID</th>
						<th>Date</th>
						<th>GST</th>
						<th>PST</th>
						<th>Total</th>
						<th>Memo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($purchases as $p){ ?>
                    <tr>
						<td><?php echo $p['PurchaseID']; ?></td>
						<td><?php echo $p['CardID']; ?></td>
						<td><?php echo $p['StoreID']; ?></td>
						<td><?php echo $p['Date']; ?></td>
						<td><?php echo $p['GST']; ?></td>
						<td><?php echo $p['PST']; ?></td>
						<td><?php echo $p['Total']; ?></td>
						<td><?php echo $p['Memo']; ?></td>
						<td>
                            <a href="<?php echo site_url('purchase/edit/'.$p['PurchaseID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('purchase/remove/'.$p['PurchaseID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
