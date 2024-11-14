<?php
/**
 * PeliculasModelo.php
 * Capa modelo que contiene la interfaz <$db> para gestionar
 * las operaciones de lectura/escritura/eliminación de un recordSet
 * de una tabla en la base de datos.
 * PeliculasModelo.php contiene:
 * i) Define una interfaz para gestionar consultas a una base de datos.
 * ii) getPeliculas() retorna un arreglo con todos los elementos de la tabla.
 * iii) getPelicula() retorna un arreglo de UN recordSet.
 * iv) insertarPelicula() inserta un recordSet y redirige al dashboard.
 * v) modificarPelicula() actualiza un recordSet y redirige al dashboard.
 * vi) borrarPelicula() elimina un recordSet y redirige al dashboard.
 */
class PeliculasModelo
{
  private $db;

  // Constructor que inicializa la conexión a la base de datos
  function __construct()
  {
    $this->db = new MySQLdb(); // Define la interfaz para gestionar la base de datos
  }

  // Retorna un arreglo con todos los elementos de la tabla películas
  public function getPeliculas()
  {
    $data = $this->db->querySelect("SELECT * FROM peliculas");
    return $data;
  }

  // Retorna UN recordSet específico por ID de la tabla películas
  public function getPelicula($id)
  {
    $data = $this->db->querySelect("SELECT * FROM peliculas WHERE id=" . $id);
    return $data;
  }

  // Inserta un nuevo registro en la tabla películas
  public function insertarPelicula($titulo, $director, $genero, $año)
  {
    $sql = "INSERT INTO peliculas (id, titulo, director, genero, año) VALUES (0, "; // 0: ID autoincrementado
    $sql .= "'" . $titulo . "', ";
    $sql .= "'" . $director . "', ";
    $sql .= "'" . $genero . "', ";
    $sql .= "'" . $año . "')";
    
    if ($this->db->queryNoSelect($sql)) {
      header("location:" . RUTA_APP . "peliculas");
      exit();
    } else {
      exit("Error al insertar los datos de la película");
    }
  }

  // Modifica un registro existente en la tabla películas
  public function modificarPelicula($id, $titulo, $director, $genero, $año)
  {
    $sql = "UPDATE peliculas SET ";
    $sql .= "titulo='" . $titulo . "', ";
    $sql .= "director='" . $director . "', ";
    $sql .= "genero='" . $genero . "', ";
    $sql .= "año='" . $año . "' ";
    $sql .= "WHERE id=" . $id;

    if ($this->db->queryNoSelect($sql)) {
      header("location:" . RUTA_APP . "peliculas");
      exit();
    } else {
      exit("Error al modificar los datos de la película");
    }
  }

  // Elimina un registro seleccionado por ID de la tabla películas
  public function borrarPelicula($id)
  {
    $sql = "DELETE FROM peliculas WHERE id=" . $id;

    if ($this->db->queryNoSelect($sql)) {
      header("location:" . RUTA_APP . "peliculas");
      exit();
    } else {
      exit("Error al borrar la película");
    }
  }
}
?>
