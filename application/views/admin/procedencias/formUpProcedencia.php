<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Procedencias
            <small>Modificar Procedencia</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Procedencia/getProcedencia"><i class="fa fa-stack-overflow"></i>Sucursales</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Procedencia/formUpProcedencia"><i class="fa fa-stack-overflow"></i>Modificar Procedencia</a></li>
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

                    <?php echo form_open('Procedencia/upProcedencia'); ?>
                    <?php foreach ($procedencia as $pro){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $pro->idProcedencia;?>">
                        <div class="form-group">
                            Procedencia:
                            <div class="form-group has-feedback">
                              <?php echo form_error('NombreP','<div class = "error">','</div>');?>
                                <input type="text" required="" class="form-control" name="NombreP" value="<?php echo $pro->NombreP;?>" placeholder="Procedencia">
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
