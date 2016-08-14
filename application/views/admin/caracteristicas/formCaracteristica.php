<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Caracteristicas
            <small>Nueva Caracteristica</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Caracteristica/getCaracteristica"><i class="fa fa-stack-overflow"></i>Entrada</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Caracteristica/formCaracteristica"><i class="fa fa-stack-overflow"></i>Agregar Entrada</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Caracteristicas</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Caracteristica/addCaracteristica'); ?>

                    <div class="box-body">
                         <div class="form-group">
                            Color:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="Color" placeholder="Color">

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
