<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Procedencias
            <small>Nueva Procedencia</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Procedencia/getProcedencia"><i class="fa fa-stack-overflow"></i>Sucursal</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Procedencia/formProcedencia"><i class="fa fa-stack-overflow"></i>Agregar Sucursal</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Procedencias</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Procedencia/addProcedencia'); ?>

                    <div class="box-body">
                         <div class="form-group">
                            Procedencia:
                            <div class="form-group has-feedback">
                                <?php echo form_error('NombreP','<div class = "error">','</div>');?>
                                <input type="text" required="" class="form-control" name="NombreP" value="<?= set_value('NombreP'); ?>" placeholder="Procedencia">
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
