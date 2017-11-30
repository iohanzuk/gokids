<section class="content-header">
  <h1>
    <?php echo __('User'); ?>
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
                                            <?= h($user->nome) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Login') ?></dt>
                                        <dd>
                                            <?= h($user->login) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Senha') ?></dt>
                                        <dd>
                                            <?= h($user->senha) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('User Tipo') ?></dt>
                                <dd>
                                    <?= $user->has('user_tipo') ? $user->user_tipo->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('User Id') ?></dt>
                                <dd>
                                    <?= $this->Number->format($user->user_id) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Users']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($user->users)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nome
                                    </th>
                                        
                                                                    
                                    <th>
                                    Login
                                    </th>
                                        
                                                                    
                                    <th>
                                    Senha
                                    </th>
                                        
                                                                    
                                    <th>
                                    User Tipo Id
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($user->users as $users): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($users->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->nome) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->login) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->senha) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->user_tipo_id) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($users->user_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Users', 'action' => 'view', $users->id], [ 'escape'=>false, 'class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Users', 'action' => 'edit', $users->id], [ 'escape'=>false, 'class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'escape'=>false, 'class'=>'btn btn-danger btn-xs']) ?>
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Avaliacaos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($user->avaliacaos)): ?>

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
                                    Nota
                                    </th>
                                        
                                                                    
                                    <th>
                                    Comentario
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($user->avaliacaos as $avaliacaos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($avaliacaos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($avaliacaos->estabelecimento_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($avaliacaos->nota) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($avaliacaos->comentario) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($avaliacaos->user_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Avaliacaos', 'action' => 'view', $avaliacaos->id], [ 'escape'=>false, 'class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Avaliacaos', 'action' => 'edit', $avaliacaos->id], [ 'escape'=>false, 'class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['controller' => 'Avaliacaos', 'action' => 'delete', $avaliacaos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaos->id), 'escape'=>false, 'class'=>'btn btn-danger btn-xs']) ?>
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Caracteristicas']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($user->caracteristicas)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nome
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($user->caracteristicas as $caracteristicas): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($caracteristicas->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($caracteristicas->nome) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($caracteristicas->user_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Caracteristicas', 'action' => 'view', $caracteristicas->id], [ 'escape'=>false, 'class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Caracteristicas', 'action' => 'edit', $caracteristicas->id], [ 'escape'=>false, 'class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['controller' => 'Caracteristicas', 'action' => 'delete', $caracteristicas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caracteristicas->id), 'escape'=>false, 'class'=>'btn btn-danger btn-xs']) ?>
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Categorias']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($user->categorias)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nome
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($user->categorias as $categorias): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($categorias->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($categorias->nome) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($categorias->user_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Categorias', 'action' => 'view', $categorias->id], [ 'escape'=>false, 'class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Categorias', 'action' => 'edit', $categorias->id], [ 'escape'=>false, 'class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['controller' => 'Categorias', 'action' => 'delete', $categorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorias->id), 'escape'=>false, 'class'=>'btn btn-danger btn-xs']) ?>
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Estabelecimento Caracteristicas']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($user->estabelecimento_caracteristicas)): ?>

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
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($user->estabelecimento_caracteristicas as $estabelecimentoCaracteristicas): ?>
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
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'view', $estabelecimentoCaracteristicas->id], [ 'escape'=>false, 'class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'edit', $estabelecimentoCaracteristicas->id], [ 'escape'=>false, 'class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'delete', $estabelecimentoCaracteristicas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentoCaracteristicas->id), 'escape'=>false, 'class'=>'btn btn-danger btn-xs']) ?>
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Estabelecimentos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($user->estabelecimentos)): ?>

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
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($user->estabelecimentos as $estabelecimentos): ?>
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
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Estabelecimentos', 'action' => 'view', $estabelecimentos->id], [ 'escape'=>false, 'class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Estabelecimentos', 'action' => 'edit', $estabelecimentos->id], [ 'escape'=>false, 'class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['controller' => 'Estabelecimentos', 'action' => 'delete', $estabelecimentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentos->id), 'escape'=>false, 'class'=>'btn btn-danger btn-xs']) ?>
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
