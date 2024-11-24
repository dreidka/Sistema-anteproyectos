<?php

    class Conexion{
        private $conn;

        public function __construct(){
            $this->conn = new mysqli('localhost', 'root', '', 'monitorias');
        }

        public function numeroProyectos(){
            $query = $this->conn->query("SELECT COUNT(*) AS total FROM estudiante");
            if($query->num_rows>0){
                $row = $query->fetch_assoc();
                $totalRegistros = $row["total"];
                echo "Numero total de registros: " . $totalRegistros;
                
            }
            $totalRegistros=$totalRegistros+1;
            return $totalRegistros;
        }
        public function insertEstudiantes($nombre,$apellido,$carrera,$codigo,$idProyecto,$telefono,$correo){
            $query = $this->conn->query("INSERT INTO `estudiante`(`idEstudiante`, `Nombre`, `Apellido`, `Carrera`, `Telefono`, `Correo`, `Proyecto_idProyecto`) VALUES ('$codigo','$nombre','$apellido','$carrera','$telefono','$correo','$idProyecto')");
            if($query === true){
                $mensaje = "<h5 class='text-success text-center'> Tu registro fue exitoso </h5>";    
            }else{
                $mensaje = "<h5 class='text-success text-center'> Tu registro fue erroneo </h5>";    
            }
            return $mensaje;
        }
        public function insertProyecto($idProyecto,$nombre,$descripcion,$entregables,$duracion,$tipoProyecto,$idDirector){
            $query = $this->conn->query("INSERT INTO `proyecto`(`idProyecto`,`Nombre`, `Descripcion`, `Entregables`, `Duracion`, `Tipo_Proyecto_idTipo_Proyecto`, `Director_idDirector`) VALUES ('$idProyecto','$nombre','$descripcion','$entregables','$duracion','$tipoProyecto','$idDirector')");
            if($query === true){
                $mensaje = "<h5 class='text-success text-center'> Tu registro fue exitoso </h5>";    
            }else{
                $mensaje = "<h5 class='text-success text-center'> Tu registro fue erroneo </h5>";    
            }
            return $mensaje;
        }
        public function insertDirector($idDirector,$nombreDirector){
            $query = $this->conn->query("INSERT INTO director (idDirector,Nombre) VALUES ('$idDirector','$nombreDirector')");
            if($query === true){
                $mensaje = "<h5 class='text-success text-center'> Tu registro fue exitoso </h5>";    
            }else{
                $mensaje = "<h5 class='text-success text-center'> Tu registro fue erroneo </h5>";    
            }
            return $mensaje;
        }
    }
?>
