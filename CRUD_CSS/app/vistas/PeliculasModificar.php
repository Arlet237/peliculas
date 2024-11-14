<!DOCTYPE html>
<html>
<head>
  <title>Modificar una película</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP . "peliculas/modificar/"; ?>' method="POST">
    <table>
      <tr>
        <td><label for="titulo">Título:</label></td>
        <td><input type="text" name="titulo" value="<?php print $data['titulo']; ?>"></td>
      </tr>
      <tr>
        <td><label for="director">Director:</label></td>
        <td><input type="text" name="director" value="<?php print $data['director']; ?>"></td>
      </tr>
      <tr>
        <td><label for="genero">Género:</label></td>
        <td><input type="text" name="genero" value="<?php print $data['genero']; ?>"></td>
      </tr>
      <tr>
        <td><label for="año">Año:</label></td>
        <td><input type="number" name="año" value="<?php print $data['año']; ?>" min="1888" max="<?php echo date('Y'); ?>"></td>
      </tr>
      <tr>
        <td><input type="hidden" value="<?php print $data['id']; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  <a href='<?php print RUTA_APP . "peliculas/"; ?>'>Regresar</a>
</body>
</html>
