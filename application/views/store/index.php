<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Stores Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('store/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>StoreID</th>
						<th>Icon</th>
						<th>StoreName</th>
						<th>Web</th>
						<th>Address</th>
						<th>WorkTime</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($stores as $s){ ?>
                    <tr>
						<td><?php echo $s['StoreID']; ?></td>
						<td><?php echo $s['Icon']; ?></td>
						<td><?php echo $s['StoreName']; ?></td>
						<td><?php echo $s['Web']; ?></td>
						<td><?php echo $s['Address']; ?></td>
						<td><?php echo $s['WorkTime']; ?></td>
						<td>
                            <a href="<?php echo site_url('store/edit/'.$s['StoreID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('store/remove/'.$s['StoreID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
