<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Permiso de salidas!</span></a>
        </div>
        <div class="clearfix"></div>


        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="http://mp3navojoa.org/2014/images/audifonos.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenida,</span>
                <h2>Nayma Sunem </h2>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <?php if($tipo_usuario==ESTUDIANTE){?>
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Menú <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.php">Nueva salida</a>
                            </li>
                            <li><a href="index2.html">Seguimiento de salida</a>
                            </li>
                            <li><a href="index3.html">Historial de salida</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php } ?>
                <?php if($tipo_usuario==MAESTRO){?>
                <h3>Maestros</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Menú <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.php">Nueva salida</a>
                            </li>
                            <li><a href="index2.html">Autorizar Salida</a>
                            </li>
                            <li><a href="index3.html">Ver Historial</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php } ?>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>