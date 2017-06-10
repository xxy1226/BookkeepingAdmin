
                
                <div class="container">
                    <!-- Flash message -->
                    <?php if($this->session->flashdata('user_loggedin')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p> '?>
                    <?php endif; ?>
                    
                    <?php if($this->session->flashdata('user_loggedout')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p> '?>
                    <?php endif; ?>
                </div>

Dashboard