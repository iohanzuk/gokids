<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Estabelecimentos
    <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], [ 'escape'=>false, 'class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>
<section class="content">
    <?php foreach ($estabelecimentos as $estabelecimento):?>
        <div class="col-md-4">
            <div class="box box-widget widget-user">
                <a href="estabelecimentos/view/<?=$estabelecimento->id?>">
                <div class="widget-user-header bg-black">
                    <h3 class="widget-user-username"><?=$estabelecimento->nome?></h3>
                    <h5 class="widget-user-desc"><?=$estabelecimento->categoria->nome?></h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle">
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
