<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Anios
            <small>Nueva Anio</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Anio/getAnio"><i class="fa fa-stack-overflow"></i>Año</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Anio/formAnio"><i class="fa fa-stack-overflow"></i>Agregar Año</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Anios</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Anio/addAnio'); ?>

                    <div class="box-body">
                         <div class="form-group">
                            Años:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="AnioAuto" placeholder="Años">
                            </div>
                        </div>
                        <div class="form-group">
                            Modelo:
                            <select name="idModelo" class="form-control select2" style="width: 100%;">
                                <option value="0" selected="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            Modelo:
                            <select name="idAuto" class="form-control select2" style="width: 100%;">
                                <option value="0" selected="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
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
