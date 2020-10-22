<?php

// - La clase EmpleadoAsalariado (hereda de Empleado) debe tener un salario semanal.

include "empleados.php";
?>

<?php

class EmpleadoAsalariado extends Empleado
{
    protected $salarioSemanal;

    public function __construct($nombre, $apellido1, $numSS, $salarioSemanal)
    {
        parent::__construct($nombre, $apellido1, $numSS);
        $this->salarioSemanal = $salarioSemanal;
    }

}
