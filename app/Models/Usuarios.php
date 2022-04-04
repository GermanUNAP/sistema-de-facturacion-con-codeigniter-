<?php
namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model{

    protected $table = 'usuarios';
    protected $primaryKey = 'correo';
    protected $allowedFields = ['nombre','apellido','tarjeta', 'nivel'];
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('usuarios');
    }

    public function obtenerUsuario($data) {
        $Usuario = $this->db->table('usuarios');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }
    
    
}