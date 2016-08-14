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

                            <div class="form-group has-feedback">
                                  Fecha:
                                <?php echo form_error('FechaE','<div class = "error">','</div>');?>
                                <input type="date" required="" value="<?php echo date("Y-m-d");?>" name="FechaE">
                                  Cantidad:
                                <?php echo form_error('CantidadE','<div class = "error">','</div>');?>
                                <input type="number" required="" name="CantidadE" placeholder="Cantidad">
                                Bodega:
                                <?php echo form_error('idBodega','<div class = "error">','</div>');?>
                                <select name="idBodega" style="width: 10%;">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">

                        </div>


                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa"></i> Aceptar
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
