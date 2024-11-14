<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>CRUD de Películas</title>
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP . '/css/estilo.css'; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">

      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Inicio</a></li>
        <li><a href="about.html">Sobre mi</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h1><strong>CRUD de Películas</strong></h1>
    <div class="row">
      <div class="col-md-6">
        <h3>Funcionalidades del CRUD.</h3>
        <p>El sistema de gestión de películas permite a los usuarios realizar operaciones fundamentales en una base de
          datos de películas. Estas incluyen:</p>
        <ol>
          <li><strong>Crear</strong> una nueva entrada con detalles de la película (título, director, año, etc.).</li>
          <li><strong>Leer</strong> y visualizar la lista de películas con sus respectivos atributos.</li>
          <li><strong>Actualizar</strong> la información de una película existente.</li>
          <li><strong>Eliminar</strong> un registro de película de la base de datos.</li>
        </ol>
      </div>
      <div class="col-md-6 relleno">
        <h3>Instrucciones de Instalación.</h3>
        <ol>
          <li>Descarga el proyecto desde el repositorio: <a
              href="https://github.com/miRepositorioGit/crudPeliculas/archive/refs/heads/main.zip">CRUD de Películas</a>
            y descomprime el archivo.</li>
          <li>Copia la carpeta del proyecto en la carpeta <strong>htdocs</strong> de tu instalación de XAMPP.</li>
          <li>Ejecuta XAMPP y asegúrate de iniciar los servicios de Apache y MySQL.</li>
          <li>Entra a <i>phpMyAdmin</i> y crea una base de datos llamada <u><i>peliculas_db</i></u>. Luego, importa el
            archivo <u><i>peliculas.sql</i></u>.</li>
          <li>Abre el navegador y accede a la URL <strong>localhost/CRUD_Peliculas/</strong> para ver la aplicación en
            funcionamiento.</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 relleno2">
        <h2 class="texto1">Detalles Técnicos.</h2>
        <p>Este proyecto utiliza un patrón de diseño de software en capas, lo que facilita el mantenimiento y la
          escalabilidad del código. Las capas principales incluyen:</p>
        <ol type="i">
          <li><strong>Controladores:</strong> gestionan las solicitudes del usuario y dirigen el flujo de datos.</li>
          <li><strong>Modelos:</strong> interactúan con la base de datos y manejan la lógica de negocio.</li>
          <li><strong>Vistas:</strong> presentan la interfaz al usuario.</li>
        </ol>
        <p>El archivo <i>.htaccess</i> se usa para redirigir las solicitudes a la carpeta <strong>/public</strong> y
          para manejar rutas amigables.</p>
      </div>

      <div class="col-md-6">
        <h3>Agregando Películas <a href="sobremi.php">Sobremi </a></h3>
        <p>
        <h3>Soy Arlet Medina, soy la responsable de la creacion de este crud el cual es de una base de datos donde
          ingresas peliculas
          asi mismo creando una tabla y una base para ser evaluada en esta asigantura <i>Desarrollo backend</i>.
          </p>
        </h3>
      </div>
    </div>
  </div>

</body>
<h3> <a href="C:\xampp\htdocs\CRUD_CSS/app/vistas/sobremi.php">Sobre mi</a></h3>

</html>