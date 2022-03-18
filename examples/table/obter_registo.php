<?php 
require_once 'cliente.php';

$cliente = new Cliente();
$contacto = new Contacto();


echo "<h3>Obtendo o Primeiro, Médio e o Último Registo...</h3>";

$obj = $cliente->first();
echo "Dados Cliente primeiro Cliente:<br>";
echo "Id: {$obj->id_cliente}<br>Nome: {$obj->nome}<br>Sexo: {$obj->sexo}<br>Data de Nascimento: {$obj->data_nasc}";
echo "<br><br>";

$obj = $cliente->middle();
echo "Dados Cliente Cliente do Meio:<br>";
echo "Id: {$obj->id_cliente}<br>Nome: {$obj->nome}<br>Sexo: {$obj->sexo}<br>Data de Nascimento: {$obj->data_nasc}";
echo "<br><br>";

$obj = $cliente->last();
echo "Dados Cliente último Cliente:<br>";
echo "Id: {$obj->id_cliente}<br>Nome: {$obj->nome}<br>Sexo: {$obj->sexo}<br>Data de Nascimento: {$obj->data_nasc}";
echo "<hr><br>";


echo "<h3>Obtendo Registos pelo Nome e pelo Id...</h3>";
$id = 5;
$obj = $cliente->find($id);
echo "Dados Cliente com Id: {$id}<br>";
echo "Nome: {$obj->nome}<br>Sexo: {$obj->sexo}<br>Data de Nascimento: {$obj->data_nasc}";
echo "<br><br>";

$nome = "Carlos Fernando";
$obj = $cliente->uniqueField('nome', $nome);
echo "Dados Cliente com Nome: {$nome}<br>";
echo "Id: {$obj->id_cliente}<br>Sexo: {$obj->sexo}<br>Data de Nascimento: {$obj->data_nasc}";
echo "<hr><br>";
