Precio<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Precios
            <small>Modificar Precio</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Precio/getPrecio"><i class="fa fa-stack-overflow"></i>Sucursales</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Precio/formUpPrecio"><i class="fa fa-stack-overflow"></i>Modificar Sucursal</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Precios</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Precio/upPrecio'); ?>
                    <?php foreach ($precio as $pre){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $pre->idPrecio;?>">
                        <div class="form-group">
                            Precio Lista:
                            <div class="form-group has-feedback">
                              <?php echo form_error('P_Lista','<div class = "error">','</div>');?>
                                <input type="text" required="" class="form-control" name="P_Lista" value="<?php echo $pre->P_Lista;?>" placeholder="Precio Lista">
                            </div>
                        </div>
                        <div class="form-group">
                            Precio Lista:
                            <div class="form-group has-feedback">
                              <?php echo form_error('P_Mayoreo','<div class = "error">','</div>');?>
                                <input type="text" required="" class="form-control" name="P_Mayoreo" value="<?php echo $pre->P_Mayoreo;?>" placeholder="Precio Mayoreo">
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" value="enviar" class="btn btn-primary">
                            <i class="fa"></i> Aceptar
                        </button>
                    </div>
                    <?php } ?>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
