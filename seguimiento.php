<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


define('ESTUDIANTE',1);
define('JEFE_DEPARTAMENTO',2);
define('VIGILACIA',3);

$tipo_usuario = ESTUDIANTE;
$titulo="Nombre de la Pagina";
include("includes/head.php");
include("includes/contenedor.php");
include("includes/lateral.php");
include("includes/encabezado.php");

?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Solicitud de Salida</h2>

                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                        <section class="panel">


                            <div class="panel-body">





                                <div class="avatar-view" title="Change the avatar">
                                    <img src="images/picture.jpg" alt="Avatar">
                                </div>


                                <h3>Nayma Sunem</h3>
                                <ul class="list-unstyled user_data">
                                    <li><i class="fa fa-university user-profile-icon"></i>  Ingenieria en Sistemas (7mo)</li>

                                    <li>
                                        <i class="fa fa-credit-card user-profile-icon"></i>  1100172</li>

                                    <li class="m-top-xs">
                                        <i class="fa fa-home"></i>
                                        Externo


                                    </li>
                                </ul>
                                <br>

                                <div class="project_detail">

                                    <p class="title">Destino:</p>
                                    <p>Llavaros</p>
                                    <p class="title">Tipo</p>
                                    <p>Fin de Semana</p>


                                    <p class="title">Detalles</p>
                                    <p>Sale con empleado.</p>
                                </div>

                                <br>


                                <br>

                                <div class="text-center mtop20">
                                    <a href="#" class="btn btn-sm btn-success">Aprovar</a>
                                    <a href="#" class="btn btn-sm btn-danger">No Aprovar</a>
                                </div>
                            </div>

                        </section>

                    </div><div class="col-md-9 col-sm-9 col-xs-12">

                        <ul class="stats-overview">
                            <li>
                                <span class="name">Fecha</span>
                                <span class="value text-success">24/04/2016 - 30/04/2016</span>
                            </li>
                            <li>
                                <span class="name">Hora Salida</span>
                                <span class="value text-success">14:00</span>
                            </li>
                            <li>
                                <span class="name">Hora Entrada</span>
                                <span class="value text-success">18:00</span>
                            </li>
                        </ul>

                        <div class="progress">
                            <div class="progress-bar progress-bar-success" data-transitiongoal="25" aria-valuenow="25" style="width: 25%;"></div>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Departamento</th>
                                <th>Comentario</th>
                                <th>Aprovado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Jefe de Trabajo</td>
                                <td>Exelente Estudiante</td>
                                <td><span class="green glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Cordinador</td>
                                <td>Sin Comentario</td>
                                <td><span class="green glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Finanzas</td>
                                <td>Sin Comentarios</td>
                                <td><span class="green glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Preceptora</td>
                                <td>Sin Comentarios.</td>
                                <td><span class="red glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                            </tr>
                            </tbody>
                        </table>



                        <div>

                            <h4>Comentarios</h4>

                            <!-- end of user messages -->
                            <ul class="messages">
                                <li>
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                    <div class="message_date">
                                        <h3 class="date text-info">24</h3>
                                        <p class="month">May</p>
                                    </div>
                                    <div class="message_wrapper">
                                        <h4 class="heading">Victor Fragoso (Cordinador)</h4>
                                        <blockquote class="message">No miro algun inconveniento mientras entregue su trabajo.</blockquote>
                                        <br>

                                    </div>
                                </li>
                                <li>
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                    <div class="message_date">
                                        <h3 class="date text-error">21</h3>
                                        <p class="month">May</p>
                                    </div>
                                    <div class="message_wrapper">
                                        <h4 class="heading">Ing. Fernando</h4>
                                        <blockquote class="message">Ya lo entrego.</blockquote>
                                        <br>

                                    </div>
                                </li>

                            </ul>
                            <label for="message">Nuevo Comentario :</label><textarea id="message" class="form-control" name="message"></textarea>
                            <!-- end of user messages -->


                        </div>


                    </div>

                    <!-- start project-detail sidebar -->

                    <!-- end project-detail sidebar -->

                </div>
            </div>
        </div>
    </div>
<?php
include("includes/cierre.php");
?>