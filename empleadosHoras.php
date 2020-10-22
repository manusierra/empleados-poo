<?php

// - La clase EmpleadoPorHoras (hereda de Empleado) debe tener un sueldo y el número de horas trabajadas.

?>

<?php

class EmpleadoPorHoras extends Empleado
{
    // Atributos exclusivos de esta subclase.

    protected $sueldoHoras;

    protected $horasTrab;

    public function __construct($nombre, $apellido1, $numSS, $sueldoHoras, $horasTrab)
    {
        parent::__construct($nombre, $apellido1, $numSS); //importamos atributos de la clase padre.
        $this->sueldoHoras = $sueldoHoras;
        $this->horasTrab = $horasTrab;
    }

    /**
     * Get the value of sueldoHoras
     */
    public function getSueldoHoras()
    {
        return $this->sueldoHoras;
    }

    /**
     * Set the value of sueldoHoras
     *
     * @return  self
     */
    public function setSueldoHoras($sueldoHoras)
    {
        $this->sueldoHoras = $sueldoHoras;

        return $this;
    }

    /**
     * Get the value of horasTrab
     */
    public function getHorasTrab()
    {
        return $this->horasTrab;
    }

    /**
     * Set the value of horasTrab
     *
     * @return  self
     */
    public function setHorasTrab($horasTrab)
    {
        $this->horasTrab = $horasTrab;

        return $this;
    }
}