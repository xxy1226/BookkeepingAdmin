<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Purchases Goods Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('purchase_good/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>PurchaseID</th>
						<th>GoodID</th>
						<th>OnSale</th>
						<th>UnitPrice</th>
						<th>UNIT</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($purchases_goods as $p){ ?>
                    <tr>
						<td><?php echo $p['PurchaseID']; ?></td>
						<td><?php echo $p['GoodID']; ?></td>
						<td><?php echo $p['OnSale']; ?></td>
						<td><?php echo $p['UnitPrice']; ?></td>
						<td><?php echo $p['UNIT']; ?></td>
						<td><?php echo $p['Description']; ?></td>
						<td>
                            <a href="<?php echo site_url('purchase_good/edit/'.$p['PurchaseID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('purchase_good/remove/'.$p['PurchaseID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
