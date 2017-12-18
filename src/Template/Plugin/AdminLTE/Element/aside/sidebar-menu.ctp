<ul class="sidebar-menu">
    <li class="header">MENU DE NAVEGAÇÃO</li>
    <li>
        <a href="<?php echo $this->Url->build('/estabelecimentos'); ?>"><i class="fa fa-child"></i><span>Estabelecimentos</span></a>
    </li>
    <li>
        <a href="<?php echo $this->Url->build('/sugestaos/add'); ?>"><i class="fa fa-plus-circle"></i><span>Sugerir Estabelecimento</span></a>
    </li>
    <?php if (!empty($user_logado)) {
        if ($user_logado->user_tipo_id == 1) {
            ?>
            <li>
                <a href="<?php echo $this->Url->build('/categorias'); ?>"><i class="fa fa-tag"></i><span>Categorias</span></a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/caracteristicas'); ?>"><i class="fa fa-tags"></i><span>Caracteristicas</span></a>
            </li>
        <?php }
    } ?>
</ul>

