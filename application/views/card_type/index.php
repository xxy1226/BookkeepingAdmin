<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Card Types Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('card_type/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CardTypeID</th>
						<th>CardType</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($card_types as $c){ ?>
                    <tr>
						<td><?php echo $c['CardTypeID']; ?></td>
						<td><?php echo $c['CardType']; ?></td>
						<td>
                            <a href="<?php echo site_url('card_type/edit/'.$c['CardTypeID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('card_type/remove/'.$c['CardTypeID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
