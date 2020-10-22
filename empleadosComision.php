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

    /**
     * Get the value of comision
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set the value of comision
     *
     * @return  self
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get the value of ventasBrutas
     */
    public function getVentasBrutas()
    {
        return $this->ventasBrutas;
    }

    /**
     * Set the value of ventasBrutas
     *
     * @return  self
     */
    public function setVentasBrutas($ventasBrutas)
    {
        $this->ventasBrutas = $ventasBrutas;

        return $this;
    }
}