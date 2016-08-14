Precio<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Precios
            <small>Nueva Precio</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Precio/getPrecio"><i class="fa fa-stack-overflow"></i>Precio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Precio/formPrecio"><i class="fa fa-stack-overflow"></i>Agregar Precio</a></li>
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

                    <?php echo form_open('Precio/addPrecio'); ?>

                    <div class="box-body">
                         <div class="form-group">
                            Precio de Lista:
                            <div class="form-group has-feedback">
                                <?php echo form_error('P_Lista','<div class = "error">','</div>');?>
                                <input type="text" required="" class="form-control" name="P_Lista" value="<?= set_value('P_Lista'); ?>" placeholder="Precio de Lista">
                            </div>
                        </div>
                        <div class="form-group">
                           Precio de Mayoreo:
                           <div class="form-group has-feedback">
                               <?php echo form_error('P_Mayoreo','<div class = "error">','</div>');?>
                               <input type="text" required="" class="form-control" name="P_Mayoreo" value="<?= set_value('P_Mayoreo'); ?>" placeholder="Precio de Mayoreo">
                           </div>
                       </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa"></i> Guardar
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
