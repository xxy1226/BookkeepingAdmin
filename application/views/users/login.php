<?php echo form_open(); ?>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1 class="text-center"><?php echo $title; ?></h1>
    <div class="form-group">
      <?php if ($username): ?>
        <input type="text" name="username" class="form-control" placeholder="用户名" required value="<?=$username?>">
        <?php else: ?>
        <input type="text" name="username" class="form-control" placeholder="用户名" required autofocus>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="密码" required autofocus>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
  </div>
</div>
<?php echo form_close(); ?>