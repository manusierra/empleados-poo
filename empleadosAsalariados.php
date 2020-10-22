<?php

// - La clase EmpleadoAsalariado (hereda de Empleado) debe tener un salario semanal.

class EmpleadoAsalariado extends Empleado
{
    protected $salarioSemanal;

    public function __construct($nombre, $apellido1, $numSS, $salarioSemanal)
    {
        parent::__construct($nombre, $apellido1, $numSS);
        $this->salarioSemanal = $salarioSemanal;
    }

    /**
     * Get the value of salarioSemanal
     */
    public function getSalarioSemanal()
    {
        return $this->salarioSemanal;
    }

    /**
     * Set the value of salarioSemanal
     *
     * @return  self
     */
    public function setSalarioSemanal($salarioSemanal)
    {
        $this->salarioSemanal = $salarioSemanal;

        return $this;
    }
}

// $test2 = new EmpleadoAsalariado($_POST['numSS']);
// echo $test2->getSalarioSemanal();
