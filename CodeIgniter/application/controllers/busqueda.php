<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of busqueda
 *
 * @author pperez
 */
class busqueda extends CI_Controller
{
    public function index() {
        $this->load->view('index');
    }
    
    public function query() {
        $this->load->library('sphinxsearch');
        $buscar = $this->input->post('query');
        $result = $this->sphinxsearch->query($buscar);
        $this->load->view('resultados', $result);
    }
}
