<?php

namespace App\Controllers;

class Login extends BaseController{
    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }
    public function index()
    {
        echo view('login');
    }
    function auth(){
        $correo = $this->input->post('correo',TRUE);
        $contra = $this->intpu->post('contra',TRUE);
        $result = $this->Login_Model->check_user($correo, $contra);
        if($result->num_rows() > 0){
            $data = $result->row_arrary();
            $correo = $data['correo'];
            $nombre = $data['nombre'];
            $apellido = $data['apellido'];
            $tarjeta = $data['tarjeta'];
            $level = $data['level'];
            $sesdata = array(
                'correo'    =>$correo,
                'nombre'    =>$nombre,
                'apellido'  =>$apellido,
                'tarjeta'   =>$tarjeta;
                'level'     =>$level,
                'logged_in' =>TRUE
            ;)
            $this->session->set_userdata($sestada);
            
        }
    }
}
