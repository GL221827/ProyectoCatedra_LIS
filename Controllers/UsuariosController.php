<?php
require_once 'Controller.php';
require_once 'Models/UsuariosModel.php';

class UsuariosController extends Controller{
    private $model;


    function __construct(){
        $this->model= new UsuariosModel();
    }

   
    public function createUser(){
        $this->render("newUser.php");
        //echo "<h1>Aqui se mostrara el fomulario para crear user</h1>";
    }

    //Metodo para que el usuario verifique su cuenta
    public function verifyAccount(){
        $this->render("verifyUser.php");
        //echo "<h1>Aqui se mostrara form para verificar cuenta</h1>";
    }


    //Metodo para abrir el formulario de login
    public function login(){
        $this->render("loginUser.php");
    }


    //Metodo para verificar que las credenciales esten en la BD
    public function check_user(){
        $viewBag=array();
        $correo=$_POST['correo'];
        $contra=$_POST['contra'];
        $result=$this->model->validateLogin($correo,$contra);

        //si los espacios estan vacios se redirecciona a login de nuevo
        if(empty($result)){
            $viewBag['error']='Correo o contraseña incorrecta';
            $this->render('loginUser.php',$viewBag);
        }
        else{
            //antes de redireccionar hay que iniciar las variables de sesion para se 
            // almacene la info del user antes de entrar a la pgina
            $_SESSION['correo']=$correo;
            $_SESSION['id_tipo_usuario']=$result[0]['id_tipo_usuario'];
            header('location:'.PATH.'/Cupones');

    }
}

    //Metodo para cerrar sesion
    public function logout(){

    }

//Metodo de prueba para insertar usuarios en la BD
    public function insert(){
        

       if(isset($_POST)){
        
        $usuario['Nombre']=$_POST['Nombre'];
        $usuario['Apellido']=$_POST['Apellido'];
        $usuario['Telefono']=$_POST['Telefono'];
        $usuario['Correo']=$_POST['Correo'];
        $usuario['Direccion']=$_POST['Direccion'];
        $usuario['DUI']=$_POST['DUI'];
        $usuario['Contrasena']=$_POST['Contrasena'];
       
        
        echo $this->model->insert($usuario);

       }
       
        var_dump($usuario);

        
    }
}