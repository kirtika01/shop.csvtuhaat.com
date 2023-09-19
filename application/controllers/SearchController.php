<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ProductModel');
    }

    public function index() {
        
        // $keyword = $this->input->get('search');
        // $this->load->model('ProductModel');
        // $data['results'] = $this->ProductModel->searchProducts($keyword);
        // $this->load->view('header',$data);
        // $this->load->view('search_result', $data);
        // $this->load->view('footer',$data);
        $this->load->view('header',$data);
        $this->load->view('autocompleteview', $data);
        $this->load->view('footer',$data);
    }
     
}
