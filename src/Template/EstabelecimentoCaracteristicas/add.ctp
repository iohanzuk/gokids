<section class="content-header">
  <h1>
    Estabelecimento Caracteristica
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($estabelecimentoCaracteristica, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('estabelecimento_id', ['options' => $estabelecimentos]);
            echo $this->Form->input('caracteristica_id', ['options' => $caracteristicas]);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Salvar')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

