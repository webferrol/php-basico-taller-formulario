<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="src/assets/academic-cap.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <link rel="stylesheet" href="src/assets/style.css">
  <script src="src/scripts/favicon.js"></script>
  <title>Enviar mensaje</title>
</head>
<body>
  <main class="container">
    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
      <h1 class="title">Enviar mensaje</h1>
      <div class="field">
        <label for="full-name">Nombre completo <span class="info" role="mark">*</span></label>
        <input type="text" id="full-name" name="fullName" placeholder="Pepito de los palotes" value="<?=$fullName??'';?>">
      </div>
      <div class="field">
        <label for="email">Correo electrónico <span class="info" role="mark">*</span></label>
        <input type="text" id="email" name="email" placeholder="pepitos@palotes.com" value="<?=$email??''?>">
      </div>
      <div class="field">
        <label for="message">Mensaje <span class="info" role="mark">*</span></label>
        <textarea id="message" name="message" cols="50" placeholder="Mi mensaje"><?=$message??''?></textarea>
      </div>
      <div class="field">
        <label><input <?=isset($privacyPolicy) ? 'checked' : ''?> type="checkbox" name="privacyPolicy"> Acepto la política de privacidad <span class="info" role="mark">*</span></label>
      </div>
      <button class="btn">Enviar</button>
      <?=$error?>
      <?=isset($_GET['send']) ? '<strong>Enviado</strong>' : ''?>
    </form>
  </main>
</body>
</html>