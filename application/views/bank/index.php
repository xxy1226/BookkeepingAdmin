<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Banks Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bank/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>BankID</th>
						<th>BankName</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($banks as $b){ ?>
                    <tr>
						<td><?php echo $b['BankID']; ?></td>
						<td><?php echo $b['BankName']; ?></td>
						<td>
                            <a href="<?php echo site_url('bank/edit/'.$b['BankID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bank/remove/'.$b['BankID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
