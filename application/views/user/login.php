<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                
                <div class="container">
                    <!-- Flash message -->
                    <?php if($this->session->flashdata('user_loggedin')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p> '?>
                    <?php endif; ?>
                    
                    <?php if($this->session->flashdata('login_failed')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_failed').'</p> '?>
                    <?php endif; ?>
                </div>
                
                <h1 class="box-title">Login</h1>
                <?php echo form_open(); ?>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
				<span class="text-danger"><?php echo form_error('password');?></span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
