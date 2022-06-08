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
    $P_Nombre = $_POST['P_nombre'];
    $S_Nombre = $_POST['S_nombre'];
    $P_Apellido = $_POST['P_apellido'];
    $S_Apellido = $_POST['S_apellido'];
    $Cedula = $_POST['CI'];
    $Date = $_POST['date'];
    $Num_P = $_POST['Num_P'];
    $Num_H = $_POST['Num_H'];
    $email = $_POST['email'];
    $Direc = $_POST['direc'];
    $estado_c = $_POST['estado_c'];
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
                    $query = "INSERT INTO Datos_P (P_nombre, S_nombre, P_apellido, S_apellido, CI ,fecha_n ,email ,Num_P ,Num_H ,Direc, estado_c) VALUES ('$P_Nombre', 
                    '$S_Nombre', '$P_Apellido', '$S_Apellido', '$Cedula', '$Date', '$email', '$Num_P', '$Num_H', '$Direc', '$estado_c')";
                    if($conn->query($query) === TRUE){//Si el dato se encuentra en la base de datos 
                        echo '<script>
                            alert("Datos Personales ingresados");
                            window.location = "../views/datos_f.php";
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