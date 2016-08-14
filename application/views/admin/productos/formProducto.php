<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Productos
            <small>Nuevo Producto</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Producto/getProducto">Productos</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Producto/addProducto">Agregar Producto</a></li>
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

                    <?php echo form_open('Producto/addProducto'); ?>

                    <div class="box-body">
                      <div class="row">
                        <div class="form-group col-lg-2 col-xs-6">
                            Clave:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="Clave" placeholder="clave">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Marca:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="MarcaP" placeholder="marca">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Categoria:
                            <select class="form-group select2" name="idCategoria">
                              <option selected="selected">Seleccionar</option>
                               <?php
                                       if(isset($categoria)){
                                          foreach ($categoria as $pro){
                                            echo    "<option value='$pro->idCategoria'>" . $pro->NombreCat . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-xs-6">
                            Precio Dentro:
                            <select class="form-group" name="idPrecio">
                              <option selected="selected">Seleccionar</option>
                               <?php
                                       if(isset($precio)){
                                          foreach ($precio as $pro){
                                            echo    "<option value='$pro->idPrecio'>" .'P. Lista: '. $pro->P_Lista.' P. Mayoreo: '. $pro->P_Mayoreo  . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-1 col-xs-6">
                            Color
                            <select class="form-group select2" name="idCaracteristica">
                              <option selected="selected">Seleccionar</option>
                               <?php
                                       if(isset($caracteristica)){
                                          foreach ($caracteristica as $pro){
                                            echo    "<option value='$pro->idCaracteristica'>". $pro->Color  . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-2 col-xs-6">
                            Ubicacion:
                            <select class="form-group select2" name="idUbicacion">
                              <option selected="selected">Seleccionar</option>
                               <?php
                                       if(isset($ubicacion)){
                                          foreach ($ubicacion as $pro){
                                            echo    "<option value='$pro->idUbicacion'>" .'R'. $pro->Rac.'/F'. $pro->Fila.'/P'. $pro->Posicion. "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Auto:
                            <select class="form-group select2" name="idAuto">
                              <option selected="selected">Seleccionar</option>
                               <?php
                                       if(isset($auto)){
                                          foreach ($auto as $pro){
                                            echo    "<option value='$pro->idAuto'>". $pro->MarcaA. "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Procedencia:
                            <select class="form-group select2" name="idProcedencia">
                              <option selected="selected">Seleccionar</option>
                               <?php
                                       if(isset($procedencia)){
                                          foreach ($procedencia as $pro){
                                            echo    "<option value='$pro->idProcedencia'>". $pro->NombreP. "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Tipo:
                            <select class="form-group select2" name="idTipo">
                              <option selected="selected">Seleccionar</option>
                               <?php
                                       if(isset($tipo)){
                                          foreach ($tipo as $pro){
                                            echo    "<option value='$pro->idTipo'>". $pro->NombreT. "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-xs-6">
                            Precio Fuera:
                            <select class="form-group select2" name="idBodega">
                              <option selected="selected">Seleccionar</option>
                               <?php
                                       if(isset($bodega)){
                                          foreach ($bodega as $pro){
                                            echo    "<option value='$pro->idBodega'>" .'P. Publico: '. $pro->P_Publico.' P. Instalado: '. $pro->P_Instalado  . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                        </div>

                        <div class="form-group col-lg-2 col-xs-6">

                            <input type="hidden" name="idUsuario" value="0">';


                        </div>

                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa"></i> Aceptar
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
