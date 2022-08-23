<?php

namespace Calculadora;

class Calculadora
{
    private int $valor1;
    private int $valor2;

    /**
     * Set the value of valor1
     *
     * @return  self
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Set the value of valor2
     *
     * @return  self
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get the value of valor1
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Get the value of valor2
     */
    public function getValor2()
    {
        return $this->valor2;
    }


    public function somar($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function subtrair($n1, $n2)
    {
        return $n1 - $n2;
    }

    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }

    public function dividir($n1, $n2)
    {
        if ($n1 <= 0 || $n2 <= 0) {
            return "Não é possivel dividir por 0";
        } else {
            return $n1 / $n2;
        }
    }
}
