<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Goods Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('good/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>GoodID</th>
						<th>GoodName</th>
						<th>Brand</th>
						<th>Weight</th>
						<th>Pic</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($goods as $g){ ?>
                    <tr>
						<td><?php echo $g['GoodID']; ?></td>
						<td><?php echo $g['GoodName']; ?></td>
						<td><?php echo $g['Brand']; ?></td>
						<td><?php echo $g['Weight']; ?></td>
						<td><?php echo $g['Pic']; ?></td>
						<td><?php echo $g['Description']; ?></td>
						<td>
                            <a href="<?php echo site_url('good/edit/'.$g['GoodID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('good/remove/'.$g['GoodID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
