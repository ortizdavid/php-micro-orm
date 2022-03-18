<?php
require_once 'cliente.php';

$cliente = new Cliente();
$contacto = new Contacto();


echo "<h3>Buscando Registos por Nome e por Sexo...</h3>";
$param = 'm';
$busca = $cliente->search(['nome'=>$param]);
$total = count($busca);
echo "Busca o Nome dos Clientes que o nome contém <b>'{$param}'</b><br>Resultados Encontrados: {$total}<br>";
foreach ($busca as $cl) {
   echo "Nome: {$cl->nome}<br>";
}
echo "<br><br>";

$param = 'Masculino';
$busca = $cliente->search(['sexo'=>$param]);
$total = count($busca);
echo "Busca o Nome e Data dos Clientes do Sexo <b>'{$param}'</b><br>Resultados Encontrados: {$total}<br>";
foreach ($busca as $cl) {
   echo "Nome: {$cl->nome} -- {$cl->data_nasc}<br>";
}
echo "<hr><br>";

//--------------------------------------------------------------------------------------------------------

$sexo = "Feminino";
echo "<h3>Listando apenas os de Clientes do Sexo '{$sexo}' ...<br>Total: {$cliente->countWhere('sexo', $sexo)}</h3>";
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Id</th>";
echo "      <th>Nome</th>";
echo "      <th>Sexo</th>";
echo "      <th>Data de Nascimento</th>";

echo "      <th>Altura</th>";
echo "  </tr>";
foreach ($cliente->only(['sexo'=> $sexo]) as $cl) {
    echo "  <tr>";
    echo "      <td>{$cl->id_cliente}</td>";
    echo "      <td>{$cl->nome}</td>";
    echo "      <td>{$cl->sexo}</td>";
    echo "      <td>{$cl->data_nasc}</td>";
    echo "      <td>{$cl->altura} </td>";
    echo "  </tr>";
}
echo "</table>";
echo "<hr><br>";

//----------------------------------------------------------------------------

$nome = "Carlos Fernando";
echo "<h3>Listando todos os Clientes Excepto '{$nome}' ...<br>Total: {$cliente->countExcept('nome', $nome)}</h3>";
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Id</th>";
echo "      <th>Nome</th>";
echo "      <th>Sexo</th>";
echo "      <th>Data de Nascimento</th>";
echo "      <th>Altura</th>";
echo "  </tr>";
foreach ($cliente->except(['nome'=>$nome]) as $cl) {
    echo "  <tr>";
    echo "      <td>{$cl->id_cliente}</td>";
    echo "      <td>{$cl->nome}</td>";
    echo "      <td>{$cl->sexo}</td>";
    echo "      <td>{$cl->data_nasc}</td>";
    
    echo "      <td>{$cl->altura} </td>";
    echo "  </tr>";
}
echo "</table>";
echo "<hr><br>";

