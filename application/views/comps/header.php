<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--标题栏图标-->
    <title><?php echo $title ?></title>
    <?php if (isset($title_icon)): ?>
      <link rel="shortcut icon" href="<?php echo base_url('/assets/img/icon/' . $title_icon); ?>"/>
    <?php endif; ?>

    <!--样式-->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--下拉菜单-->
    <script src="<?php echo base_url('/assets/js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
  </head>
  <body>
    <script>
      $(document).ready(function () {
        $("#header_message").delay(1000).fadeOut('slow');
      });

      $("button").click(function () {
        $(".about-app").css("display", "block");
      });
    </script>
    <!--导航栏-->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <!--大标题-->
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">记账本</a>
          <button id="about-app" class="btn btn-primary btn-xs"><img alt="?" src="<?php echo base_url('/assets/img/icon/question.png'); ?>"></button>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse navHeaderCollapse">
          <!--右边按钮-->
          <ul class="nav navbar-nav navbar-right">
            <?php if (!$this->session->userdata('logged_in')): ?>
              <li><a href="<?php echo base_url(); ?>users/login">登录</a></li>
            <?php endif; ?>
            <?php if ($this->session->userdata('logged_in')): ?>
              <li><a>用户：<?php echo $this->session->userdata('showname') ?></a></li>
              <li><a href="<?php echo base_url(); ?>users/logout">登出</a></li>
            <?php endif; ?>
          </ul>
          <!--左边按钮-->
          <ul class="nav navbar-nav">
            <li class="hidden"><a href="#">记账</a></li>
            <li class="hidden"><a href="#">查账</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">管理<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="hidden"><a href="#">商店/公司</a></li>
                <li class="divider hidden"></li>
                <li><a class="hidden" href="#">商品/服务</a></li>
                <li class="hidden divider"></li>
                <li><a href="<?php echo base_url(); ?>banks"><span class="fa fa-university"></span>&nbsp;&nbsp;银行</a></li>
                <li><a href="<?php echo base_url(); ?>cards"><span class="fa fa-credit-card"></span>&nbsp;&nbsp;银行卡</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>users"><span class="fa fa-user"></span>&nbsp;&nbsp;用户</a></li>
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
        </div>
      </div>
    </nav>

    <!-- *** -->
    <!--关于1-->
    <!-- Modal content-->
    <div class="about-app modal-content" style="display: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">关于</h4>
      </div>
      <div class="modal-body">
        <p>APP尚未完成，当前版本0.622，敬请期待完整功能。</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- *** -->

    <div class="container">
      <!-- Flash message -->
      <?php if ($this->session->flashdata('success_message')): ?>
        <?php echo '<p class="alert alert-success" id="header_message">' . $this->session->flashdata('success_message') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('alert_message')): ?>
        <?php echo '<p class="alert alert-danger" id="header_message">' . $this->session->flashdata('alert_message') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('warning_message')): ?>
        <?php echo '<p class="alert alert-warning" id="header_message">' . $this->session->flashdata('warning_message') . '</p> ' ?>
      <?php endif; ?>

      <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger" id="header_warning">' . $this->session->flashdata('login_failed') . '</p> ' ?>
      <?php endif; ?>