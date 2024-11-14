<!DOCTYPE html> <!-- dashBoard -->
<html>
<head>
  <title>Lista de películas</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP . '/img/boo.png'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP . '/css/mein.css'; ?>">
</head>
<body>
  <h1>Películas</h1>
  <table>
    <thead>
      <th>ID</th>
      <th>Título</th>
      <th>Director</th>
      <th>Género</th>
      <th>Año</th>
      <th>Modificar</th>
      <th>Borrar</th>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($data); $i++) {
        print "<tr>";
        print "<td>" . $data[$i]['id'] . "</td>";
        print "<td>" . $data[$i]['titulo'] . "</td>";
        print "<td>" . $data[$i]['director'] . "</td>";
        print "<td>" . $data[$i]['genero'] . "</td>";
        print "<td>" . $data[$i]['año'] . "</td>";
        print "<td><a href='" . RUTA_APP . "peliculas/modificar/" . $data[$i]['id'] . "'>Modificar</a></td>";
        print "<td><a href='" . RUTA_APP . "peliculas/borrar/" . $data[$i]['id'] . "'>Borrar</a></td>";
        print "</tr>";
      }
      ?>
    </tbody>
  </table>
  <br>
  <a href='<?php print RUTA_APP . "peliculas/alta/"; ?>'>Dar de alta una película</a>
</body>
<footer><a href="public/info.php"></a></footer>
</html>
