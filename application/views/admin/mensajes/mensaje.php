            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Mensajes
<!--                        <small>advanced tables</small>-->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Usuario/getMensaje"><i class="fa fa-envelope"></i>Mensajes</a></li>
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
                                                <th>Nomnbre</th>
                                                <th>Telefono</th>
                                                <th>Email</th>
                                                <th>Mensaje</th>
                                                <th>Status</th>
                                                <th colspan="4">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                if (isset($mensaje)) {
                                                    foreach ($mensaje as $m) {
                                                        echo "<tr>";
                                                        echo "<td>" . $m->nombreMen . "</td>";
                                                        echo "<td>" . $m->telefono . "</td>";
                                                        echo "<td>" . $m->email . "</td>";
                                                        echo "<td>" . $m->mensaje . "</td>";
                                                        $status = ($m->mStatus == 1) ? 'Sin Leer' : 'Leido';
//                                                        echo "<td><a href='cambiarStatus/$u->idUsuario/$u->uStatus'>$status</a></td>";
                                                        echo "<td class='hidden-xs'><a href='cambiarStatus/$m->idMensaje/$m->mStatus'>$status</a></td>";
                                                        if($m->mStatus == 1){
                                                            echo "<td class='visible-xs'><a href='cambiarStatus/$m->idMensaje/$m->mStatus'><spam class='glyphicon glyphicon-eye-close'></spam</a></td>";
                                                        }else {
                                                           echo "<td class='visible-xs'><a href='cambiarStatus/$m->idMensaje/$m->mStatus'><spam class='glyphicon glyphicon-eye-open'></spam</a></td>"; 
                                                        }
                                                        echo "<td class='hidden-xs'><a href='delMensaje/$m->idMensaje'>Borrar</a></td>";
                                                        echo "<td class='visible-xs'><a href='delMensaje/$m->idMensaje'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
                                                    }
                                                } else {
                                                    echo 'Sin registro a mostrar';
                                                }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php echo $this->pagination->create_links();?><gh{
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->