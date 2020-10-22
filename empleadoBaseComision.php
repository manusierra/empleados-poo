<?php

// - La clase EmpleadoBaseMasComision (hereda de EmpleadoPorComisión) debe tener un salario base.

?>

<?php

class EmpleadoBaseMasComision extends EmpleadoPorComision
{
    protected $salarioBase; // Atributo exclusivo de esta clase.

    public function __construct($nombre, $apellido1, $numSS, $comision, $ventasBrutas, $salarioBase)
    {
        parent::__construct($nombre, $apellido1, $numSS, $comision, $ventasBrutas); // Importamos propiedades de las clases padre.
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
