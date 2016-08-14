<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contactanos
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>index.php/micontrolador/index">Home</a>
                </li>
                <li class="active">Contactanos</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.777703764703!2d-100.44871948571085!3d19.891606430998543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2d09b4afb43cf%3A0x567daeab1510e913!2sMB+Autocristales!5e0!3m2!1ses-419!2smx!4v1466148924081"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Detalles de contacto</h3>
            <p>
                Hidalgo #304-A<br> Centro Maravatío Mich.<br>
            </p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">Telefon</abbr>: (447) 478-4853</p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">Correo Electronico</abbr>: <a href="mailto:mbautocristales@gmail.com">mbautocristales@gmail.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i>
                <abbr title="Hours">Horario</abbr>: Lunes a Viernes: 9:00 AM a 5:00 PM</p>
                <abbr title="Hours"></abbr>Sabado: 9:00 AM a 2:00 PM</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-md-8">
            <h3>Dejanos un mensaje </h3>
           <?php echo form_open('Mensaje/addMensaje'); ?>
                <div class="control-group form-group">
                    <div class="controls">
                      <label>Nombre:</label>
                        <?php echo form_error('nombreMen','<div class = "error">','</div>');?>
                        <input type="text" class="form-control" id="name" name="nombreMen" required="" value="<?= set_value('nombreMen'); ?>" placeholder="Nombre">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                      <label>Telefono:</label>
                        <?php echo form_error('telefono','<div class = "error">','</div>');?>
                        <input type="tel" class="form-control" id="phone" name="telefono" required="" value="<?= set_value('telefono'); ?>" placeholder="Telefono">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                      <label>Correo Electronico:</label>
                        <?php echo form_error('email','<div class = "error">','</div>');?>
                        <input type="email" class="form-control" id="email" name="email" required="" value="<?= set_value('email'); ?>" placeholder="Correo Electronico">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Mensaje:</label>
                        <?php echo form_error('mensaje','<div class = "error">','</div>');?>
                        <textarea rows="10" cols="100" class="form-control" id="mensaje" name="mensaje" required="" value="<?= set_value('mensaje'); ?>" placeholder="Mensaje" maxlength="500" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary" onclick="return confirm('Su mensaje sera enviado')">Enviar Mensaje</button>
             <?php echo form_close(); ?>
        </div>

    </div>
    <!-- /.row -->
    <hr>
