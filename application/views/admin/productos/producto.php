<script type="text/javascript">
(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Productos
<!--                        <small>advanced tables</small>-->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Producto/getProducto"><i class="fa fa-object-group"></i>Productos</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
<!--                                <div class="box-header">
                                    <h3 class="box-title">Hover Data Table</h3>
                                </div> /.box-header -->
                                <div class="box-body">
                                  <div class="derecha" id="buscar">Buscar <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtro"></div>
                                    <table id="example2" class="order-table table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td colspan="7"><a href="formProducto">Nuevo</td>
                                                 <th colspan="3" class="hidden-xs"></th>
                                                 </tr>
                                            <tr>
                                                <th>Clave</th>
                                                <th>Marca</th>
                                                <th>Categoria</th>
                                                <th>Precios</th>
                                                <th>Color</th>
                                                <th>Ubicacion</th>
                                                <th>Auto</th>
                                                <th>Procedencia</th>
                                                <th>Tipo</th>
                                                <th>Stock</th>
                                                <th colspan="3">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                if (isset($producto)) {
                                                    foreach ($producto as $pro) {
                                                        echo "<tr>";
                                                        echo "<td>" . $pro->Clave . "</td>";
                                                        echo "<td>" . $pro->MarcaP . "</td>";
                                                        echo "<td>" . $pro->NombreCat . "</td>";
                                                        echo "<td> <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#$pro->idParabrisas'>Ver</button></td>";
                                                        echo "<td>" . $pro->Color . "</td>";
                                                        echo "<td>"."Rac: ".$pro->Rac."<br>Fila: ".$pro->Fila."<br>Piso: ".$pro->Piso."</td>";
                                                        echo "<td>".$pro->MarcaA." ".$pro->ModAuto."</td>";
                                                        echo "<td>" . $pro->NombreP . "</td>";
                                                        echo "<td>" . $pro->NombreT . "</td>";
                                                        echo "<td>" . $pro->Stock . "</td>";
                                                        //echo "<td class='hidden-xs'>" . $pro->color ."/". $pro->procedencia ."/". $pro->tipo . "</td>";
                                                        //echo "<td class='hidden-xs'>$" . $pro->pMayoreo . "</td>";
                                                        //echo "<td class='hidden-xs'>$" . $pro->pPublico . "</td>";
                                                        //echo "<td class='hidden-xs'>$" . $pro->pInstalado . "</td>";
                                                        echo "<td><a href='formUpProducto/$pro->idParabrisas'>"."<spam class='hidden-xs'>Modificar</spam>"."<spam class='visible-xs glyphicon glyphicon-pencil'></spam>"."</a></td>";
                                                        echo "<td class='hidden-xs'><a href='delProducto/$pro->idParabrisas'>Borrar</a></td>";
                                                        echo "<td class='visible-xs'><a href='delProducto/$pro->idParabrisas'><spam class='glyphicon glyphicon-trash'></spam</a></td>";
                                                    }
                                                } else {
                                                    echo 'Sin registro a mostrar';
                                                }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <?php
                                    if(isset($producto)){
                                    foreach ($producto as $d){
                                    ?>

                                    <!-- Modal -->
                                    <div class="modal fade" id="<?php echo $d->idParabrisas?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Ver</h4>
                                          </div>
                                          <div class="modal-body">
                                            <table>
                                            <tr><td>Precio Lista: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->P_Lista?></td></tr>
                                            <tr><td>Precio Mayoreo: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->P_Mayoreo?></td></tr>
                                            <tr><td>Precio Publico:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->P_Publico?></td></tr>
                                            <tr><td>Precio Instalado: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->P_Instalado?></td></tr>
                                            </table>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>


                                    <div class="col-md-12 col-sm-12">
                                      <h2>Generar reporte</h2>
                                        <?php echo form_open('Producto/generar')?>
                                        <div class="radio">
                            <label>
                                <input name="formato" type="radio" value="xml" required>XML
                            </label>
                            <label>
                                <input name="formato" type="radio" value="xls" required>EXCEL
                            </label>
                        </div>
                                            <input type="submit" value="Generar" class="center-block btn btn-info" onclick="return confirm('¿Deseas Continuar?')">
                                         </form>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
