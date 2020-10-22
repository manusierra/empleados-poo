<?php

// - La clase EmpleadoBaseMasComision (hereda de EmpleadoPorComisión) debe tener un salario base.

include "empleadosComision.php";

?>

<?php

class EmpleadoBaseMasComision extends EmpleadoPorComision
{
    protected $salarioBase;

    public function __construct($nombre, $apellido1, $numSS, $comision, $ventasBrutas, $salarioBase)
    {
        parent::__construct($nombre, $apellido1, $numSS, $comision, $ventasBrutas);
        $this->salarioBase = $salarioBase;
    }

}