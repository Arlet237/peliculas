<!DOCTYPE html>
<html>
<head>
  <title>Eliminar una película</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP . "peliculas/borrar/"; ?>' method="POST">
    <table>
      <tr>
        <td><label for="titulo">Título:</label></td>
        <td><input type="text" name="titulo" disabled="disabled" value="<?php print $data['titulo']; ?>"></td>
      </tr>
      <tr>
        <td><label for="director">Director:</label></td>
        <td><input type="text" name="director" disabled="disabled" value="<?php print $data['director']; ?>"></td>
      </tr>
      <tr>
        <td><label for="genero">Género:</label></td>
        <td><input type="text" name="genero" disabled="disabled" value="<?php print $data['genero']; ?>"></td>
      </tr>
      <tr>
        <td><label for="año">Año:</label></td>
        <td><input type="number" name="año" disabled="disabled" value="<?php print $data['año']; ?>"></td>
      </tr>
      <tr>
        <td><input type="hidden" value="<?php print $data['id']; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
    <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>
  </form>
  <a href='<?php print RUTA_APP . "peliculas/"; ?>'>Regresar</a>
</body>
</html>
