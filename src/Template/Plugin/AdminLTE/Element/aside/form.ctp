<!--<form action="#" method="get" class="sidebar-form">-->
<!--    <div class="input-group">-->
<!--        <input type="text" name="q" class="form-control" placeholder="Estabelecimento...">-->
<!--        <span class="input-group-btn">-->
<!--            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--            </button>-->
<!--        </span>-->
<!--    </div>-->
<!--</form>-->

<?= $this->Form->create('Estabelecimentos', ['method' => 'get', 'controller' => 'Estabelecimentos', 'url' => 'index'],
    ['class' => 'sidebar-form']) ?>
<div class="input-group">
    <?= $this->Form->input('estabelecimento_teste', ['type' => 'select', 'controller' => 'Estabelecimentos',
        'action' => 'fill', 'label'=>'','data'=>'select']); ?>
</div>
<?= $this->Form->end() ?>
