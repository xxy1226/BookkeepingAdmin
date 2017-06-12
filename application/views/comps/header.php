<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= $title ?></title>
  </head>
  <body>
    <!--导航栏-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!--大标题-->
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">记账本</a>
        </div>
        <!--左边按钮-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">记账</a></li>
            <li><a href="#">查账</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">管理<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">超市</a></li>
                <li class="divider"></li>
                <li><a href="#">商品</a></li>
                <li class="divider"></li>
                <li><a href="#">银行</a></li>
                <li><a href="#">银行卡</a></li>
              </ul>
            </li>
          </ul>
          <!--搜索栏-->
          <form class="navbar-form navbar-left hidden" role="search">
            <div class="form-group">
              <input class="form-control" placeholder="Search" type="text">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <!--右边按钮-->
          <ul class="nav navbar-nav navbar-right">
            <?php if (!$this->session->userdata('logged_in')): ?>
              <li><a href="<?php echo base_url(); ?>users/login">登录</a></li>
            <?php endif; ?>
            <?php if ($this->session->userdata('logged_in')): ?>
              <li><a>用户：<?php echo $this->session->userdata('showname') ?></a></li>
              <li><a href="<?php echo base_url(); ?>users/logout">登出</a></li>
            <?php endif; ?>
            <li><a href="<?php echo base_url(); ?>about"><i class="fa fa-question-circle-o"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <nav class="navbar navbar-default hidden">
      <div class="container">
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a class="hidden" href="<?php echo base_url(); ?>about">关于</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <div class="hidden">
              <?php if (!$this->session->userdata('logged_in')): ?>
                <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
                <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
              <?php endif; ?>
              <?php if ($this->session->userdata('logged_in')): ?>
                <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
                <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
              <?php endif; ?>
            </div>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Flash message -->
      <?php if ($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_created') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_updated') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_created') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_deleted') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedout') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_deleted') . '</p> ' ?>
      <?php endif; ?>