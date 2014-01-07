
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador extends CI_Controller {
	public function __construct(){  
        parent::__construct();
	}
	public function index()
	{
		$this->load->view('vista');
	}
    public function querySphinx()
    {
        $this->load->model('Modelo_model');
        $busqueda = $this->input->post('query', true);
        $query = $this->Modelo_model->querySphinx($busqueda);
        echo var_dump($busqueda);
        echo var_dump($query);
        
            
    }
}
