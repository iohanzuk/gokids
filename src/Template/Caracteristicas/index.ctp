<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Caracteristicas
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], [ 'escape'=>false, 'class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Caracteristicas</h3>
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
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($caracteristicas as $caracteristica): ?>
              <tr>
                <td><?= $this->Number->format($caracteristica->id) ?></td>
                <td><?= h($caracteristica->nome) ?></td>
                <td><?= $caracteristica->has('user') ? $this->Html->link($caracteristica->user->id, ['controller' => 'Users', 'action' => 'view', $caracteristica->user->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $caracteristica->id], [ 'escape'=>false, 'class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $caracteristica->id], [ 'escape'=>false, 'class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['action' => 'delete', $caracteristica->id], ['confirm' => __('Confirm to delete this entry?'), 'escape'=>false, 'class'=>'btn btn-danger btn-xs']) ?>
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
