<?php

extract($_POST);

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fullName = trim($fullName);
  $fullName = htmlspecialchars($fullName);
  if (!strlen($fullName)) $error .= '<strong class="error">El campo <mark>Nombre Completo</mark> no puede estar vacío</strong>';

  // email
  $email = trim($email);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  $validate_email = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
  if (!strlen($email)) $error .= '<strong class="error">El campo <mark>Correo</mark> no puede estar vacío</strong>';
  else if (!$validate_email) $error .= sprintf('<strong class="error">El <mark>Correo</mark> "%s" no es válido</strong>', $email);

  // message
  $message = trim($message);
  $message = htmlspecialchars($message);
  if (!strlen($message)) $error .= '<strong class="error">El campo <mark>Mensage</mark> no puede estar vacío</strong>';

  // message
  if (!isset($privacyPolicy)) $error .= '<strong class="error">El campo <mark>Política de Privacidad</mark> no puede estar vacío</strong>';
}


if (!$error && isset($privacyPolicy)) {
  // mail()

  // In case any of our lines are larger than 70 characters, we should use wordwrap()
  // https://www.php.net/manual/en/function.mail.php
  $message = wordwrap($message, 70, "\r\n");
  // Send
  mail($email, 'Correo Prueba de'.$fullName, $message);
  header('Location: index.php?send=true');
}



require_once('./form-template.php');
