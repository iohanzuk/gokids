<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Estabelecimentos
    <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], [ 'escape'=>false, 'class'=>'btn btn-success btn-xs']) ?></div>
  </h1>

</section>
<section class="content">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Filtros') ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form action="<?php echo $this->Url->build(); ?>" method="POST">
                <div class="box-body">

                    <div class='col-md-4'>
                        <?= $this->Form->input('categoria_id', ['options' => $categorias, 'empty' => "Selecione", 'class' => 'selectpicker form-control', 'data-live-search' => true, 'data-size' => "5"]); ?>
                    </div>

                    <div class='col-md-4'>
                        <?= $this->Form->input('estabelecimento_teste', ['label'=>'Estabelecimento','type' => 'select', 'controller' => 'Estabelecimentos',
                            'action' => 'fill', 'label' => '', 'data' => 'select', 'class' => 'form-control']); ?>
                    </div>

                    <div class="col-md-12 text-center">
                        <?= $this->Form->input(__('Pesquisar'), ['type' => 'submit', 'class' => 'btn btn-default']) ?>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <?php foreach ($estabelecimentos as $estabelecimento):?>
        <div class="col-md-4">
            <div class="box box-widget widget-user">
                <a href="estabelecimentos/view/<?=$estabelecimento->id?>">
                <div class="widget-user-header bg-black" style="background: url('<?='files/estabelecimentos/fundo/' . $estabelecimento->fundo_dir
                    . '/' . $estabelecimento->fundo ?>')">
                    <h3 class="widget-user-username"><?=$estabelecimento->nome?></h3>
                    <h5 class="widget-user-desc"><?=$estabelecimento->categoria->nome?></h5>
                </div>
                <div class="widget-user-image">
                    <?= $this->Html->image('/files/estabelecimentos/logo/' . $estabelecimento->logo_dir
                        . '/' . $estabelecimento->logo, ['height' => 50, 'width' => 50, 'class'=>'img-circle'])?>

                </div>
                </a>
                <div class="box-footer">
                    <div class="row">
                        <a href="estabelecimentos/view/<?=$estabelecimento->id?>">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header"><?=$estabelecimento->id?></h5>
                                <span class="description-text">Média Avaliações</span>
                            </div>
                        </div>
                        </a>
                        <a href="estabelecimentos/view/<?=$estabelecimento->id?>">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header"><?=$estabelecimento->id?></h5>
                                <span class="description-text">Características </span>
                            </div>
                        </div>
                        </a>
                        <a href="estabelecimentos/view/<?=$estabelecimento->id?>">
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header"><?=$estabelecimento->id?></h5>
                                <span class="description-text">Média Avaliações</span>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
    <div class="clearfix"></div>
</section>
