<section class="content-header">
  <h1>
    <?php echo __('Caracteristica'); ?>
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
                                            <?= h($caracteristica->nome) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $caracteristica->has('user') ? $caracteristica->user->id : '' ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Estabelecimento Caracteristicas']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($caracteristica->estabelecimento_caracteristicas)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Estabelecimento Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Caracteristica Id
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($caracteristica->estabelecimento_caracteristicas as $estabelecimentoCaracteristicas): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($estabelecimentoCaracteristicas->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentoCaracteristicas->estabelecimento_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estabelecimentoCaracteristicas->caracteristica_id) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($estabelecimentoCaracteristicas->user_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'view', $estabelecimentoCaracteristicas->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'edit', $estabelecimentoCaracteristicas->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'delete', $estabelecimentoCaracteristicas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentoCaracteristicas->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
