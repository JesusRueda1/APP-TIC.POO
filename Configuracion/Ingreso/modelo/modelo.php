<?php
//Conectar a MySQL
abstract class Model{
    //Atrubutos
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    //private static $db_name = 'tic'; /* se puede usar en una clase hija */
    protected $db_name; /* se puede usar en una clase hija */
    private static $db_charset = 'utf8';
    private $conn;
    protected $query; 
    protected $rows = array();

    //Métodos
    //Métodos abstractos para CRUD de clases que hereden
    abstract protected function read();
    abstract protected function read_document();

    //método privado para conectarse a la bd
    private function db_open(){
        $this->conn = new mysqli(
            self::$db_host,
            self::$db_user,
            self::$db_pass,
            $this->db_name
        );
        $this->conn->set_charset(self::$db_charset);
    }
    //método privado para desconectarse de la bd
    private function db_close(){
        $this->conn->close();
    }

    //establcer un query simple(INSERT,DELETE o UPDATE)
    protected function set_query(){
        $this->db_open();
        $this->conn->query($this->query);
        $this->db_close();
    }

    //Obtener datos de un query(SELECT) en array
    protected function get_query(){
        $this->db_open();

        $result = $this->conn->query($this->query);
        while( $this->rows[] = $result->fetch_assoc()  );
        $result->close();
        
        $this->db_close();
    
        return array_pop($this->rows);
    }

}