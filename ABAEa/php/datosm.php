<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "ABAEa";
  
    $conn = new mysqli($server, $user, $password, $db);

    $tipo = "Insert";
   //$tipo = $_POST ['Select'];//Declara el tipo de instruccion
    //$tipo = $_POST ['Update'];
    //$tipo = "Delete";
    $Grado = $_POST['Grado'];
    $Oficial = $_POST['Oficial'];
    $Componente = $_POST['Componente'];
    $date_g = $_POST['date_g'];
    $date_ua = $_POST['date_ua'];
    $date_pa = $_POST['date_pa'];
    
    //$update = "PRUEBA MODIFICADA"; //Declara el valor modificado
    $estatus= "FALSE"; //Valor booleano para delete*/
    
    switch($tipo){ //analiza el tipo de instruccion 
        case "Select": //en caso de que sea Select
            {
                if($conn->connect_error == null){//Si la conexion con la base de datos es exitosa
                    $query = "SELECT * FROM ".$tabla;//Realiza la sinaxis de la sentencia DML
                    $dato = $conn->query($query);//Guarda el dato que esta consultando
                    echo "Esta es tu consulta: ";
                    echo json_encode($dato);//muestra el dato al usuario
                } 
            }
            break;
        case "Insert"://en caso de que sea Insert
        {
                if($conn->connect_error == null){//Si la conexion con la base de datos es exitosa
                    $query = "INSERT INTO Datos_m (Grado, Oficial, fecha_g, fecha_ua, fecha_pa, Componente) VALUES ('$Grado', '$Oficial', '$date_g', '$date_ua', '$date_pa', '$Componente')";
                    if($conn->query($query) === TRUE){//Si el dato se encuentra en la base de datos 
                        echo '<script>
                            alert("Datos MIlitares Ingresados");
                            window.location = "../views/datos_a.php";
                        </script>";';
                    }else{
                        echo '<script>
                        alert("Usuario duplicado no se puede hacer el registro.");
                        window.location = "datos_p.php";
                    </script>";';                    }
                }
        }
        break;
        case "Update"://en caso de que sea Update
        {
            if($conn->connect_error == null){//Si la conexion con la base de datos es exitosa
                $query = "UPDATE estudiante SET nombre= $nombre WHERE id='".$id."'";//Realiza la sinaxis de la sentencia DML
                if($conn->query($query) === TRUE){//Si el dato se encuentra en la base de datos 
                    echo "Se modifico el dato con exito!";//Sele avisa al usuario que lo modifico bien
                }else{
                    echo "Fallo la insercion del dato: ";//si no se modifico correctamente tambien se le avisa al usuario
                    echo $conn->error;
                }
            }
        } 
        break;
        case "Delete": //en caso de que sea Delete
        {
            var_dump("$_POST");
            if($conn->connect_error == null){//Si la conexion con la base de datos es exitosa
                $query = "UPDATE estudiante SET estatus=$estatus WHERE id='".$id."'";//Realiza la sinaxis de la sentencia DML
                var_dump("$query");
                if($conn->query($query) === TRUE){
                    echo "Se elimino el dato con exito!";
                    header('Location:usuarios_admin.php');
                }else{
                    echo "Fallo la eliminacion del dato: ";
                    echo $conn->error;
                }
            }
        }
        break;
    }
?>