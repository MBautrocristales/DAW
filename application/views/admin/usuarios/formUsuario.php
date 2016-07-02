<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios
            <small>Nuev Usuario</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/getUsuario"><i class="fa fa-users"></i>Usarios</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/formUsuario"><i class="fa fa-users"></i>Agregar Usuario</a></li>
        </ol>
    </section>        
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Usuarios</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->



                    <?php echo form_open('Usuario/addUsuario'); ?>

                    <div class="box-body">
                        <div class="form-group">
                            Nombre:
                            <div class="form-group has-feedback">
                                <?php echo form_error('nombreUs','<div class = "error">','</div>');?>
                                <input type="text"  class="form-control" name="nombreUs" required="" value="<?= set_value('nombreUs'); ?>" placeholder="Nombre">

                            </div>
                        </div>
                        <div class="form-group">
                            Apellido Paterno:
                            <div class="form-group has-feedback">                                
                                <?php echo form_error('aPaterno','<div class = "error">','</div>');?>
                                <input type="text"  class="form-control" name="aPaterno" required="" value="<?= set_value('aPaterno'); ?>" placeholder="Apellido Paterno">

                            </div>
                        </div>
                        <div class="form-group">
                            Apellido Materno:
                            <div class="form-group has-feedback">
                                <?php echo form_error('aMaterno','<div class = "error">','</div>');?>
                                <input type="text"  class="form-control" name="aMaterno" required="" value="<?= set_value('aMaterno'); ?>" placeholder="Apellido Materno">

                            </div>
                        </div>
                        <div class="form-group">
                            Usuario:
                            <div class="form-group has-feedback">
                                <?php echo form_error('nick','<div class = "error">','</div>');?>
                                <input type="text"  class="form-control" name="nick" required="" value="<?= set_value('nick'); ?>" placeholder="Usaurio">
                            </div>
                        </div>
                        <div class="form-group">
                            Contraseña:
                            <div class="form-group has-feedback">                                
                                <?php echo form_error('password','<div class = "error">','</div>');?>
                                <input type="password"  class="form-control" name="password" required="" value="<?= set_value('password'); ?>" placeholder="Contraseña">

                            </div>
                        </div>
                        <div class="form-group">
                            Privilegios:
                            <select name="privilegios" class="form-control select2" style="width: 100%;">
                                <option value="0" selected="" <?= set_select('privilegios', '0'); ?>>Usuario</option>
                                <option value="1" <?= set_select('privilegios', '1'); ?>>Administrador</option>
                            </select>
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
