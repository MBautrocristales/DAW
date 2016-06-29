<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Productos
            <small>Modificar Producto</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li class="active">Modifica Producto</li>
        </ol>
    </section>        
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Productos</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Producto/upProducto'); ?>
                    <?php foreach ($producto as $prod){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $prod->idProducto;?>">
                        <div class="form-group col-lg-2 col-xs-6">
                            Clave:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="clave" placeholder="clave" value="<?php echo $prod->clave;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Marca:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="marca" placeholder="marca" value="<?php echo $prod->marca;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Modelo:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="modelo" placeholder="modelo" value="<?php echo $prod->modelo;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Año:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="anyo" placeholder="año" value="<?php echo $prod->anyo;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Rac:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="rac" placeholder="rac" value="<?php echo $prod->rac;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Fila:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="fila" placeholder="fila" value="<?php echo $prod->fila;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Piso:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="piso" placeholder="piso" value="<?php echo $prod->piso;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Posicion:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="posicion" placeholder="posicion" value="<?php echo $prod->posicion;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Existencia:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="existencia" placeholder="existencia" value="<?php echo $prod->existencia;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Color:
                             <div class="form-group has-feedback">
                            <select name="color" class="form-control select2" style="width: 100%;">
                                <option value="GGN" selected="">GGN</option>
                                <option value="GBN">GTN</option>
                                <option value="GTN">GTN</option>
                            </select>
                             </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Procedencia:
                             <div class="form-group has-feedback">
                            <select name="procedencia" class="form-control select2" style="width: 100%;">
                                <option value="CMX" selected="">CMX</option>
                                <option value="CGA">CGA</option>
                            </select>
                             </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Tipo:
                             <div class="form-group has-feedback">
                            <select name="tipo" class="form-control select2" style="width: 100%;">
                                <option value="S" selected="">Sombra</option>
                                <option value="C">Claro</option>
                                <option value="T">Tintex</option>
                                <option value="SC">Sombra/Claro</option>
                                <option value="ST">Sombra/Tintex</option>
                                <option value="CT">Caro/Tintex</option>
                                <option value="SCT">Sombra/Caro/Tintex</option>
                            </select>
                             </div>
                        </div>
                        <div class="form-group col-lg-3 col-xs-6">
                            Precio Lista $:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="pLista" placeholder="$ Precio Lista" value="<?php echo $prod->pLista;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-xs-6">
                            Precio Mayoreo $:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="pMayoreo" placeholder="$ Precio Mayoreo" value="<?php echo $prod->pMayoreo;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-xs-6">
                            Precio Publico $:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="pPublico" placeholder="$ Precio Publico" value="<?php echo $prod->pPublico;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-xs-6">
                            Precio Instalado $:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="pInstalado" placeholder="$ Precio Instalado" value="<?php echo $prod->pInstalado;?>">
                            </div>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa"></i> Aceptar
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-close"></i> Cancelar
                        </button>
                    </div>
                    <?php } ?>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
