<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <img class="img-responsive" src="<?php echo base_url(); ?>images/Administrador/01_login/login_02.jpg" alt="">
            </div>
            <div class="col-lg-2 col-xs-2">
                <div class="box box-solid bg-black-gradient">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Calendario</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%">
                            <?= $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4)) ?>
                        </div>
                    </div><!-- /.box-body -->
                </div>

            </div>
        </div><!-- /.row -->
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
