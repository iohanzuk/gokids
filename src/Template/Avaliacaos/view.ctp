<section class="content-header">
  <h1>
    <?php echo __('Avaliacao'); ?>
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
                                                                                                        <dt><?= __('Estabelecimento') ?></dt>
                                <dd>
                                    <?= $avaliacao->has('estabelecimento') ? $avaliacao->estabelecimento->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Comentario') ?></dt>
                                        <dd>
                                            <?= h($avaliacao->comentario) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $avaliacao->has('user') ? $avaliacao->user->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Nota') ?></dt>
                                <dd>
                                    <?= $this->Number->format($avaliacao->nota) ?>
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

</section>
