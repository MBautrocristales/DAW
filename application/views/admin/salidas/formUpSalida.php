<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Salidas
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
                          <?php echo form_error('FechaS','<div class = "error">','</div>');?>
                          <input type="date" required="" value="<?php echo $sa->FechaS;?>" name="FechaS">
                          Cantidad:
                          <?php echo form_error('CantidadS','<div class = "error">','</div>');?>
                          <input type="number" required="" name="CantidadS" value="<?php echo $sa->CantidadS;?>"  placeholder="Cantidad">
                          Bodega:
                          <?php echo form_error('idBodega','<div class = "error">','</div>');?>
                          <select name="idBodega" style="width: 10%;">
                              <option value="1" selected="">1</option>
                              <option value="2">2</option>
                          </select>

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
