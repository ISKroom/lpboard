<?php
  class Pages extends Controller {

    function __construct(){
    }

    public function index(){
      $this->view('pages/index');
    }

    public function about(){
      $this->view('pages/about');
    }

    public function access(){
      $this->view('pages/access');
    }


  }




?>
