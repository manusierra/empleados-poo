<?php

// Cree las siguientes clases:

// - La clase Empleado debe tener un primer nombre, apellido paterno y número de seguro social.
// - La clase EmpleadoAsalariado (hereda de Empleado) debe tener un salario semanal.
// - La clase EmpleadoPorHoras (hereda de Empleado) debe tener un sueldo y el número de horas trabajadas.
// - La clase EmpleadoPorComision (hereda de Empleado) debe tener una tasa de comisiones y ventas brutas.
// - La clase EmpleadoBaseMasComision (hereda de EmpleadoPorComisión) debe tener un salario base.
// - Cada clase debe tener los constructores apropiados, los métodos establecer y obtener.

// Escriba un programa que cree instancias de objetos de cada una de estas clases, y que muestre toda la información asociada con cada objeto (incluyendo la información heredada)

// Establecemos la clase padre 'Empleado'.

class Empleado// Superclase.

{
    // Propiedades de la superclase
    public $nombre;
    public $apellido1;
    public $numSS;

    // Construimos la superclase.
    public function __construct($nombre, $apellido1, $numSS)
    {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->numSS = $numSS;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido1
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set the value of apellido1
     *
     * @return  self
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get the value of numSS
     */
    public function getNumSS()
    {
        return $this->numSS;
    }

    /**
     * Set the value of numSS
     *
     * @return  self
     */
    public function setNumSS($numSS)
    {
        $this->numSS = $numSS;

        return $this;
    }

}
// Comprobaciones rutinarias.
// $test = new Empleado($_POST['nombre'], $_POST['apellido'], $_POST['numSS']);

// echo $test->getNombre();
// echo $test->getApellido1();
// echo $test->getNumSS();
