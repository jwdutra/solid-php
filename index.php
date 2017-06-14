<?php

function carregaClasse($classe) {
    require_once $classe.".php";
}

spl_autoload_register("carregaClasse");

$regra = new DezOuVintePorcento(); 
$des = new Desenvolvedor($regra);
$dev = new Funcionario($des, 3100);

//$dev->setSalario(3100);

//$dev->setCargo(new Desenvolvedor(new DezOuVintePorcento()));

$calculadora = new CalculadoraDeSalario();

echo $calculadora->calcula($dev);