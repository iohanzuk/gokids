<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Users
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], [ 'escape'=>false, 'class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Users</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('login') ?></th>
                <th><?= $this->Paginator->sort('senha') ?></th>
                <th><?= $this->Paginator->sort('user_tipo_id') ?></th>
                <th><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->nome) ?></td>
                <td><?= h($user->login) ?></td>
                <td><?= h($user->senha) ?></td>
                <td><?= $user->has('user_tipo') ? $this->Html->link($user->user_tipo->id, ['controller' => 'UserTipos', 'action' => 'view', $user->user_tipo->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $user->id], [ 'escape'=>false, 'class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $user->id], [ 'escape'=>false, 'class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['action' => 'delete', $user->id], ['confirm' => __('Confirm to delete this entry?'), 'escape'=>false, 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
