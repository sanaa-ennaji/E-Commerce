<?php

session_start();
class Sign extends Controller
{

    // private $ServiceClient;

    public function __construct()
    {
        $this->User = $this->model('User');
        $this->Client = $this->model('Client');
        $this->ServiceUser = new ServiceUser;
        $this->ServiceClient = new ServiceClient;
    }

    public function SignIn(){

        $this->view('sign/SignIn');
    }

    public function SignInMethode(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if ($this->ServiceUser->findUserByEmail($_POST['Email'])){
                $this->ServiceUser->authenticate($_POST['Email'], $_POST['Password']);
            }
        }
    }

    public function SignUp(){
        $this->view('sign/SignUp');
    }

    public function SignUpMethode(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            if ($this->ServiceUser->findUserByEmail($_POST['Email'])){
                echo '<script>alert("Email already exists")</script>';
            } else {
                $this->Client->Name = $_POST['Name'];
                $this->Client->Email = $_POST['Email'];
                $this->Client->Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
                $this->Client->Adresse = $_POST['Adresse'];
                $this->ServiceClient->add($this->Client);

            }
        }
    }

    public function ResetPw(){
        $this->view('sign/ResetPw');
    }
}
?>