<?php
require_once 'cliente.php';

$cliente = new Cliente();
$contacto = new Contacto();


echo "<h3>Listando todos os Clientes <br>Total: {$cliente->count()}</h3>";
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Id</th>";
echo "      <th>Nome</th>";
echo "      <th>Sexo</th>";
echo "      <th>Data de Nascimento</th>";
echo "      <th>Altura</th>";
echo "  </tr>";
foreach ($cliente->findAll() as $cl) {
    echo "  <tr>";
    echo "      <td>{$cl->id_cliente}</td>";
    echo "      <td>{$cl->nome}</td>";
    echo "      <td>{$cl->sexo}</td>";
    echo "      <td>{$cl->data_nasc}</td>";
    echo "      <td>{$cl->altura} </td>";
    echo "  </tr>";
}
echo "</table>";
echo "<p>Colunas Afectadas: {$cliente->getAffectedCols()}</p>";
echo "<p>Linhas Afectadas: {$cliente->getAffectedRows()}</p>";
echo "<hr><br>";

//----------------------------------------------------------------------------------------

echo "<h3>Listando os Clientes Ordenados por Nome... <br>Total: {$cliente->count()}</h3>";
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Id</th>";
echo "      <th>Nome</th>";
echo "      <th>Sexo</th>";
echo "      <th>Data de Nascimento</th>";
echo "      <th>Altura</th>";
echo "  </tr>";
foreach ($cliente->orderBy('nome') as $cl) {
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