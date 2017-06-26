<table class="table table-striped table-hover ">
  <caption class="text-center">
    <div class="row">
      <h3><?= $title ?></h3>
    </div>
  </caption>
  <tr class="info">
    <th>用户名</th>
    <td><?= $user['UserName'] ?></td>
  </tr>
  <tr>
    <th>姓名（昵称）</th>
    <td><?= $user['ShowName'] ?></td>
  </tr>
  <tr>
    <th>SIN</th>
    <td><?= $user['SIN'] ?></td>
  </tr>
  <tr>
    <th>宅电/手机号</th>
    <td>
      <?= $user['Phone'] ?>
    </td>
  </tr>
  <?php if ($user['HomeAdd']): ?>
  <tr>
    <th>住址</th>
    <td><a title="Google地图" target="_blank" href="http://maps.google.com/?q=<?= $user['HomeAdd'] ?>"><?= $user['HomeAdd'] ?></a></td>
  </tr>
  <?php endif; ?>
  <?php if ($user['WorkTel']): ?>
  <tr>
    <th>工作电话</th>
    <td>
      <?= $user['WorkTel'] ?>
    </td>
  </tr>
  <?php endif; ?>
  <?php if ($user['WorkAdd']): ?>
    <tr>
      <th>工作地址</th>
      <td><a title="Google地图" target="_blank" href="http://maps.google.com/?q=<?= $user['WorkAdd'] ?>"><?= $user['WorkAdd'] ?></a></td>
    </tr>
  <?php endif; ?>
  <?php if ($user['Email1']): ?>
    <tr>
      <th>Email</th>
      <td>
        <a title="发送Email" href="mailto:<?= $user['Email1'] ?>"><?= $user['Email1'] ?></a>
        <?php if ($user['Email2']): ?>
          <br>
          <a title="发送Email" href="mailto:<?= $user['Email2'] ?>"><?= $user['Email2'] ?></a>
        <?php endif; ?>
        <?php if ($user['Email3']): ?>
          <br>
          <a title="发送Email" href="mailto:<?= $user['Email3'] ?>"><?= $user['Email3'] ?></a>
        <?php endif; ?>
      </td>
    </tr>
  <?php endif; ?>
  <tr>
    <th>QQ</th>
    <td>
      <?= $user['QQ'] ?>
    </td>
  </tr>
  <tr>
    <th>微信</th>
    <td><?= $user['WeChat'] ?></td>
  </tr>
  <tr>
    <th>备注</th>
    <td><?= $user['Description'] ?></td>
  </tr>
</table>

<div class="container text-center"><a class="btn btn-primary" href="<?= base_url('cards') ?>">返回银行卡首页</a></div>