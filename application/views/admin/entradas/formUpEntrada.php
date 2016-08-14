<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios
            <small>Modificar Entrada</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Entrada/getEntrada"><i class="fa fa-stack-overflow"></i>Entradas</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Entrada/formUpEntrada"><i class="fa fa-stack-overflow"></i>Modificar Entrada</a></li>
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

                    <?php echo form_open('Entrada/upEntrada'); ?>
                    <?php foreach ($entrada as $en){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $en->idEntrada;?>">
                        <div class="form-group">

                            <div class="form-group has-feedback">
                              Fecha:
                                <input type="date" required="" value="<?php echo $en->FechaE;?>" name="FechaE">
                              Cantidad:
                                <input type="number" required=""  name="CantidadE" value="<?php echo $en->CantidadE;?>" placeholder="Cantidad">
                                Bodega:
                                  <select name="idBodega"  style="width: 10%;">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="form-group has-feedback">


                            </div>
                        </div>
                        <div class="form-group">

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
