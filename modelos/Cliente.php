<?php
require_once 'Conexion.php';

//CREACIÓN CLASE Cliente (herencia de Conexion)
class Cliente extends Conexion{
    public $cliente_id;
    public $cliente_nombre;
    public $cliente_apellido;
    public $cliente_nit;
    public $cliente_telefono;
    public $cliente_situacion;


    public function __construct($args = [])
    {
        $this->cliente_id = $args['cliente_id'] ?? null;
        $this->cliente_nombre = $args['cliente_nombre'] ?? '';
        $this->cliente_apellido = $args['cliente_apellido'] ?? '';
        $this->cliente_nit = $args['cliente_nit'] ?? '';
        $this->cliente_telefono = $args['cliente_telefono'] ?? '';
        $this->cliente_situacion = $args['cli_sientetuacion'] ?? 1;
    }

    // METODO PARA INSERTAR
    public function guardar(){
        $sql = "INSERT into clientes (cliente_nombre, cliente_apellido, cliente_nit, cliente_telefono) values ('$this->cliente_nombre','$this->cliente_apellido','$this->cliente_nit','$this->cliente_telefono')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }
    
    // METODO PARA CONSULTAR

    public static function buscarTodos(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM clientes where cliente_situacion = 1 ";
        $resultado = self::servir($sql);
        return $resultado;
    }

    public function buscar(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM clientes where cliente_situacion = 1 ";

        if($this->cliente_nombre != ''){
            $sql .= " AND cliente_nombre like '%$this->cliente_nombre%' ";
        }
        if($this->cliente_apellido != ''){
            $sql .= " AND cliente_apellido like '%$this->cliente_apellido%' ";
        }
        if($this->cliente_nit != ''){
            $sql .= " AND cliente_nit like '%$this->cliente_nit%' ";
        }
        if($this->cliente_telefono != ''){
            $sql .= " AND cliente_telefono like '%$this->cliente_telefono%' ";
        }
        $resultado = self::servir($sql);
        return $resultado;
    }
}