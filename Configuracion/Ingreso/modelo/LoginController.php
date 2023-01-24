<?php
require_once ('LoginModel.php');

class LoginController{
    private $model;
    public function __construct(){
        $this->model = new LoginModel();
    }
    public function read_document( $document = '' ){
        return $this->model->read_document($document);
    }
    public function read( $id = '' ){
        return $this->model->read($id);
    }

    public function __destruct(){
        //unset($this);
    }

}