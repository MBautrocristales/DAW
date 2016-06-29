            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Productos
<!--                        <small>advanced tables</small>-->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Producto/getProducto"><i class="fa fa-object-group"></i>Productos</a></li>
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
                                                <td colspan="7"><a href="formProducto">Nuevo</td>
                                                 <th colspan="3" class="hidden-xs">Precios</th>
                                                 </tr>
                                            <tr>
                                                <th>Clave</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Ubicacion</th>
                                                <th>Existencia</th>
                                                <th class="hidden-xs">Caracteristicas</th>
                                                <th class="hidden-xs">Mayoreo</th>
                                                <th class="hidden-xs">Publico</th>
                                                <th class="hidden-xs">Instalado</th>
                                                <th colspan="3">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                if (isset($producto)) {
                                                    foreach ($producto as $pro) {
                                                        echo "<tr>";
                                                         echo "<td>" . $pro->Clave . "</td>";
                                                        echo "<td>" . $pro->MarcaP . "</td>";
                                                        echo "<td>" . $pro->modelo . "</td>";
                                                        echo "<td>" . $pro->anyo . "</td>";
                                                        echo "<td>R".$pro->rac."/F".$pro->fila."/P".$pro->piso."/P".$pro->posicion."</td>";
                                                        echo "<td>" . $pro->existencia . "</td>";
                                                        echo "<td class='hidden-xs'>" . $pro->color ."/". $pro->procedencia ."/". $pro->tipo . "</td>";
                                                        echo "<td class='hidden-xs'>$" . $pro->pMayoreo . "</td>";
                                                        echo "<td class='hidden-xs'>$" . $pro->pPublico . "</td>";
                                                        echo "<td class='hidden-xs'>$" . $pro->pInstalado . "</td>";
                                                        echo "<td><a href='formUpProducto/$pro->idProducto'>"."<spam class='hidden-xs'>Modificar</spam>"."<spam class='visible-xs glyphicon glyphicon-pencil'></spam>"."</a></td>";
                                                        echo "<td class='hidden-xs'><a href='delProducto/$pro->idProducto'>Borrar</a></td>";
                                                        echo "<td class='visible-xs'><a href='delProducto/$pro->idProducto'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
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