<main class="container">
  <h1 class="title">Enviar mensaje</h1>
  <form method="post">
    <div class="field">
      <label for="nombre-completo">
        Nombre completo <span class="required">*</span>
      </label>
      <input value="<?=$_POST['nombre-completo']??''?>" name="nombre-completo" placeholder="Pepito de los palotes" id="nombre-completo" type="text">
    </div>
    <div class="field">
      <label for="correo">
        Correo electrónico <span class="required">*</span>
      </label>
      <input
        value="<?=$_POST['correo']??''?>"
        name="correo" placeholder="pepitos@palotes.com" id="correo" type="text">
    </div>
    <div class="field">
      <label for="mensaje">
        Mensaje <span class="required">*</span>
      </label>
      <textarea name="mensaje" placeholder="Mi mensaje" id="mensaje"><?=$_POST['mensaje']??''?></textarea>
    </div>
    <div class="field">
      
    <input
     <?=(isset($_POST['politica-privacidad']) && $_POST['politica-privacidad']==="ok")?'checked':''?>
     name="politica-privacidad" id="politica-privacidad" type="checkbox" value="ok">
      <label for="politica-privacidad">
        Acepto la política de privacidad
      </label>
    </div>
    <?=$errores ? $errores : ''?>
    <button name="btn-enviar">Enviar</button>
  </form>
</main>
