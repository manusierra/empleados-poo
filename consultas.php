<?php

// Enlazamos todos los archivo con clases para poder realizar las instancias.

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
echo "con número de afiliación: " . $datosEmpleado->getNumSS() . ".<br><br>";

// Instancia y ejecución con Empleado asalariado.

$asalariado = new EmpleadoAsalariado($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['salarioSemanal']);
// Sólo se muestra si existe. Probé con isset pero no funcionaba.
if ($_POST['salarioSemanal'] != '') {
    echo "El empleado <em>" . $datosEmpleado->getNombre() . " " . $datosEmpleado->getApellido1() . " </em> percibe un salario semanal de " . $asalariado->getSalarioSemanal() . "€.<br><br>";
}

// Instancia y ejecución con Empleado por horas.

$parcial = new EmpleadoPorHoras($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['sueldoHoras'], $_POST['numeroHoras']);

if (($_POST['sueldoHoras'] != '') && ($_POST['numeroHoras'] != '')) {
    echo "El empleado <em>" . $datosEmpleado->getNombre() . " " . $datosEmpleado->getApellido1() . " </em> percibe un salario de " . $parcial->getSueldoHoras() . "€ por las horas trabajadas.<br><br>";
}

// Instancia y ejecución con Empleado a comisión sobre un sueldo base.

$conComision = new EmpleadoPorComision($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['comision'], $_POST['ventasBrutas']);

$sinComision = new EmpleadoBaseMasComision($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['comision'], $_POST['ventasBrutas'], $_POST['sueldoBase']);

if (($_POST['comision'] != '') && ($_POST['sueldoBase'] != '') && ($_POST['ventasBrutas'] != '')) {
    echo "El empleado <em>" . $datosEmpleado->getNombre() . " " . $datosEmpleado->getApellido1() . " </em> percibe un salario base de " . $sinComision->getSalarioBase() . "€ al que se le suma una comisión de " . $conComision->getComision() * $conComision->getVentasBrutas() . "€.<br><br>";
}
