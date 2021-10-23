<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="https://edimaldonado.000webhostapp.com/">Sitio de login</a>
  <?php
  exit();
}
}

?>