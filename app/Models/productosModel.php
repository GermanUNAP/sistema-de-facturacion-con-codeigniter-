<?php

namespace App\Models;

use CodeIgniter\Model;

class productosModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['NOMBRE','IMAGEN','PRECIO', 'DESCRIPCION'];
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('productos');
    }
    

    public function obtenerProductos() {
        $Usuario = $this->db-get('productos');
        if($usuario->num_rows()>0){
            return $query;
        }
        else{
            return false;
        }
    }

	public function obtenerProducto($data) {
        $Producto = $this->db->table('productos');
        $Producto->where($data);
        return $Producto->get()->getResultArray();
    }
 
	public function insert_data($data) {
		if($this->db->table($this->table)->insert($data))
			{
				return $this->db->insertID();
			}
			else
			{
				return false;
			}
		}
	function borrar(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('emp');
		return $result;
	}


}