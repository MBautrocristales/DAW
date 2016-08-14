<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Datos Tipos
<!--                        <small>advanced tables</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado">
                    <i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Tipo/getTipo">
                    <i class="fa fa-stack-overflow"></i>Tipos</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Tipo/getTipo">
                            <i class="fa fa-stack-overflow"></i>Años</a></li>
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
                                    <td colspan="8"><a href="formCategoria">Nuevo</td>
                                </tr>
                                <h3>Marcas</h3>
                                <tr>
                                    <th>Numero</th>
                                    <th>Tipo</th>
                                    <th colspan="4">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        if (isset($tipo)) {
                                            foreach ($tipo as $ti) {
                                                echo "<tr>";
                                                echo "<td>" . $ti->idTipo . "</td>";
                                                echo "<td>" . $ti->NombreT . "</td>";
                                                echo "<td><a href='formUpEntrada/$ti->idTipo'>" . "<spam class='hidden-xs'>Modificar</spam>" . "<spam class='visible-xs glyphicon glyphicon-pencil'></spam>" . "</a></td>";
                                                echo "<td class='hidden-xs'><a href='delEntrada/$ti->idTipo'>Borrar</a></td>";
                                                echo "<td class='visible-xs'><a href='delEntrada/$ti->idTipo'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
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
