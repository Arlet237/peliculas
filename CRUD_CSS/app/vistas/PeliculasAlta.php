<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta una película</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP . '/img/boo.png'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP . '/css/style.css'; ?>">
</head>
<body>
  <h1>Dar de alta una película</h1>
  <fieldset>
    <form action='<?php print RUTA_APP . "peliculas/alta/"; ?>' method="POST">
      <table>
        <tr>
          <td><label for="titulo">Título:</label></td>
          <td class="cien"><input type="text" name="titulo" required></td>
        </tr>
        <tr>
          <td><label for="director">Director:</label></td>
          <td class="cien"><input type="text" name="director" required></td>
        </tr>
        <tr>
          <td><label for="genero">Género:</label></td>
          <td class="cien"><input type="text" name="genero" required></td>
        </tr>
        <tr>
          <td><label for="año">Año:</label></td>
          <td class="cien"><input type="number" name="año" min="1888" max="<?php echo date('Y'); ?>" required></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" value="Enviar"></td>
        </tr>
      </table>
    </form>
  </fieldset>
  <a href='<?php print RUTA_APP . "peliculas/"; ?>'>Regresar</a>
</body>
</html>
