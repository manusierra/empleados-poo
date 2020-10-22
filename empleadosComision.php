<?php

// - La clase EmpleadoPorComision (hereda de Empleado) debe tener una tasa de comisiones y ventas brutas.

include "empleados.php";

?>

<?php

class EmpleadoPorComision extends Empleado
{
    protected $comision;

    protected $ventasBrutas;

    public function __construct($nombre, $apellido1, $numSS, $comision, $ventasBrutas)
    {
        parent::__construct($nombre, $apellido1, $numSS);
        $this->comision = $comision;
        $this->ventasBrutas = $ventasBrutas;
    }

}