$(document).on("ready",inicio);
        
    var base_url = 'http://localhost/MBAWA_001/';   
        
    function inicio(){        
        $("#buscar").keyup(function(){
            buscar = $("#buscar").val();
            op = $("#opcion").val();
            mostrar(buscar,op);
        });
        
        $("#lib").change(function(){
          $("#lib option:selected").each(function(){
              libro = $("#lib").val();
              editar(libro);
          });  
        });
        
        $("#tab").change(function(){
          $("#tab option:selected").each(function(){
              tabla = $("#tab").val();
              reportes(tabla);
          });  
        });
        
    }

    function mostrar(valor,op){
        $.ajax({
           url : base_url+"index.php/Busqueda/mostrar",
           type : "POST",
           data : {buscar:valor,opcion:op},
           success:function(respuesta){
               var registros = eval(respuesta);
               html="";
               switch(op){
                   case "libros":
                       for(var i = 0 ; i < registros.length; i++){
                           if(i==0){
                               html += '<div class="row">';
                           }
                           if(i%3 == 0){
                               html += '<div class="row">';
                           }
                                html += '<div class="col-md-4 col-sm-4"><a data-toggle="modal" href="#'+registros[i]["Id"]+'"><div class="thumbnail">';
                                html += '<img class="img-responsive" src="'+base_url+'upload/'+registros[i]["Imagen"]+'">';
                                html += '<div class="caption">';
                                html += '<h4>Titulo: '+registros[i]["Titulo"]+'</h4><br>';
                                html += '<label class="control-label">Editorial: </label> '+registros[i]["Editorial"]+'<br>';
                                html += '<label class="control-label">Autor: </label> '+registros[i]["Autor"]+'<br>';
                            html += '</div></a></div></div>';
                            if(i !=0 && i%5 == 0){
                               html += '</div>';
                           }
                           if(i == 2){
                               html += '</div>';
                           }
                           
                           html += '<div class="modal fade" id="'+registros[i]["Id"]+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                           html += '<div class="modal-dialog">';
                           html += '<div class="modal-content">';
                           html += '<div class="modal-header">';
                           html += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                           html += '<h1 class="modal-title"><center>'+registros[i]["Titulo"]+'</center></h1>';
                           html += '</div>';
                           html += '<div class="modal-body row">';
                           html += '<div class="col-sm-8">';
                           html += '<img class="center-block img-responsive img-rounded" src="'+base_url+'upload/'+registros[i]["Imagen"]+'">';
                           html += '</div>';
                           html += '<div class="col-sm-4">';
                           html += '<label class="control-label">Autor: </label> '+registros[i]["Autor"]+'<br>';
                           html += '<label class="control-label">Editorial: </label> '+registros[i]["Editorial"]+'<br>';
                           html += '<label class="control-label">Folio: </label> '+registros[i]["Folio"]+'<br>';
                           html += '<label class="control-label">Edicion: </label> '+registros[i]["Edicion"]+'<br>';
                           html += '<label class="control-label">ISBM: </label> '+registros[i]["ISBM"]+'<br>';
                           html += '<label class="control-label">Año: </label> '+registros[i]["Año"]+'<br>';
                           html += '<label class="control-label">Ciudad: </label> '+registros[i]["Ciudad"]+'<br>';
                           html += '<label class="control-label">Pais: </label> '+registros[i]["Pais"]+'<br>';
                           html += '<label class="control-label">Carrera: </label> '+registros[i]["Carrera"]+'<br>';
                           html += '</div>';
                           html += '</div> </div> </div> </div>';
                        }
                        
                       break;
                   case "fichas":
                       html += '<div class="table-responsive"><table class="table table-condensed">';
                        html += '<thead><tr><td>Autor</td><td>Titulo</td><td>Año</td><td>Ciudad</td><td>Editorial</td></tr></thead>';
                        html += '<tbody>';
                       for(var i = 0 ; i < registros.length; i++){
                            html += '<tr class="sobFi">';
                            html += '<td><form class="form">';
                            html += '<input name="seleccion" type="hidden" value="ficha">';
                            html += '<input name="autor" type="hidden" value="'+registros[i]["Autor"]+'">';
                            html += '<input class="btn-link" type="submit" value="'+registros[i]["Autor"]+'">';
                            html += '</form></td>';
                            html += '<td><form class="form">';
                            html += '<input name="seleccion" type="hidden" value="ficha">';
                            html += '<input name="titulo" type="hidden" value="'+registros[i]["Titulo"]+'">';
                            html += '<input class="btn-link" type="submit" value="'+registros[i]["Titulo"]+'">';
                            html += '</form></td>';
                            html += '<td>';
                            html += '<label>'+registros[i]["Año"]+'</label>';
                            html += '</td>';
                            html += '<td>';
                            html += '<label>'+registros[i]["Ciudad"]+'</label>';
                            html += '</td>';
                            html += '<td><form class="form">';
                            html += '<input name="seleccion" type="hidden" value="ficha">';
                            html += '<input name="editorial" type="hidden" value="'+registros[i]["Editorial"]+'">';
                            html += '<input class="btn-link" type="submit" value="'+registros[i]["Editorial"]+'">';
                            html += '</form></td>';
                            html += '</tr>';
                        }
                        html += '</tbody></table></div>';
                       break;
                   default:
                       for(var i = 0 ; i < registros.length; i++){
                            html += '<div class="row"></div><div class="col-md-3 col-sm-3"></div><div class="col-md-6 col-sm-6 sobre well"><form class="form">';
                            html += '<input name="seleccion" type="hidden" value="'+op+'">';
                            html += '<input name="editorial" type="hidden" value="'+registros[i]["Nombre"]+'">';
                            html += '<center><input class="btn-link" type="submit" value="'+registros[i]["Nombre"]+'"></center>';
                            html += '</form></div></div>';
                        }
                       break;
               }
               
                $("#res").html(html);
           }
        });
    }
    
    function editar(libro){
        $.ajax({
           url : base_url+"index.php/Busqueda/editar",
           type : "POST",
           data : {ed:libro},
           success:function(respuesta){
               var registros = eval(respuesta);
               i=0;
                html = '<input type="hidden" name="id" value="'+registros[i]["idLibros"]+'"><input class="form-control" type="text" name="titulo" value="'+registros[i]["Titulo"]+'" required>';
                fol = '<input class="form-control" type="number" name="folio" value="'+registros[i]["Folio"]+'" required>';
                edic = '<input class="form-control" type="text" name="edicion" value="'+registros[i]["Edicion"]+'" required>';
                isbm = '<input class="form-control" type="number" value="'+registros[i]["ISBM"]+'" disabled required>';
                año = '<input class="form-control" type="number" name="año" value="'+registros[i]["año"]+'" required>';
                img = '<img src="'+base_url+'upload/'+registros[i]["Imagen"]+'" alt="" class="img-rounded img-responsive center-block">';
                img += '<input type="hidden" name="actual" value="'+registros[i]["Imagen"]+'">';
               
                $("#edicion").html(edic);
                $("#tit").html(html);
                $("#fol").html(fol);
                $("#isbm").html(isbm);
                $("#año").html(año);
                $("#actual").html(img);
           }
        });
    }
    
    function reportes(tabla){
        $.ajax({
           url : base_url+"index.php/Usuarios/reporte",
           type : "POST",
           data : {tb:tabla},
           success:function(respuesta){
               var registros = eval(respuesta);
               html = '<div class="table-responsive"><table class="table table-bordered table-condensed table-hover"><thead><tr>';
               for(var i = 0 ; i < registros.length; i++){
                   html += '<td><b>'+registros[i]["COLUMN_NAME"]+'</b></td>';
               }
               html += '</tr></thead><tbody>';
               for( var r=0 ;  r<5 ; r++){
                   html += '<tr>';
                    for(var i = 0 ; i < registros.length; i++){
                        html += '<td>&nbsp</td>';
                    }
                    html += '</tr>';
               }
               html += '</tbody></table></div>';
               
               switch(tabla){
                    case 'autores':
                        des = 'Contiene todos los Autores registrados';
                        break;
                    case 'carreras':
                        des = 'Contiene todas las Carreras registradas';
                        break;
                    case 'ciudades':
                        des = 'Contiene todas las Ciudades registradas';
                        break;
                    case 'editoriales':
                        des = 'Contiene todas las Editoriales registradas';
                        break;
                    case 'entradas':
                        des = 'Contiene el registro de todas las modificaciones';
                        break;
                    case 'fichas':
                        des = 'Contiene las Fichas Bibliograficas';
                        break;
                    case 'libautor':
                        des = 'Contiene un Conteo de Libros por cada Autor';
                        break;
                    case 'libros':
                        des = 'Contiene todos los Libros registrados';
                        break;
                    case 'paises':
                        des = 'Contiene todos los Paises registrados';
                        break;
                    case 'usuarios':
                        des = 'Contiene todos los Usuarios registrados';
                        break;
                    case 'todo':
                        des = 'Contiene toda la Informacion de los Libros registrados';
                        break;
               }
                $("#des").html(des);
                $("#campos").html(html);
           }
        });
    }