<?php

require_once 'cliente.php';

$cliente = new Cliente();
$contacto = new Contacto();


$lista = $cliente->isNull('altura');
$total = $cliente->$affectedRows;
echo "<h3>Listagendo os Clientes que não têm altura...<br>Total: {$total}</h3>";
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Id</th>";
echo "      <th>Nome</th>";
echo "      <th>Sexo</th>";
echo "      <th>Data de Nascimento</th>";

echo "      <th>Altura</th>";
echo "  </tr>";
foreach ($lista as $cl) {
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

//----------------------------------------------------------------------------------------

$lista = $cliente->isNotNull('altura');
$total = $cliente->$affectedRows;
echo "<h3>Listagem de Clientes que têm altura<br>Total: {$total}</h3>";
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Id</th>";
echo "      <th>Nome</th>";
echo "      <th>Sexo</th>";
echo "      <th>Data de Nascimento</th>";

echo "      <th>Altura</th>";
echo "  </tr>";
foreach ($lista as $cl) {
    echo "  <tr>";
    echo "      <td>{$cl->id_cliente}</td>";
    echo "      <td>{$cl->nome}</td>";
    echo "      <td>{$cl->sexo}</td>";
    echo "      <td>{$cl->data_nasc}</td>";
    
    echo "      <td>{$cl->altura} </td>";
    echo "  </tr>";
}
echo "</table><hr>";