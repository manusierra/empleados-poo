<?php

include "empleados.php";
include "empleadosAsalariados.php";
include "empleadosHoras.php";
include "empleadosComision.php";
include "empleadoBaseComision.php";

// Instancia y ejecución con Empleado.

$datosEmpleado = new Empleado($_POST['nombre'], $_POST['apellido'], $_POST['numSS']);

echo "<h3>Datos Empleado: </h3><br>";
echo "<em>" . $datosEmpleado->getNombre() . "</em> ";
echo "<em>" . $datosEmpleado->getApellido1() . "</em> ";
echo "con número de afiliación: " . $datosEmpleado->getNumSS() . ".";
