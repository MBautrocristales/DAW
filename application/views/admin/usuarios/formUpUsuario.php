<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios
            <small>Modificar Usuario</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/getUsuario"><i class="fa fa-users"></i>Usarios</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/formUsuario"><i class="fa fa-users"></i>Modificar Usario</a></li>
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

                    <?php echo form_open('usuario/upUsuario'); ?>
                    <?php foreach ($usuario as $usu){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $usu->idUsuario;?>">
                        <div class="form-group">
                            Nombre:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="nombreUs" value="<?php echo $usu->nombreUs;?>" placeholder="Nombre">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            Nombre:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="aPaterno" value="<?php echo $usu->aPaterno;?>" placeholder="Apellido Paterno">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            Nombre:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="aMaterno" value="<?php echo $usu->aMaterno;?>" placeholder="Apellido Materno">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            Usuario:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="nick" value="<?php echo $usu->nick;?>" placeholder="Usaurio">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            Contraseña:
                            <div class="form-group has-feedback">
                                <input type="password" required="" class="form-control" name="password" value="<?php echo $usu->password;?>" placeholder="Contraseña">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            Privilegios:
                            <select name="privilegios" class="form-control select2" style="width: 100%;">
                                <option value="0">Usuario</option>
                                <option value="1">Administrador</option>
                            </select>
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
