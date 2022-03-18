<?php
require_once 'cliente.php';

$cliente = new Cliente();
$contacto = new Contacto();


echo "<h3>Eliminando Registos por Id e por Nome...</h3>";
$id = 2;
$cliente->delete($id);
echo "Foi Eliminado o Cliente com Id: {$id}";
echo "<br>";

$nome = "Carlos Fernando";
$cliente->deleteWhere(['nome'=>$nome]);
echo "Foi Eliminado o Cliente com Nome: {$nome}";
echo "<br>";

$nome1 = 'Ana Maria'; $nome2 = 'Ortiz David';
$cliente->deleteMany('nome', [$nome1, $nome2]);
echo "Foram Eliminados 2 Clientes: {$nome1} e {$nome2}";
echo "<hr><br>";

//---------------------------------------------------------------------------------------------------

echo "<h3>Actualizando Registos pelo nome e Pelo Id...</h3>";
$id = 1;
$cliente->update(['data_nasc'=>'2002-04-04'], $id);
echo "Foi Actualizada a Data do Cliente com Id: {$id}<br>";

$id = 2;
$cliente->update(['data_nasc'=>'2000-09-03', 'altura'=>1.99], $id);
echo "Foi Actualizada a Data e Altura do Cliente com Id: {$id}<br>";

$nome = "Carlos Fernando";
$cliente->updateWhere(['data_nasc'=>'1989-01-09', 'sexo'=>'Feminino', 'altura'=>1.78], ['nome' => $nome]);
echo "Foi Actualizada a Data, Altura e o Sexo do Cliente com Nome: {$nome}<br>";
echo "<hr><br>";

echo "<h2>Registos Alterados e Eliminados!</h2>";