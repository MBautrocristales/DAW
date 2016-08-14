<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios
            <small>Modificar Auto</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Auto/getAuto"><i class="fa fa-stack-overflow"></i>Usarios</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Auto/formUpAuto"><i class="fa fa-stack-overflow"></i>Modificar Usario</a></li>
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

                    <?php echo form_open('Auto/upAuto'); ?>
                    <?php foreach ($auto as $au){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $au->idAuto;?>">
                        <div class="form-group">
                            Fecha:
                            <div class="form-group has-feedback">
                                <input type="date" required="" class="form-control" name="FechaE" value="<?php echo $au->MarcaA;?>" placeholder="Nombre">

                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" value="enviar" class="btn btn-primary">
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
