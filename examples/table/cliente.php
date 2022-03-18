<?php
require_once '../../classes/Table.php';


class Cliente extends Table
{
    protected string $tableName = 'clientes';
    protected string $primaryKey = 'id_cliente';
}



class Contacto extends Table
{
    protected string $tableName = 'contactos';
    protected string  $primaryKey = 'id_contacto';
}