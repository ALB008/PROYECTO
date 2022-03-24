    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img loading="lazy" class="app-sidebar__user-avatar" src="https://wallpaper.sc/es/ipad/wp-content/uploads/2018/08/ipad-2048x2048-thumbnail_00396-256x256.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Samuel<br>Luque Butacas</p>
          <p class="app-sidebar__user-designation">Rol</p>
        </div>
      </div>

      <!-- Opciones de menu lateral -->
      <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="<?= base_url()?>/dashboard">
          <i class="app-menu__icon fa fa-dashboard"></i>
          <span class="app-menu__label">Inicio</span></a>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-id-card" aria-hidden="true"></i>
            <span class="app-menu__label">Bibliotecarios</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url()?>/usuarios">
              <i class="icon fa fa-circle-o"></i>Usuarios</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/roles">
              <i class="icon fa fa-circle-o"></i>Roles</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/permisos">
              <i class="icon fa fa-circle-o"></i>Permisos</a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-users "aria-hidden="true"></i>
            <span class="app-menu__label">Usuarios</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url()?>/usuarios">
              <i class="icon fa fa-circle-o"></i>Usuarios</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/roles">
              <i class="icon fa fa-circle-o"></i>Roles</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/permisos">
              <i class="icon fa fa-circle-o"></i>Permisos</a>
            </li>
          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="<?= base_url()?>/Actividades">
          <i class="app-menu__icon fa fa-tasks" aria-hidden="true"></i>
          <span class="app-menu__label">Actividades</span></a>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
          <i class="app-menu__icon fa fa-book" aria-hidden="true"></i></i>
          <span class="app-menu__label">Libros</span>
          <i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url()?>/usuarios">
              <i class="icon fa fa-circle-o"></i>Usuarios</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/roles">
              <i class="icon fa fa-circle-o"></i>Roles</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/permisos">
              <i class="icon fa fa-circle-o"></i>Permisos</a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-building" aria-hidden="true"></i>
            <span class="app-menu__label">Editoriales</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url()?>/usuarios">
              <i class="icon fa fa-circle-o"></i>Usuarios</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/roles">
              <i class="icon fa fa-circle-o"></i>Roles</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/permisos">
              <i class="icon fa fa-circle-o"></i>Permisos</a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-pencil" aria-hidden="true"></i>
            <span class="app-menu__label">Autores</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url()?>/usuarios">
              <i class="icon fa fa-circle-o"></i>Usuarios</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/roles">
              <i class="icon fa fa-circle-o"></i>Roles</a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url()?>/permisos">
              <i class="icon fa fa-circle-o"></i>Permisos</a>
            </li>
          </ul>
        </li>
        <li>
          <a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-text" aria-hidden="true"></i>
          <span class="app-menu__label">Prestamos</span></a>
        </li>

        <!-- Logout -->

        <li>
          <a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-sign-out" aria-hidden="true">
          </i><span class="app-menu__label">Cerrar Sesión</span></a>
        </li>
      </ul>
      
    </aside>