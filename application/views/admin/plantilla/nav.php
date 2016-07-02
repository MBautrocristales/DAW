 <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="<?php echo base_url(); ?>index.php/Usuario/logueado" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>MB</b>A</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>MB</b>Autocristales</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-users"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/Usuario/getUsuario">
                                                    <i class="fa fa-user "></i>Administrar Usaurios
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/Usuario/formUsuario">
                                                    <i class="fa fa-user text-green"></i> Agregar Usuario
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-object-group"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/Producto/getProducto">
                                                    <i class="fa fa-object-ungroup"></i> Administrar Producto
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-object-ungroup text-green"></i> Agregar Producto
                                                </a>
                                            </li>                                   
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-stack-overflow"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/Entrada/getEntrada">
                                                    <i class="fa fa-stack-overflow"></i> Administrar Entrada
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-stack-overflow text-green"></i> Neva Entrada
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-external-link-square"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/Salida/getSalida">
                                                    <i class="fa fa-external-link-square"></i> Administrar Salidas
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-external-link-square text-green"></i> Neva Salida
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/Mensaje/getMensaje">
                                                    <i class="fa fa-envelope"></i> Administrar Mensajes
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(); ?>images/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $nombre;?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url(); ?>images/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $nombre;?>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="cerrarSesion" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                </nav>
                
            </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>images/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nombre;?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="treeview">
              <a href="<?php echo base_url();?>index.php/Usuario/logueado">
                <i class="fa fa-home"></i> <span>Inicio</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class=" treeview">
              <a href="<?php echo base_url();?>index.php/Usuario/getUsuario">
                  <i class="fa fa-users"></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class=" treeview">
              <a href="<?php echo base_url();?>index.php/Producto/getProducto">
                  <i class="fa fa-object-group"></i> <span>Productos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
           <li class=" treeview">
              <a href="<?php echo base_url();?>index.php/Entrada/getEntrada">
                  <i class="fa fa-stack-overflow"></i> <span>Entradas</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class=" treeview">
              <a href="<?php echo base_url();?>index.php/Salida/getSalida">
                  <i class="fa fa-external-link-square"></i> <span>Salidas</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class=" treeview">
              <a href="<?php echo base_url();?>index.php/Mensaje/getMensaje">
                  <i class="fa fa-envelope"></i> <span>Mensajes</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>