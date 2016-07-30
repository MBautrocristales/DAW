<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bodegas
            <small>Nueva Bodega</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Bodega/getBodega"><i class="fa fa-archive"></i>Bodegas</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Bodega/formBodega"><i class="fa fa-archive"></i>Agregar Bodega</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Bodegas</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Bodega/addBodega'); ?>

                    <div class="box-body">
                         <div class="form-group">
                            Stock:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="Stock" placeholder="Stock">

                            </div>
                        </div>
                        <div class="form-group">
                            Precio Publico:
                            <input type="number" required="" class="form-control" name="P_Publico" placeholder="Precio Publico">
                        </div>
                        <div class="form-group">
                            Precio Instalado:
                            <input type="number" required="" class="form-control" name="P_Instalado" placeholder="Precio Publico">
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
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
