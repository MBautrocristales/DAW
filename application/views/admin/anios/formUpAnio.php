<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Años
            <small>Modificar Año</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Anio/getAnio"><i class="fa fa-stack-overflow"></i>Usarios</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Anio/formUpAnio"><i class="fa fa-stack-overflow"></i>Modificar Usario</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Años</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Anio/upAnio'); ?>
                    <?php foreach ($anio as $an){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $en->idAnio;?>">
                        <div class="form-group">
                            Años:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="FechaE" value="<?php echo $an->AnioAuto;?>" placeholder="Nombre">

                            </div>
                        </div>
                        <div class="form-group">
                            Cantidad:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="CantidadE" value="<?php echo $an->CantidadE;?>" placeholder="Apellido Paterno">

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
