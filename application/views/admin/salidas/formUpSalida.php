<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios
            <small>Modificar Salida</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Salida/getSalida"><i class="fa fa-external-link-square"></i>Usarios</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Salida/formUpSalida"><i class="fa fa-external-link-square"></i>Modificar Usario</a></li>
        </ol>
    </section>        
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Salidas</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Salida/upSalida'); ?>
                    <?php foreach ($salida as $sa){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $sa->idSalida;?>">
                        <div class="form-group">
                            Fecha:
                            <div class="form-group has-feedback">
                                <input type="date" required="" class="form-control" name="FechaS" value="<?php echo $sa->FechaS;?>" placeholder="Fecha">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            Cantidad:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="CantidadS" value="<?php echo $sa->CantidadS;?>" placeholder=" Cantidad">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            Bodega:
                            <select name="idBodega" class="form-control select2" style="width: 100%;">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
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
