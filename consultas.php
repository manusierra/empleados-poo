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
echo "con número de afiliación: " . $datosEmpleado->getNumSS() . ".<br><br>";

// Instancia y ejecución con Empleado asalariado.

$asalariado = new EmpleadoAsalariado($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['salarioSemanal']);

if (isset($_POST['salarioSemanal'])) {
    echo "El empleado <em>" . $datosEmpleado->getNombre() . " " . $datosEmpleado->getApellido1() . " </em> percibe un salario semanal de " . $asalariado->getSalarioSemanal() . "€.<br><br>";
} else {
    echo " ";
}

// Instancia y ejecución con Empleado por horas.

$parcial = new EmpleadoPorHoras($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['sueldoHoras'], $_POST['numeroHoras']);

if (isset($_POST['sueldoHoras']) && isset($_POST['numeroHoras'])) {
    echo "El empleado <em>" . $datosEmpleado->getNombre() . " " . $datosEmpleado->getApellido1() . " </em> percibe un salario de " . $parcial->getSueldoHoras() . "€ por las horas trabajadas.<br><br>";
} else {
    echo " ";
}

// Instancia y ejecución con Empleado a comisión sobre un sueldo base.

$conComision = new EmpleadoPorComision($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['comision'], $_POST['ventasBrutas']);

$sinComision = new EmpleadoBaseMasComision($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['comision'], $_POST['ventasBrutas'], $_POST['sueldoBase']);

if (isset($_POST['comision']) && isset($_POST['sueldoBase'])) {
    echo "El empleado <em>" . $datosEmpleado->getNombre() . " " . $datosEmpleado->getApellido1() . " </em> percibe un salario base de " . $sinComision->getSalarioBase() . "€ al que se le suma una comisión de " . $conComision->getComision() * $conComision->getVentasBrutas() . "€.<br><br>";
} else {
    echo " ";
}
