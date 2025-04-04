<?php

require_once 'Controller.php';
require_once 'Models/CuponesModel.php';

 class CuponesController extends Controller{
    private $model;

    function __construct(){

        $this->model= new CuponesModel();
    }

    public function index(){
        
  
        
        $viewBag=[];
        $viewBag['cupones']=$this->model->getCupones();
        $this->render("index.php",$viewBag);
      }
}