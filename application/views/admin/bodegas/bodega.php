<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bodegas
<!--                        <small>advanced tables</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado">
                    <i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Bodega/getBodega">
                    <i class="fa fa-stack-overflow"></i>Bodegas</a></li>
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
                                    <td colspan="8"><a href="formBodega">Nuevo</td>
                                </tr>
                                <tr>
                                    <th>Id Bodega</th>
                                    <th>Stock</th>
                                    <th>Precio Publico</th>
                                    <th>Precio Instalado</th>
                                    <th colspan="4">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    if (isset($bodega)) {
                                        foreach ($bodega as $bo) {
                                            echo "<tr>";
                                            echo "<td>" . $bo->idBodega . "</td>";
                                            echo "<td>" . $bo->Stock . "</td>";
                                            echo "<td>" . $bo->P_Publico . "</td>";
                                            echo "<td>" . $bo->P_Instalado . "</td>";
                                            echo "<td><a href='formUpBodega/$bo->idBodega'>" . "<spam class='hidden-xs'>Modificar</spam>" . "<spam class='visible-xs glyphicon glyphicon-pencil'></spam>" . "</a></td>";
                                            
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
