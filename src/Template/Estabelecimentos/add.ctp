<section class="content-header">
  <h1>
    Estabelecimento
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
        <?= $this->Form->create($estabelecimento, array('role' => 'form', 'type'=>'file')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('categoria_id', ['options' => $categorias, 'empty' => true]);
            echo $this->Form->input('nome');
            echo $this->Form->input('logo',['type'=>'file']);
            echo $this->Form->input('fundo',['type'=>'file']);
            echo $this->Form->input('descricao');
            echo $this->Form->input('endereco',['label'=>'Endereço']);
            echo $this->Form->input('cep');
            echo $this->Form->input('numero');
            echo $this->Form->input('bairro');
            echo $this->Form->input('telefone');
            echo $this->Form->input('celular');
            echo $this->Form->input('caracteristica_id',['class'=>'form-control select2 select2-hidden-accessible',
                'options'=>$caracteristicas,'empty'=>true,'label'=>'Caracteristicas','multiple'=>'multiple']);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true, 'type'=>'hidden']);
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

