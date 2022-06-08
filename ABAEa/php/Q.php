<?php
    require('../fpdf/fpdf.php');
    class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../Img/ABAE.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->Cell(150,10,utf8_decode('Agencia Bolivariana para Actividades Espaciales'));
    // Salto de línea
    $this->Ln(10);
    $this->Cell(40);
    $this->Cell(120,10,utf8_decode('Dirección de Ciencia, Formación y Desarrollo'));
    // Salto de línea
    $this->Ln(10);
    $this->Cell(40);
    $this->Cell(160,10,utf8_decode('Formulario Personal que Regresa de Comisión de Estudios'));
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
}
}
require 'conexiones.php';
$sql="SELECT * FROM datos_p";
$resultado = $mysqli->query($sql);
$sql="SELECT * FROM datos_f";
$resultado1 = $mysqli->query($sql);
$sql="SELECT * FROM datos_m";
$resultado2 = $mysqli->query($sql);
//$sql="SELECT * FROM datos_a";
//$resultado3 = $mysqli->query($sql);
//$sql="SELECT * FROM estud_ad";
//$resultado4 = $mysqli->query($sql);
//$sql="SELECT * FROM adicional";
//$resultado5 = $mysqli->query($sql);

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(186,10,utf8_decode('Datos Personales'),0,0,'C');
    $pdf->Ln(20);
    $pdf->SetFont('Arial','I',12);
    while($row = $resultado->fetch_assoc()){
        $pdf->Cell(60,10,utf8_decode('Nombres'),1,0);
        $pdf->cell(60, 10, $row['P_nombre'],1,0,0);
        $pdf->cell(60, 10, $row['S_nombre'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Apellidos'),1,0);
        $pdf->cell(60, 10, $row['P_apellido'],1,0,0);
        $pdf->cell(60, 10, $row['S_apellido'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Cedula'),1,0);
        $pdf->cell(120, 10, $row['CI'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Correo'),1,0);
        $pdf->cell(120, 10, $row['email'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Fecha de Nacimiento'),1,0);
        $pdf->cell(120, 10, $row['fecha_n'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Numero Personal'),1,0);
        $pdf->cell(120, 10, $row['Num_P'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Numero de Habitación'),1,0);
        $pdf->cell(120, 10, $row['Num_H'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Dirección'),1,0);
        $pdf->cell(120, 10, $row['Direc'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Estado Civil'),1,0);
        $pdf->cell(120, 10, $row['estado_c'],1,0,0);
        $pdf->Ln(20);
    }
    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(186,10,utf8_decode('Datos Familiares'),0,0,'C');
    $pdf->Ln(20);
    $pdf->SetFont('Arial','I',12);
    while($row = $resultado1->fetch_assoc()){
        $pdf->Cell(60,10,utf8_decode('¿Tiene HIjos?'),1,0);
        $pdf->cell(120, 10, $row['Hijos'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('¿Cuantos?'),1,0);
        $pdf->cell(120, 10, $row['C_Hijo'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('¿Posee alguna carga familiar?'),1,0);
        $pdf->cell(120, 10, $row['Car_fam'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('¿Cuantos?'),1,0);
        $pdf->cell(120, 10, $row['C_Carfam'],1,0,0);
        $pdf->Ln(50);
    }

    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(186,10,utf8_decode('Datos Militares'),0,0,'C');
    $pdf->Ln(20);
    $pdf->SetFont('Arial','I',12);
    while($row = $resultado2->fetch_assoc()){
        $pdf->Cell(60,10,utf8_decode('Grado Militar'),1,0);
        $pdf->cell(120, 10, $row['Grado'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(80,10,utf8_decode('Oficial de Comando/Técnico/Asimilado'),1,0);
        $pdf->cell(100, 10, $row['Oficial'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Componente'),1,0);
        $pdf->cell(120, 10, $row['Componente'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Fecha de Graduación'),1,0);
        $pdf->cell(120, 10, $row['fecha_g'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Ultima fecha de ascenso'),1,0);
        $pdf->cell(120, 10, $row['fecha_ua'],1,0,0);
        $pdf->Ln(10);
        $pdf->Cell(60,10,utf8_decode('Proxima Fecha de ascenso'),1,0);
        $pdf->cell(120, 10, $row['fecha_pa'],1,0,0);
        $pdf->Ln(20);
    }
    $pdf->Output();
?>