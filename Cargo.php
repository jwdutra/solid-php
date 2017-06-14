<?php

class Cargo
{

    private $regra;

    public function __construct(RegraDeCalculo $regra)
    {
        $this->regra = $regra;
    }

    /**
     *
     * @return the $regra
     */
    public function getRegra()
    {
        return $this->regra;
    }
}

