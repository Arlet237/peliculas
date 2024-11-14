<?php
/**
 * Peliculas
 */
class Peliculas extends Controlador
{
  private $modelo;

  // Constructor que define un objeto para acceder a los métodos de PeliculasModelo
  function __construct()
  {
    $this->modelo = $this->modelo("PeliculasModelo");
  }

  // Retorna todas las películas y las muestra en el dashboard
  public function index()
  {
    $data = $this->modelo->getPeliculas();
    $this->vista("PeliculasVista", $data);
  }

  // Modifica una película existente, usando datos enviados por POST
  public function modificar($id = "")
  {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $id = isset($_POST["id"]) ? $_POST["id"] : "";
      $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
      $director = isset($_POST["director"]) ? $_POST["director"] : "";
      $genero = isset($_POST["genero"]) ? $_POST["genero"] : "";
      $año = isset($_POST["año"]) ? $_POST["año"] : "";

      $this->modelo->modificarPelicula($id, $titulo, $director, $genero, $año);
    } else {
      $data = $this->modelo->getPelicula($id);
      $datos = [
        "id" => $id,
        "titulo" => $data[0]["titulo"],
        "director" => $data[0]["director"],
        "genero" => $data[0]["genero"],
        "año" => $data[0]["año"]
      ];
      $this->vista("PeliculasModificar", $datos);
    }
  }

  // Elimina una película seleccionada
  public function borrar($id = "")
  {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $id = isset($_POST["id"]) ? $_POST["id"] : "";
      $this->modelo->borrarPelicula($id);
    } else {
      $data = $this->modelo->getPelicula($id);
      $datos = [
        "id" => $id,
        "titulo" => $data[0]["titulo"],
        "director" => $data[0]["director"],
        "genero" => $data[0]["genero"],
        "año" => $data[0]["año"]
      ];
      $this->vista("PeliculasBorrar", $datos);
    }
  }

  // Agrega una nueva película
  public function alta()
  {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
      $director = isset($_POST["director"]) ? $_POST["director"] : "";
      $genero = isset($_POST["genero"]) ? $_POST["genero"] : "";
      $año = isset($_POST["año"]) ? $_POST["año"] : "";

      $this->modelo->insertarPelicula($titulo, $director, $genero, $año);
    } else {
      $this->vista("PeliculasAlta");
    }
  }

  public function info()
  {
    $this->vista("InfoVistas");
  }

}
?>
