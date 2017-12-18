<section class="content-header">
  <h1>
    Usuário
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['controller'=>'Estabelecimentos','action' => 'index'], ['escape' => false]) ?>
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
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($user, array('role' => 'form', 'type'=>'file')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('foto',['type'=>'file']);
            echo $this->Form->input('nome');
            echo $this->Form->input('login');
            echo $this->Form->input('senha',['type'=>'password']);
            if(!empty($user_logado))
                if($user_logado->user_tipo_id = 1)
                    echo $this->Form->input('user_tipo_id', ['options' => $userTipos, 'empty' => true]);
                else
                    echo $this->Form->input('user_tipo_id', ['value' => 2, 'empty' => true,'type'=>'hidden']);
            else
                echo $this->Form->input('user_tipo_id', ['value' => 2, 'empty' => true,'type'=>'hidden']);
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

