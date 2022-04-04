<?php

namespace App\Controllers;
use App\Models\Usuarios;
use App\Models\productosModel;
use App\Libraries\fpdf\FPDF;

class Principal extends BaseController{
  

    public function inicio()
    {   
        echo view('cabecera');
        echo view('login');
    }
    public function registrar(){
        echo view('cabecera');
        echo view('registrar');
    }

    public function guardar(){
        
        $request = service('request');

        $db = \Config\Database::connect();

        $correo = $request->getPost('correo');
        $Usuario = new Usuarios();
        $datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);

        
        $nombre = $request->getPost('nombre');
        $apellido = $request->getPost('apellido');
        $tarjeta = $request->getPost('tarjeta');
        $contra = $request->getPost('contra');

        
        
        if(count($datosUsuario) > 0){
            echo "<script> alert ('ya existe el usuario');</script>";
            echo view('cabecera');
            echo view('login');
            
        }
        else{
        
            $db->query("INSERT INTO `usuarios`(`correo`, `nombre`, `apellido`, `tarjeta`, `password`, `nivel`) VALUES ('$correo','$nombre','$apellido','$tarjeta','$contra', 2)");
                if($db){
                    echo view('cabecera');
                    echo view('login');
                    echo "<script> alert ('Se ha registrado correctamente');</script>";
                    
                }
                else{
                    echo view('cabecera');
                    echo view('login');
                    echo "<script> alert ('El usuario ya xiste');</script>";
                }
        }
        
        
    }

    public function login(){
       $correo = $this->request->getPost('correo');
       $contra = $this->request->getPost('contra');

       $Usuario = new Usuarios();

       $datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);
       
       if(count($datosUsuario) > 0 && $contra === $datosUsuario[0]['password']){
            $nivel = $datosUsuario[0]['nivel'];
            $correo1 = $datosUsuario[0]['correo'];
            $data =[
                "correo" => $datosUsuario[0]['correo'],
                "nombre" => $datosUsuario[0]['nombre'],
                "apellido" => $datosUsuario[0]['apellido'],
                "tarjeta" => $datosUsuario[0]['tarjeta']
            ];
            $session = session();
            $session ->set($data);

            //para mostrar los productos 
            $producto = new productosModel();
            $datos['productos'] = $producto->orderBy('id', 'ASC')->findAll();

            if($nivel === '1'){
                echo view('cabecera', $datos);
                echo view('admin/header', $data);
                echo view('admin/navbar');
            }
            else{
                echo view('cabecera', $datos);
                echo view('usuarios/header', $data);
                echo view('usuarios/body');
                echo view('usuarios/footer');
            }
            
       }
       else{
           echo "<script> alert ('Coloque los datos correctamente');</script>";
           echo view('cabecera');
           echo view('login');
       }
    }

    public function salir(){
        echo view('cabecera');
        echo view('login');
    }


    public function comprar(){
        
        $request = service('request');

        $db = \Config\Database::connect();
        $correo = $_GET['var2'];
        $id = $_GET['var1'];
        
        $usuario = new Usuarios();
        $datosUsuario = $usuario->obtenerUsuario(['correo' => $correo]);

        $producto = new productosModel();
        $datosProducto = $producto->obtenerProducto(['ID' => $id]);
        $data =[
            "correo" => $datosUsuario[0]['correo'],
            "nombreUsuario" => $datosUsuario[0]['nombre'],
            "apellido" => $datosUsuario[0]['apellido'],
            "tarjeta" => $datosUsuario[0]['tarjeta'],
            "ID"    =>$datosProducto[0]['ID'],
            "nombreProducto"    => $datosProducto[0]['NOMBRE'],
            "Precio"    =>$datosProducto[0]['PRECIO'],
            "descripcion"   =>$datosProducto[0]['DESCRIPCION']
        ];        

        echo view('usuarios/header');
        echo view('usuarios/comprar', $data);
        echo view('usuarios/footer');
        
        
        
    }

}
