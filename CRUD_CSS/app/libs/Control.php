<?php
/**
 * Clase que controla todo el flujo
 */
class Control {
  protected $controlador = "Peliculas"; // Cambiado de 'Libros' a 'Peliculas'
  protected $metodo = "index";
  protected $parametros = [];

  function __construct() {
    $url = $this->separarURL();

    // Verificamos si el controlador existe
    if ($url != "" && file_exists("../app/controladores/" . ucwords($url[0]) . ".php")) {
      $this->controlador = ucwords($url[0]);
      unset($url[0]);
    }

    require_once("../app/controladores/" . ucwords($this->controlador) . ".php");
    $this->controlador = new $this->controlador;

    /*** Iniciamos el método ***/
    if (isset($url[1])) {
      if (method_exists($this->controlador, $url[1])) {
        $this->metodo = $url[1];
        unset($url[1]);
      }
    }

    // Definimos los parámetros
    $this->parametros = $url ? array_values($url) : [];

    // Llamamos al método del controlador con sus parámetros
    call_user_func_array(
      [$this->controlador, $this->metodo], 
      $this->parametros
    );
  }

  // Método que separa la URL en partes
  private function separarURL() {
    $url = "";
    if (isset($_GET["url"])) {
      // Eliminamos la última diagonal y limpiamos la URL
      $url = rtrim($_GET["url"], "/");
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode("/", $url);
    }
    return $url;
  }
}
?>
