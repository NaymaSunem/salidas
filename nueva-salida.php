<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$titulo="Nuevas Salidas";
include("includes/head.php");
include("includes/contenedor.php");
include("includes/lateral.php");
include("includes/encabezado.php");

?>



            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Solicitud de salida</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_content">

                                    <div class="row">

                                         <div class="clearfix"></div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Nueva salida <small>different form elements</small></h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <br>
                                                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="nombre" required="required" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Apellido: <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="matricula" class="control-label col-md-3 col-sm-3 col-xs-12">Matrícula</label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input id="matricula" class="form-control col-md-7 col-xs-12" type="text" name="matricula">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de salida</label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div id="tipo-salida" class="btn-group" data-toggle="buttons">
                                                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                        <input type="radio" name="tipo-salida" value="dia"> &nbsp; Día &nbsp;
                                                                    </label>
                                                                    <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                        <input type="radio" name="tipo-salida" value="fin" checked=""> Fin de semana
                                                                    </label>
                                                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                    <input type="radio" name="tipo-salida" value="vacaciones"> &nbsp; Vacaciones &nbsp;
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha-salida">Fecha de salida: <span class="required">*</span>
                                                            </label>

                                                            <fieldset>
                                                                <div class="control-group">
                                                                    <div class="controls">
                                                                        <div class="col-md-8 xdisplay_inputx form-group has-feedback">
                                                                            <input type="text" class="form-control has-feedback-left" id="fecha-salida" placeholder="03/06/16" aria-describedby="inputSuccess2Status3">
                                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                                            <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>


                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha-entrada">Fecha de entrada: <span class="required">*</span>
                                                            </label>

                                                            <fieldset>
                                                                <div class="control-group">
                                                                    <div class="controls">
                                                                        <div class="col-md-8 xdisplay_inputx form-group has-feedback">
                                                                            <input type="text" class="form-control has-feedback-left" id="fecha-entrada" placeholder="03/06/16" aria-describedby="inputSuccess2Status3">
                                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                                            <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>



                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora-salida">Hora de salida: <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="hora-salida" required="required" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora-entrada">Hora de entrada: <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="hora-entrada" required="required" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="destino">Destino <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="destino" required="required" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comentarios">Comentarios <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="comentarios" required="required" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>


                                                        <div class="ln_solid"></div>
                                                        <div class="form-group">
                                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                                <button type="submit" class="btn btn-success">Enviar</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                      </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
include("includes/cierre.php");
?>