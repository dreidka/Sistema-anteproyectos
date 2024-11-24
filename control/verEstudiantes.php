<?php
require("../model/Conexion.php");

$con = new Conexion();



if (isset($_POST["submit"])) {
    //Director
    $IdDirector = htmlspecialchars($_POST["IdDirector"]);
    $nombreDirector = htmlspecialchars($_POST["director"]);
    $director = $con->insertDirector($IdDirector,$nombreDirector);

    //Proyecto
    $nombreProyecto = htmlspecialchars($_POST["nombreProyecto"]);
    $tipoProyecto = htmlspecialchars($_POST["tipo_proyecto"]);
    $idProyecto = $con->numeroProyectos();
    $descripcionProyecto = htmlspecialchars($_POST["descripcionProyecto"]);
    $duracionProyecto = htmlspecialchars($_POST["duracion"]);
    $IdDirector = htmlspecialchars($_POST["IdDirector"]);
    $entregablesProyecto = htmlspecialchars($_POST["entregable"]);
    $proyecto = $con->insertProyecto($idProyecto,$nombreProyecto,$descripcionProyecto,$entregablesProyecto,$duracionProyecto,$tipoProyecto,$IdDirector);

    //Estudiantes
    $nombre = htmlspecialchars($_POST["nombre"]);
    $apellido = htmlspecialchars($_POST["apellido"]);
    $carrera = htmlspecialchars($_POST["carrera"]);
    $codigo = htmlspecialchars($_POST["codigo"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $usuarios = $con->insertEstudiantes($nombre,$apellido,$carrera,$codigo,$idProyecto,$telefono,$correo);
    echo $usuarios;

    if(htmlspecialchars($_POST["nombre2"]) != null && htmlspecialchars($_POST["apellido2"]) != null && htmlspecialchars($_POST["codigo2"])){
        $nombre2 = htmlspecialchars($_POST["nombre2"]);
        $apellido2 = htmlspecialchars($_POST["apellido2"]);
        $codigo2 = htmlspecialchars($_POST["codigo2"]);
        $telefono2 = htmlspecialchars($_POST["telefono2"]);
        $correo2 = htmlspecialchars($_POST["correo2"]);
        $usuarios2 = $con->insertEstudiantes($nombre2,$apellido2,$carrera,$codigo2,$proyecto,$telefono2,$correo2);
        echo $usuarios2;
    }
    

    
    

}


?>