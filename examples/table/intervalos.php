<?php 
require_once 'cliente.php';

$cliente = new Cliente();
$contacto = new Contacto();


//-------------------------------------------------------------------------------------------------
$data1 = '1950-01-01';
$data2 = '1986-12-31';
$lista = $cliente->between('data_nasc', $data1, $data2);
$total = $cliente->getAffectedRows();
echo "<h3>Listagem de Clientes que nasceram entre '{$data1}' e '{$data2}'<br>Total: {$total}</h3>";
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
//----------------------------------------------------------------------------

$data1 = '1950-01-01';
$data2 = '1986-12-31';
$lista = $cliente->notBetween('data_nasc', $data1, $data2);
$total = $cliente->getAffectedRows();
echo "<h3>Listando os Clientes que não nasceram entre '{$data1}' e '{$data2}' ...<br>Total: {$total}</h3>";
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
echo "<hr></br>";