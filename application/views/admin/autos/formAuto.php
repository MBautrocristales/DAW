<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Autos
            <small>Nueva Auto</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Auto/getAuto"><i class="fa fa-stack-overflow"></i>Auto</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Auto/formAuto"><i class="fa fa-stack-overflow"></i>Agregar Auto</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Autos</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Auto/addAuto'); ?>

                    <div class="box-body">
                         <div class="form-group">
                            Marca:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="MarcaA" placeholder="Cantidad">

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
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
