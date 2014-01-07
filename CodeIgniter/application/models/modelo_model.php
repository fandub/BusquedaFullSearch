<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
include( "sphinxapi.php" );
 
class Modelo_model extends CI_Model {
 
    public function construct() {
        parent::__construct();
    }
    
     public function querySphinx($query) 
     {
        $cl = new SphinxClient();
		$cl->SetServer( "localhost", 9312 );
		$cl->SetMatchMode( SPH_MATCH_ANY );
        $result = $cl->Query( $query, 'postgres1' );

        // el primer parámetro es la query, es lo que queremos buscar:cumpleaños
        // el segundo parámetro es el index que vamos a usar para buscarlo
        return $result;
    }
}
?>