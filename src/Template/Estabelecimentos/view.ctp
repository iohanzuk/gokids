<section class="content-header">
    <h1>
        <?php echo __('Estabelecimento'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false]) ?>
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
                    <h3 class="box-title"><?php echo __('Informação'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt><?= __('Categoria') ?></dt>
                        <dd>
                            <?= $estabelecimento->has('categoria') ? $estabelecimento->categoria->nome : '' ?>
                        </dd>
                        <dt><?= __('Nome') ?></dt>
                        <dd>
                            <?= h($estabelecimento->nome) ?>
                        </dd>
                        <dt><?= __('Endereco') ?></dt>
                        <dd>
                            <?= h($estabelecimento->endereco) ?>
                        </dd>
                        <dt><?= __('Cep') ?></dt>
                        <dd>
                            <?= h($estabelecimento->cep) ?>
                        </dd>
                        <dt><?= __('Bairro') ?></dt>
                        <dd>
                            <?= h($estabelecimento->bairro) ?>
                        </dd>
                        <dt><?= __('Telefone') ?></dt>
                        <dd>
                            <?= h($estabelecimento->telefone) ?>
                        </dd>
                        <dt><?= __('Celular') ?></dt>
                        <dd>
                            <?= h($estabelecimento->celular) ?>
                        </dd>
                        <dt><?= __('User') ?></dt>
                        <dd>
                            <?= $estabelecimento->has('user') ? $estabelecimento->user->id : '' ?>
                        </dd>


                        <dt><?= __('Numero') ?></dt>
                        <dd>
                            <?= $this->Number->format($estabelecimento->numero) ?>
                        </dd>


                        <dt><?= __('Descricao') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($estabelecimento->descricao)); ?>
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
                    <h3 class="box-title"><?= __('{0}', ['Caracteristicas']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($estabelecimento->estabelecimento_caracteristicas)): ?>

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

                            <?php foreach ($estabelecimento->estabelecimento_caracteristicas as $estabelecimentoCaracteristicas): ?>
                                <tr>

                                    <td>
                                        <?= h($estabelecimentoCaracteristicas->id) ?>
                                    </td>

                                    <td>
                                        <?= h($estabelecimentoCaracteristicas->estabelecimento_id) ?>
                                    </td>

                                    <td>
                                        <?= h($estabelecimentoCaracteristicas->caracteristica->nome) ?>
                                    </td>

                                    <td>
                                        <?= h($estabelecimentoCaracteristicas->user_id) ?>
                                    </td>

                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'view', $estabelecimentoCaracteristicas->id], ['class' => 'btn btn-info btn-xs']) ?>

                                        <?= $this->Html->link(__('Editar'), ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'edit', $estabelecimentoCaracteristicas->id], ['class' => 'btn btn-warning btn-xs']) ?>

                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'delete', $estabelecimentoCaracteristicas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentoCaracteristicas->id), 'class' => 'btn btn-danger btn-xs']) ?>
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
                    <h3 class="box-title"><?= __('{0}', ['Avaliações']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($estabelecimento->avaliacaos)): ?>

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
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($estabelecimento->avaliacaos as $avaliacaos): ?>
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
                                        <?= $this->Html->link(__('View'), ['controller' => 'Avaliacaos', 'action' => 'view', $avaliacaos->id], ['class' => 'btn btn-info btn-xs']) ?>

                                        <?= $this->Html->link(__('Editar'), ['controller' => 'Avaliacaos', 'action' => 'edit', $avaliacaos->id], ['class' => 'btn btn-warning btn-xs']) ?>

                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Avaliacaos', 'action' => 'delete', $avaliacaos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaos->id), 'class' => 'btn btn-danger btn-xs']) ?>
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
