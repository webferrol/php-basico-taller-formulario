<?php
// fichero configuración

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

// Validaciones
$errores = '';
if (isset($_POST['btn-enviar'])) {
  //nombre
  $nombre = $_POST['nombre-completo'];
  $nombre = trim($nombre);
  $nombre = htmlspecialchars($nombre);
  if (strlen($nombre) === 0) {
    $errores.='<strong class="error">El campo nombre no puede estar vacío</strong>';
  }

  //correo
  $correo = $_POST['correo'];
  $correo = trim($correo);
  $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
  if (strlen($correo) === 0) {
    $errores.='<strong class="error">El campo correo no puede estar vacío</strong>';
  } else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores.=sprintf('El correo <mark>%s</mark> no es válido',$correo);
  }

  

  // mensaje
  $mensaje = $_POST['mensaje'];
  $mensaje = trim($mensaje);
  $mensaje = htmlspecialchars($mensaje);
  if (strlen($mensaje) === 0) {
    $errores.='<strong class="error">El campo mensaje no puede estar vacío</strong>';
  }

}


// Vistas
require_once('./header.php');
require_once('./form/form-view.php');
require_once('./footer.php');