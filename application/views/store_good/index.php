<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Stores Goods Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('store_good/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>StoreID</th>
						<th>GoodID</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($stores_goods as $s){ ?>
                    <tr>
						<td><?php echo $s['StoreID']; ?></td>
						<td><?php echo $s['GoodID']; ?></td>
						<td>
                            <a href="<?php echo site_url('store_good/edit/'.$s['StoreID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('store_good/remove/'.$s['StoreID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
