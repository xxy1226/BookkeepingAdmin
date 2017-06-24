<table class="table table-striped table-hover ">
  <caption class="text-center">
    <div class="row">
      <div class="col-md-10">
        <h3><?= $title ?></h3>
      </div>
      <div class="col-md-2">
        <?php if ($page == 'cards'): ?>
          <a class="btn btn-warning btn-sm" href="<?php echo site_url('cards/all_cards/'); ?>">所有银行卡</a>
        <?php elseif ($page == 'all_cards'): ?>
          <a class="btn btn-warning btn-sm" href="<?php echo site_url('cards/'); ?>">我的银行卡</a>
        <?php endif; ?>
      </div>
    </div>
  </caption>
  <thead>
    <tr class="info">
      <th>#</th>
      <th>银行</th>
      <th>类型</th>
      <th>卡号</th>
      <th>持卡人</th>
      <th>描述</th>
      <th>管理</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 0; ?>
    <?php foreach ($cards as $card): ?>
      <?php if ($card['CardID'] <> 1): ?>
        <?php $i++; ?>
        <tr>
          <?php if ($page == 'cards'): ?>
            <td><?= $card['Order'] ?></td>
          <?php else: ?>
            <td><?= $i ?></td>
          <?php endif; ?>
            <td><a href="<?php echo site_url('banks/view/' . $card['BankID']); ?>"><?= $card['BankName'] ?></a></td>
          <td><?= $card['CardType'] ?></td>
          <td><a href="<?php echo site_url('cards/view/' . $card['CardID']); ?>"><?= $card['CardNum'] ?></a></td>
          <td><?= $card['ShowName'] ?></td>
          <td><?= $card['Description'] ?></td>
          <td>
            <!--<a href="<?php echo site_url('cards/edit/' . $card['CardID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> 修改</a>--> 
            <a href="<?php echo site_url('cards/view/' . $card['CardID']); ?>" class="btn btn-success btn-xs"><span class="fa fa-credit-card"></span> 查看详情</a> 
          </td>
        </tr>
      <?php endif; ?>
    <?php endforeach; ?>
  </tbody>
</table>