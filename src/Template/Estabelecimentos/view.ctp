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
            <div class="box box-widget widget-user">
                <div class="widget-user-header bg-light-blue-gradient" style="background: url('<?='files/estabelecimentos/fundo/'.$estabelecimento->fundo_dir
                .'/'.$estabelecimento->fundo ?>')">
                    <h3 class="widget-user-username"><?= $estabelecimento->nome ?></h3>
                    <h5 class="widget-user-desc"><?= $estabelecimento->categoria->nome ?></h5>
                </div>
                <div class="widget-user-image">
                    <?= $this->Html->image('/files/estabelecimentos/logo/' . $estabelecimento->logo_dir
                        . '/' . $estabelecimento->logo, ['height' => 300, 'width' => 300, 'class' => 'img-circle']) ?>
                </div>
                <!-- ./col -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

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
            </div>
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
                                        Caracteristicas
                                    </th>
                                    <?php if (!empty($user_logado)) {
                                        if ($user_logado->user_tipo_id == 2) {
                                            ?>
                                            <th>
                                                <?php echo __('Ações'); ?>
                                            </th>
                                        <?php }
                                    } ?>
                                </tr>

                                <?php foreach ($estabelecimento->estabelecimento_caracteristicas as $estabelecimentoCaracteristicas): ?>
                                    <tr>

                                        <td>
                                            <span class="badge bg-light-blue"><?= h($estabelecimentoCaracteristicas->caracteristica->nome) ?></span>
                                        </td>
                                        <?php if (!empty($user_logado)) {
                                            if ($user_logado->user_tipo_id == 2) { ?>
                                                <td class="actions">
                                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'view', $estabelecimentoCaracteristicas->id], ['escape' => false, 'class' => 'btn btn-info btn-xs']) ?>

                                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'edit', $estabelecimentoCaracteristicas->id], ['escape' => false, 'class' => 'btn btn-warning btn-xs']) ?>

                                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['controller' => 'EstabelecimentoCaracteristicas', 'action' => 'delete', $estabelecimentoCaracteristicas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentoCaracteristicas->id), 'escape' => false, 'class' => 'btn btn-danger btn-xs']) ?>
                                                </td>
                                            <?php }
                                        } ?>
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
        <!-- Timeline -->

        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-clock-o"></i>
                <h3 class="box-title"><?php echo __('Avaliações'); ?></h3>
            </div>
            <!-- /.box-header -->

            <!-- /.box-body -->

        </div>

        <div class="text-right">
            <button class="btn btn-success btn-open-form"><i class="fa fa-plus"></i>Avaliar</button>
        </div>
        <br>
        <div class="row hidden-form" style="display: none">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-plus"></i>
                        <h3 class="box-title">Nova Avaliação</h3>
                    </div>
                    <!-- <h3 class="box-title"><?php echo __('Nova Avaliação'); ?></h3>-->
                    <!-- /.box-header -->
                    <div class="box-body">

                        <form enctype="multipart/form-data" method="post"
                              action="<?= $this->Url->build(['controller' => 'Avaliacaos', 'action' => 'add']) ?>">

                            <div class="box-body">

                                <div class="col-md-12 form-group">
                                    <?php echo $this->Form->input('nota', ['type' => 'number']) ?>
                                </div>

                                <div class='col-md-12 form-group'>
                                    <?php echo $this->Form->input('comentario', ['type' => 'textarea']) ?>
                                </div>

                                <input type="hidden" name="estabelecimento_id" id="estabelecimento_id"
                                       value="<?= $estabelecimento->id ?>">
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-right">
                                <?= $this->Form->button(__('Salvar')) ?>
                                <input type="button" class="btn btn-default btn-close-form" value="Cancelar"/>
                            </div>

                        </form>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- ./col -->
        </div>
        <!-- div -->
        <ul class="timeline">

            <?php foreach ($avaliacaos as $avaliacao): ?>

                <!-- timeline time label -->
                <li class="time-label">
            <span class="bg-purple">
                <?= date_format($avaliacao->created, 'd/m/Y') ?>
            </span>
                </li>
                <!-- /.timeline-label -->

                <!-- timeline item -->
                <li>
                    <!-- timeline icon -->

                    <div class="timeline-item">
                    <span class="time"><i
                                class="fa fa-clock-o"></i> <?= date_format($avaliacao->created, 'H:i') ?></span>

                        <h2 class="timeline-header">Nota: <strong><?= $avaliacao->nota ?></strong> <i
                                    class="fa fa-start"></i> <i class="fa fa-start"></i>
                            <?php for ($i = 0; $i < $avaliacao->nota; $i++) {
                                echo '<i class="fa fa-start"></i>';
                            } ?></h2>

                        <div class="timeline-body">
                            <?= h($avaliacao->comentario) ?>
                        </div>

                    </div>
                </li>

            <?php endforeach; ?>
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>

            <!-- END timeline item -->
        </ul>

</section>
