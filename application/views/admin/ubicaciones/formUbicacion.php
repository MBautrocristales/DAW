Precio<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ubicaciones
            <small>Nueva Ubicacion</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Ubicacion/getUbicacion"><i class="fa fa-stack-overflow"></i>Ubicacion</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Ubicacion/formUbicacion"><i class="fa fa-stack-overflow"></i>Agregar Ubicacion</a></li>
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

                    <?php echo form_open('Ubicacion/addUbicacion'); ?>

                    <div class="box-body">
                         <div class="form-group">
                            Rac:
                            <div class="form-group has-feedback">
                                <?php echo form_error('Rac','<div class = "error">','</div>');?>
                                <input type="number" required="" class="form-control" name="Rac" value="<?= set_value('Rac'); ?>" placeholder="Rac">
                            </div>
                        </div>
                        <div class="form-group">
                           Fila:
                           <div class="form-group has-feedback">
                               <?php echo form_error('Fila','<div class = "error">','</div>');?>
                               <input type="number" required="" class="form-control" name="Fila" value="<?= set_value('Fila'); ?>" placeholder="Fila">
                           </div>
                       </div>
                       <div class="form-group">
                          Piso:
                          <div class="form-group has-feedback">
                              <?php echo form_error('Piso','<div class = "error">','</div>');?>
                              <input type="number" required="" class="form-control" name="Piso" value="<?= set_value('Piso'); ?>" placeholder="Piso">
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
