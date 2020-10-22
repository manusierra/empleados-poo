<?php

// - La clase EmpleadoBaseMasComision (hereda de EmpleadoPorComisión) debe tener un salario base.

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

    /**
     * Get the value of salarioBase
     */
    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    /**
     * Set the value of salarioBase
     *
     * @return  self
     */
    public function setSalarioBase($salarioBase)
    {
        $this->salarioBase = $salarioBase;

        return $this;
    }
}

// $atest = new EmpleadosBaseMascomision($_POST['nombre'], $_POST['apellido'], $_POST['numSS'], $_POST['comision'], $_POST['ventasBrutas'], $_POST['sueldoBase']);