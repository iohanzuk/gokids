<section class="content-header">
  <h1>
    <?php echo __('Categoria'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Nome') ?></dt>
                                        <dd>
                                            <?= h($categoria->nome) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $categoria->has('user') ? $categoria->user->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Estabelecimentos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($categoria->estabelecimentos)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Categoria Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nome
                                    </th>
                                        
                                                                    
                                    <th>
                                    Descricao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Endereco
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cep
                                    </th>
                                        
                                                                    
                                    <th>
                                    Numero
                                    </th>
                                        
                                                                    
                                    <th>
                                    Bairro
                                    </th>
                                        
                                                                    
                                    <th>
                                    Telefone
                                    </th>
                                        
                                                                    
                                    <th>
                                    Celular
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($categoria->estabelecimentos as $estabelecimentos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->categoria_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->nome) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->descricao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->endereco) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->cep) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->numero) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->bairro) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->telefone) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentos->celular) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($estabelecimentos->user_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Estabelecimentos', 'action' => 'view', $estabelecimentos->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Estabelecimentos', 'action' => 'edit', $estabelecimentos->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estabelecimentos', 'action' => 'delete', $estabelecimentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentos->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
