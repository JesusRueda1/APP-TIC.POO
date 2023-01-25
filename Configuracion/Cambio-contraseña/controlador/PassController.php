<?php
require_once ('../modelo/PassModel.php');


class PassController{
    private $model;
    public function __construct(){
        $this->model = new PassModel();
    }
    public function create( $data = array() ){
        return $this->model->create($data);
    }
    public function read( $id = '' ){
        return $this->model->read($id);
    }
    public function update( $data_update = array() ){
        return $this->model->update($data_update);

    }
    public function delete( $id_delete = '' ){
        return $this->model->delete($id_delete);

    }
    public function __destruct(){
        //unset($this);
    }

}