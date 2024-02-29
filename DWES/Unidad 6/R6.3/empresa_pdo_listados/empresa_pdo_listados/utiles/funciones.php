<?php
	
/**
 * FUNCIONES DE VALIDACIÓN
 */

	/*
    * Función que devuelve el valor del campo recibido como párametro
    * @param {string} $campo - Nombre del campo a comprobar en el REQUEST
    * @param {string} $valor - Valor del campo recibido como parámetro
    */
    function obtenerValorCampo(string $campo): string{
        // Comprobamos si nos llega el nombre del campo en el REQUEST
        if (!isset($_REQUEST[$campo])) 
        {
          $valor = "";
        } 
        else 
        {
          // Limpiamos el campo de etiquetas y espacios
          $valor = trim(strip_tags($_REQUEST[$campo]));
        }
        return $valor;
    }

function conectarPDO( string $host, string $user, string $password, string $bbdd){
  try{
    $mysql="mysql:host=$host;bdname=$bbdd; charset=utf8";
    //crear database
    $conexion= new PDO($mysql, $user, $password);

    //config modo error
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    exit($e->getMessage());
  }
}
function resultadoConsulta(PDO $conex, string $consulta){
  try{
    $resultado=$conex->query($consulta);
    return $resultado;
  }
  catch(PDOException $exception){
    //mensaje de error
    $exception->getMessage();
    //borrar datos y desconectar.
    $resultado=null;
    $conex=null;
  }
}
/**
 * FIN FUNCIONES DE VALIDACIÓN
 */


/**
 * FUNCIONES TRABAJAR CON BBDD
 */
	




/**
 * FIN FUNCIONES TRABAJAR CON BBDD
 */

	
?>