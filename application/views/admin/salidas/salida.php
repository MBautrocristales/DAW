            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Salidas
<!--                        <small>advanced tables</small>-->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Salida/getSalida"><i class="fa fa-external-link-square"></i>Salidas</a></li>
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
                                                <td colspan="8"><a href="formSalida">Nuevo</td>
                                            </tr>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Cantidad</th>
                                                <th>Bodega</th>
                                                <th colspan="4">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                if (isset($salida)) {
                                                    foreach ($salida as $sa) {
                                                        echo "<tr>";
                                                        echo "<td>" . $sa->FechaS . "</td>";
                                                        echo "<td>" . $sa->CantidadS . "</td>";
                                                        echo "<td>" . $sa->idBodega . "</td>";
                                                        echo "<td><a href='formUpSalida/$sa->idSalida'>" . "<spam class='hidden-xs'>Modificar</spam>" . "<spam class='visible-xs glyphicon glyphicon-pencil'></spam>" . "</a></td>";
                                                        echo "<td class='hidden-xs'><a href='delSalida/$sa->idSalida'>Borrar</a></td>";
                                                        echo "<td class='visible-xs'><a href='delSalida/$sa->idSalida'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
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