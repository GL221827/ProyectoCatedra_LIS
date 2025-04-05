<?php
require_once 'Controller.php';
require_once 'Models/UsuariosModel.php';

class UsuariosController extends Controller{
    private $model;


    function __construct(){
        $this->model= new UsuariosModel();
    }

   
    public function createUser(){
        $this->render('newUser.php');
        //echo "<h1>Aqui se mostrara el fomulario para crear user</h1>";
    }

    

    //Metodo para insertar usuarios en la BD y registrarlos
    public function registerUser() {
        
        if (isset($_POST)) {
    
            $viewBag=array();// almacena el mensaje de error si el registro falla.

            $usuario['nombre']= $_POST['nombre'];
            $usuario['apellido']= $_POST['apellido'];
            $usuario['telefono']= $_POST['telefono'];
            $usuario['correo']= $_POST['correo'];
            $usuario['direccion']= $_POST['direccion'];
            $usuario['DUI']= $_POST['DUI'];
            $usuario['contra']= hash('sha512', $_POST['contra']); // se hashea aqui la contraseña para que cuando la ingrese se encripte en la base
            $usuario['id_tipo_usuario'] = 1; //Por default todos los usuarios que se registren por el momento seran tipo 1 o sea "Clientes" con acceso a la interfaz publica
    


            $resultado = $this->model->insertUser($usuario);

            //con la variable definida arriba se verifica que los campos no esten vacios, y se redirecciona a la pagina para verificar la cuenta
            if(empty($resultado)){
                $viewBag['error']='Debe de llenar todos los campos';
                $this->render('newUser.php',$viewBag);
            }
            else{
                $this->render("verifyUser.php");
            }
           
         }
    }


    //Metodo para que el usuario verifique su cuenta
    public function verifyAccount(){
        $this->render('verifyUser.php')
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



        
    

}