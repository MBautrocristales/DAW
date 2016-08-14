            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Usuarios
<!--                        <small>advanced tables</small>-->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Usuario/getUsuario"><i class="fa fa-users"></i>Usarios</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
<!--                                <div class="box-header">
                                    <h3 class="box-title">Hover Data Table</h3>
                                </div> /.box-header -->
                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td colspan="8"><a href="formUsuario">Nuevo</td>
                                            </tr>
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Nombre</th>
                                                <th class="hidden-xs">Contraseña</th>
                                                <th class="hidden-xs">Privilegios</th>
                                                <th colspan="4">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                if (isset($usuario)) {
                                                    foreach ($usuario as $u) {
                                                        echo "<tr>";
                                                        echo "<td>" . $u->nick . "</td>";
                                                        echo "<td>" . $u->nombreUs." ".$u->aPaterno." ".$u->aMaterno ."</td>";
                                                        echo "<td class='hidden-xs'>" . $u->password . "</td>";
                                                         $privilegios = ($u->privilegios == 1) ? 'Administrador' : 'Usuario';
                                                        echo "<td><a href='cambiarPrivilegios/$u->idUsuario/$u->privilegios'>$privilegios</a></td>";
                                                        echo "<td><a href='formUpUsuario/$u->idUsuario'>". "<spam class='hidden-xs'>Modificar</spam>"."<spam class='visible-xs glyphicon glyphicon-pencil'></spam>"."</a></td>";
                                                        echo "<td class='hidden-xs'><a href='delUsuario/$u->idUsuario'>Borrar</a></td>";
                                                        echo "<td class='visible-xs'><a href='delUsuario/$u->idUsuario'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
                                                    }
                                                } else {
                                                    echo 'Sin registro a mostrar';
                                                }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
