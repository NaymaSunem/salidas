<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('MAESTRO',2);
define('ESTUDIANTE',1);
$tipo_usuario = ESTUDIANTE;
$titulo="Nombre de la Pagina";
include("includes/head.php");
include("includes/contenedor.php");
include("includes/lateral.php");
include("includes/encabezado.php");

?>



    <!-- page content -->
    <div class="right_col" role="main">

        </div>
<?php
include("includes/cierre.php");
?>