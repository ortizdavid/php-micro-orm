<?php
require_once '../../classes/Query.php';

$query1 = new Query();

/*$query1->insert('clientes', [
            'nome' => 'Joana Francisco',
            'sexo' => 'Feminino',
            'data_nasc' => '1991-11-09',
            'altura' => 1.62
            ])
        ->add();

$id = $query1->getLastId();
       
$query1->insert('contactos', [
            'id_cliente' => $query1->getLastId(),
            'telefone' => 928154329,
            'email' => 'joana-0s09@gmail.com'
            ])
        ->add();
*/

//----------------------------------------------------------------
$query2 = new Query();
$nome = "Carlos Fernando";
echo "<h3>Obtendo os Dados do cliente com Nome '{$nome}'</h3>";
$cliente = $query2->select()
                ->from('clientes')
                ->where('nome','=', $nome)
                ->one();
echo "Nome: {$cliente->nome}<br>Sexo: {$cliente->sexo}<br>";   

//--------------------------------------------------------------------
$query3 = new Query();
$id = 1;
echo "<h3>Obtendo os Dados do cliente com Id '{$id}'</h3>";
$cliente = $query3->select()
                ->from('clientes')
                ->where('id_cliente','=', $id)
                ->one();
echo "Nome: {$cliente->nome}<br>Sexo: {$cliente->sexo}";      
echo "<hr>";  

//----------------------------------------------------------
/*$query4 = new Query();
echo "<h3>Obtendo apenas os nomes dos clientes'</h3>";
$nomes = $query4->select('nome as value')
            ->from('clientes')
            ->values();
foreach ($nomes as $nome){
    echo "<li>{$nome}</li>";  
}*/
 
//-----------------------------------------------------------
$query5 = new Query();
echo "<h3>Obtendo apenas as alturas dos clientes'</h3>";
$alturas = $query5->select('altura as value')
                ->from('clientes')
                ->values();
foreach ($alturas as $altura){
    $strAltura = $altura == null ? "__" : $altura;
    echo "<li>{$strAltura} </li>";  
}
echo "<hr>";

//----------------------------------------------------------------
$query6 = new Query();
$altura = 1.72;
$sexo = 'Masculino';
echo "<h3>Actualizando a Altura dos clientes do sexo '{$sexo}', para '{$altura}m'  </h3>";
$query6->update('clientes', ['altura' => $altura], ['sexo'=>$sexo])
      ->edit();
echo "<hr>";

//---------------------------------------------------------------------------
$query7 = new Query();
$id = 6;
echo "<h3>Foi Eliminado o cliente com o Id:'{$id}' </h3>";
$query7->delete('clientes')
       ->where('id_cliente', '=', $id)
       ->remove();
echo "<hr>";

//-----------------------------------------------------------
$query8 = new Query();
$listaClientes = $query8->select()
            ->from('clientes')
            ->all();
$total = count(($listaClientes));               

echo "<h3>Listagem de Clientes<br>Total: {$total}</h3>";
echo "";
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Id</th>";
echo "      <th>Nome</th>";
echo "      <th>Sexo</th>";
echo "      <th>Data de Nascimento</th>";
echo "      <th>Altura</th>";
echo "  </tr>";
foreach ($listaClientes as $cl) {
    echo "  <tr>";
    echo "      <td>{$cl->id_cliente}</td>";
    echo "      <td>{$cl->nome}</td>";
    echo "      <td>{$cl->sexo}</td>";
    echo "      <td>{$cl->data_nasc}</td>";
    echo "      <td>{$cl->altura} </td>";
    echo "  </tr>";
}
echo "</table>";
echo "<p>Colunas Afectadas: {$query8->getAffectedCols()}</p>";
echo "<p>Linhas Afectadas: {$query8->getAffectedRows()}</p>";
echo "<hr><br>";



//------------------------------------------------------------------------
$query8 = new Query();
$listaContactos = $query8->select('nome, telefone, email')
                    ->from('clientes')
                    ->join('contactos', 'contactos.id_cliente=clientes.id_cliente')
                    ->all();

$total = count(($listaContactos));               

echo "<h3>Listagem dos Contactos Clientes<br>Total: {$total}</h3>";
echo "";
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Nome</th>";
echo "      <th>Telefone</th>";
echo "      <th>Email</th>";
echo "  </tr>";
foreach ($listaContactos as $cl) {
    echo "  <tr>";
    echo "      <td>{$cl->nome}</td>";
    echo "      <td>{$cl->telefone}</td>";
    echo "      <td>{$cl->email}</td>";
    echo "  </tr>";
}
echo "</table>";
echo "<p>Colunas Afectadas: {$query8->getAffectedCols()}</p>";
echo "<p>Linhas Afectadas: {$query8->getAffectedRows()}</p>";
echo "<hr><br>";
