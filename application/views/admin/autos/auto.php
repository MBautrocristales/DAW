<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Datos Autos
<!--                        <small>advanced tables</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado">
                    <i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Auto/getAuto">
                    <i class="fa fa-stack-overflow"></i>Autos</a></li>
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
                                    <td colspan="8"><a href="formAuto">Nuevo</td>
                                </tr>
                                <h3>Marcas</h3>
                                <tr>
                                    <th>Numero</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th colspan="4">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        if (isset($auto)) {
                                            foreach ($auto as $au) {
                                                echo "<tr>";
                                                echo "<td>" . $au->idAuto . "</td>";
                                                echo "<td>" . $au->MarcaA . "</td>";
                                                echo "<td>" . $au->MarcaA . "</td>";
                                                echo "<td><a href='formUpAuto/$au->idAuto'>" . "<spam class='hidden-xs'>Modificar</spam>" . "<spam class='visible-xs glyphicon glyphicon-pencil'></spam>" . "</a></td>";
                                                echo "<td class='hidden-xs'><a href='delAuto/$au->idAuto'>Borrar</a></td>";
                                                echo "<td class='visible-xs'><a href='delAuto/$au->idAuto'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
                                            }
                                    } else {
                                        echo 'Sin registro a mostrar';
                                    }
                                    ?>
                                </tr>
                            </tbody>

                        </table>
                        <?php echo $this->pagination->create_links();?>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td colspan="8"><a href="../Modelo/formModelo">Nuevo</td>
                                </tr>
                                <h3>Modelos</h3>
                                <tr>
                                    <th>Numero</th>
                                    <th>Modelo</th>
                                    <th>Id de Marca</th>
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
                                            echo "<td>" . $mo->idAuto . "</td>";
                                            echo "<td><a href='formUpModelo/$mo->idModelo'>" . "<spam class='hidden-xs'>Modificar</spam>" . "<spam class='visible-xs glyphicon glyphicon-pencil'></spam>" . "</a></td>";
                                            echo "<td class='hidden-xs'><a href='delModelo/$mo->idModelo'>Borrar</a></td>";
                                            echo "<td class='visible-xs'><a href='delModelo/$mo->idModelo'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
                                        }
                                    } else {
                                        echo 'Sin registro a mostrar';
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td colspan="8"><a href="../Anio/formAnio">Nuevo</td>
                                </tr>
                                <h3>Años</h3>
                                <tr>
                                    <th>Numero</th>
                                    <th>Años</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th colspan="4">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    if (isset($anio)) {
                                        foreach ($anio as $an) {
                                            echo "<tr>";
                                            echo "<td>" . $an->idAnio . "</td>";
                                            echo "<td>" . $an->AnioAuto . "</td>";
                                            echo "<td>" . $an->idModelo . "</td>";
                                            echo "<td>" . $an->idAuto   . "</td>";
                                            echo "<td><a href='formUpAnio/$an->idAnio'>" . "<spam class='hidden-xs'>Modificar</spam>" . "<spam class='visible-xs glyphicon glyphicon-pencil'></spam>" . "</a></td>";
                                            echo "<td class='hidden-xs'><a href='delAnio/$an->idAnio'>Borrar</a></td>";
                                            echo "<td class='visible-xs'><a href='delAnio/$an->idAnio'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
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
