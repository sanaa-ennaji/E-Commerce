<?php

class Sign extends Controller
{

    public function __construct()
    {
        $this->client = $this->model('Client');
    }

    public function SignIn(){

        $this->view('sign/SignIn');
    }

    public function SignUp(){

        $this->view('sign/SignUp');
    }

    public function ResetPw(){
        $this->view('sign/ResetPw');
    }
}
?>