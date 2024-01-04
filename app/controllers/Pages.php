<?php

class Pages extends Controller
{
    public function index()
    {
    }


    public function navbar(){
        $this->view('pages/navbar');
    }

    public function home(){
        $this->view('pages/home');
    }

    public function cart(){
        $this->view('client/cart');
    }
   
}
?>