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
        $cl->SetLimits(0,1);
        $cl->SetMaxQueryTime(500);
        $cl->setArrayResult(false);
		$cl->SetMatchMode( SPH_MATCH_ANY );
        $result = $cl->Query( $query, 'postgres1' );

        if ( $result === false )
        {
            echo "Query failed: " . $cl->GetLastError() . ".\n";
        }
        else 
        {
            if ( $cl->GetLastWarning() ) 
            {
                echo "WARNING: " . $cl->GetLastWarning() . " ";
            }
            if ( ! empty($result["matches"]) ) 
            {
                foreach ( $result["matches"] as $doc => $docinfo ) 
                {
                    echo "$doc\n";
                }
                print_r( $result );
            }
        }
        exit;
    }
}
?>