<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <!-- Tasks: style can be found in dropdown.less -->
          <?php
          if(empty($user_logado)){
          ?>
          <li>
              <?= $this->Html->link('Login',['controller'=>'Users', 'action'=>'login'],['class'=>'btn btn-block btn-primary btn-sm'])?>
          </li>
          <?php }?>
          <?php if(!empty($user_logado)){?>
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?= $this->Html->image('/files/users/foto/' . $user_logado->foto_dir
                . '/' . $user_logado->foto, ['class' => 'user-image'])?>
          <span class="hidden-xs"><?=$user_logado->nome?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
              <?= $this->Html->image('/files/users/foto/' . $user_logado->foto_dir
                  . '/' . $user_logado->foto, ['class' => 'user-image'])?>
            <p>
                <?=$user_logado->nome?>
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
                <?= $this->Html->link('Perfil',['controller'=>'Users','action'=>'edit',$user_logado->id],
                    ['class'=>'btn btn-default btn-flat'])?>
            </div>
            <div class="pull-right">
                <?= $this->Html->link('Logout',['controller'=>'Users','action'=>'logout'],
                    ['class'=>'btn btn-default btn-flat'])?>
            </div>
          </li>
        </ul>
      </li>
          <?php }?>

    </ul>
  </div>
</nav>

