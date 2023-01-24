<?php
require_once('modelo.php');

class LoginModel extends Model {
    public $id;
    public $nombre;
    public $apellido;
    public $documento;

    function __construct(){
        $this->db_name = 'tic';
    }

    public function read($id = ''){
        $this->query = ($id != '')
        ? "SELECT * FROM persona WHERE id = '$id'" 
        : "SELECT *,roles.descripcion as roles, roles.id as id_rol, persona.id as id_persona FROM persona
        INNER JOIN roles on persona.rol = roles.id;";

        $this->get_query();

        $this->rows;
        //var_dump($this->rows);
        $num_rows = count($this->rows);
        //echo $num_rows;
        $data = array();
        
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
            //$data[$key] = $value;
        }
        return $data;
    }
    
    public function read_document($documento = ''){
        $this->query = ($documento != '')
        ? "SELECT * FROM persona WHERE documento = '$documento'" 
        : "SELECT *,roles.descripcion as roles, roles.id as id_rol, persona.id as id_persona FROM persona
        INNER JOIN roles on persona.rol = roles.id; ";

        $this->get_query();

        $this->rows;
        //var_dump($this->rows);
        $num_rows = count($this->rows);
        //echo $num_rows;
        $data = array();
        
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
            //$data[$key] = $value;
        }
        return $data;
    }
    
    public function __destruct() {
       //unset($this);
    }
}