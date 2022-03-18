<?php
require_once 'cliente.php';

$cliente = new Cliente();
$contacto = new Contacto();



$cliente->insert([
    'nome' => 'Wilson dos Santos',
    'sexo'=> 'Masculino',
    'data_nasc' => '1974-10-09',
    'altura' => 188.9
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 923456789,
    'email' => 'wilson02@gmail.com'
]);

$cliente->insert([
    'nome' => 'Jéssica Lorena',
    'sexo'=> 'Feminino',
    'data_nasc' => '1997-11-02',
    'altura' => 168.9
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 949001256,
    'email' => 'jessica-17@gmail.com'
]);

$cliente->insert([
    'nome' => 'Carlos Fernando',
    'sexo'=> 'Masculino',
    'data_nasc' => '2000-01-08'
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 919875643,
    'email' => 'carlosf@yahoo.com'
]);

$cliente->insert([
    'nome' => 'Hermenegildo Calipa',
    'sexo'=> 'Masculino',
    'data_nasc' => '2001-05-01'
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 990563412,
    'email' => 'hermenegildo@yahoo.com'
]);

$cliente->insert([
    'nome' => 'Lucinda Mesquita',
    'sexo'=> 'Feminino',
    'data_nasc' => '1993-10-10'
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 945139640,
    'email' => 'lucinda@hotmail.com'
]);

$cliente->insert([
    'nome' => 'Rosário Afonso',
    'sexo'=> 'Masculino',
    'data_nasc' => '1981-03-04'
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 938123450,
    'email' => 'afonso2008@hotmail.com'
]);
echo "<hr><br>";


$cliente->insert([
    'nome' => 'Joana Manuel',
    'sexo'=> 'Feminino',
    'data_nasc' => '2001-01-07',
    'altura' => 172.9
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 918123405,
    'email' => 'joana@hotmail.com'
]);

$cliente->insert([
    'nome' => 'Ana Maria',
    'sexo'=> 'Feminino',
    'data_nasc' => '1970-09-08'
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 992874312,
    'email' => 'ana@gmail.com'
]);

$cliente->insert([
    'nome' => 'Ortiz David',
    'sexo'=> 'Masculino',
    'data_nasc' => '1994-10-22'
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 916975061,
    'email' => 'ortizdavid-17@hotmail.com'
]);

$cliente->insert([
    'nome' => 'Maria Francisco',
    'sexo'=> 'Feminino',
    'data_nasc' => '1991-02-03',
]);

$contacto->insert([
    'id_cliente' => $cliente->getLastId(),
    'telefone' => 917003405,
    'email' => 'maria@yahoo.com'
]);

echo "<h2>Registos Inseridos com Sucesso!</h2>";