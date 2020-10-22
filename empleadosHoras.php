<?php

// - La clase EmpleadoPorHoras (hereda de Empleado) debe tener un sueldo y el número de horas trabajadas.

include "empleados.php";
?>

<?php

class EmpleadoAsalariado extends Empleado
{
    protected $sueldoHoras;

    protected $horasTrab;

    public function __construct($nombre, $apellido1, $numSS, $sueldoHoras, $horasTrab)
    {
        parent::__construct($nombre, $apellido1, $numSS);
        $this->sueldoHoras = $sueldoHoras;
        $this->horasTrab = $horasTrab;
    }

}