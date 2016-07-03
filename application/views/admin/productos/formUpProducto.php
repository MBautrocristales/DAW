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
                        <input type="hidden" name="id" value="<?php echo $prod->idParabrisas;?>">
                        <div class="form-group col-lg-2 col-xs-6">
                            Clave:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="Clave" placeholder="clave" value="<?php echo $prod->Clave;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Marca:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="MarcaP" placeholder="MarcaP" value="<?php echo $prod->MarcaP;?>">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Categoria:
                            <select name="idCategoria" class="form-control select2" style="width: 100%;">
                                <option value="1" <?= set_select('idCategoria', '1'); ?>>1</option>
                                <option value="2" <?= set_select('idCategoria', '2'); ?>>2</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Precio:
                            <select name="idPrecio" class="form-control select2" style="width: 100%;">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Caracteristicas:
                            <select name="idCaracteristica" class="form-control select2" style="width: 100%;">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Ubicacion:
                            <select name="idUbicacion" class="form-control select2" style="width: 100%;">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Auto:
                            <select name="idAuto" class="form-control select2" style="width: 100%;">
                                <option value="1" selected="">1</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Procedencia:
                            <select name="idProcedencia" class="form-control select2" style="width: 100%;">
                                <option value="2" selected="">2</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Tipo:
                            <select name="idTipo" class="form-control select2" style="width: 100%;">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Bodega:
                            <select name="idBodega" class="form-control select2" style="width: 100%;">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            id Usuario:
                            <select name="idUsuario" class="form-control select2" style="width: 100%;">
                                <option value="2" selected="">2</option>
                                <option value="3">3</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="11">11</option>

                            </select>
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
