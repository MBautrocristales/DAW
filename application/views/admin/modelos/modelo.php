<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Modelos
<!--                        <small>advanced tables</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado">
                    <i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Entrada/getEntrada">
                    <i class="fa fa-stack-overflow"></i>Entradas</a></li>
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
                                    <td colspan="8"><a href="formEntrada">Nuevo</td>
                                </tr>
                                <tr>
                                    <th>Numero</th>
                                    <th>Modelo</th>
                                    <th colspan="4">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    if (isset($modelo)) {
                                        foreach ($modelo as $mo) {
                                            echo "<tr>";
                                            echo "<td>" . $mo->idModelo . "</td>";
                                            echo "<td>" . $mo->ModAuto . "</td>";
                                            echo "<td><a href='formUpEntrada/$mo->idModelo'>" . "<spam class='hidden-xs'>Modificar</spam>" . "<spam class='visible-xs glyphicon glyphicon-pencil'></spam>" . "</a></td>";
                                            echo "<td class='hidden-xs'><a href='delEntrada/$mo->idModelo'>Borrar</a></td>";
                                            echo "<td class='visible-xs'><a href='delEntrada/$mo->idModelo'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
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
