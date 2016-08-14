<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ubicacion
            <small>Modificar Ubicacion</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Ubicacion/getUbicacion"><i class="fa fa-stack-overflow"></i>Ubicaciones</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Ubicacion/formUpUbicacion"><i class="fa fa-stack-overflow"></i>Modificar Ubicacion</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Ubicaciones</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Ubicacion/upUbicacion'); ?>
                    <?php foreach ($ubicacion as $ub){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $ub->idUbicacion;?>">
                        <div class="form-group">
                            Rac:
                            <div class="form-group has-feedback">
                              <?php echo form_error('Rac','<div class = "error">','</div>');?>
                                <input type="text" required="" class="form-control" name="Rac" value="<?php echo $ub->Rac;?>" placeholder="Rac">
                            </div>
                        </div>
                        <div class="form-group">
                            Fila:
                            <div class="form-group has-feedback">
                              <?php echo form_error('Fila','<div class = "error">','</div>');?>
                                <input type="text" required="" class="form-control" name="Fila" value="<?php echo $ub->Fila;?>" placeholder="Fila">
                            </div>
                        </div>
                        <div class="form-group">
                            Piso:
                            <div class="form-group has-feedback">
                              <?php echo form_error('Piso','<div class = "error">','</div>');?>
                                <input type="text" required="" class="form-control" name="Piso" value="<?php echo $ub->Piso;?>" placeholder="Piso">
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
