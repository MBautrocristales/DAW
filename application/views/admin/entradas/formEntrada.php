<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Entradas
            <small>Nueva Entrada</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Entrada/getEntrada"><i class="fa fa-stack-overflow"></i>Entrada</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Entrada/formEntrada"><i class="fa fa-stack-overflow"></i>Agregar Entrada</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Entradas</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Entrada/addEntrada'); ?>

                    <div class="box-body">
                        <div class="form-group">
                            Fecha:
                            <div class="form-group has-feedback">
                                <input type="date" required="" class="form-control" name="FechaE" placeholder="Fecha">

                            </div>
                        </div>
                         <div class="form-group">
                            Cantidad:
                            <div class="form-group has-feedback">
                                <input type="number" required="" class="form-control" name="CantidadE" placeholder="Cantidad">

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
