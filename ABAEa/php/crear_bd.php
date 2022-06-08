<?php
function ingresar($conn,$query){
$dato = mysqli_query($conn,$query);
if(!$dato){
var_dump(mysqli_error($conn));
}
}
?>