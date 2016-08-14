<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ubicaciones
<!--                        <small>advanced tables</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado">
                    <i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Ubicacion/getUbicacion">
                    <i class="fa fa-stack-overflow"></i>Ubicaciones</a></li>
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
                                    <td colspan="8"><a href="formUbicacion">Nuevo</td>
                                </tr>
                                <tr>
                                    <th>Rac</th>
                                    <th>Fila</th>
                                    <th>Piso</th>
                                    <th colspan="4">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    if (isset($ubicacion)) {
                                        foreach ($ubicacion as $ub) {
                                            echo "<tr>";
                                            echo "<td>" . $ub->Rac . "</td>";
                                            echo "<td>" . $ub->Fila . "</td>";
                                            echo "<td>" . $ub->Piso . "</td>";
                                            echo "<td><a href='formUpUbicacion/$ub->idUbicacion'>" . "<spam class='hidden-xs'>Modificar</spam>" . "<spam class='visible-xs glyphicon glyphicon-pencil'></spam>" . "</a></td>";
                                            echo "<td class='hidden-xs'><a href='delUbicacion/$ub->idUbicacion'>Borrar</a></td>";
                                            echo "<td class='visible-xs'><a href='delUbicacion/$ub->idUbicacion'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
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
