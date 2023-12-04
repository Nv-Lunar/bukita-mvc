<?php 

class Login extends Controller {
    public function index(){
        $data['judul'] = 'Login';

        $this->view('templates/Login', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }
    public function userLogin(){
        if($this->model('User_model')->Login($_POST) > 0){
			$_SESSION['session_login'] = true; 
            header('Location: ' . BASEURL . 'Home');
            exit;
        }else{
            header('Location: ' . BASEURL . 'Login');
            exit;
        }
    }
}


?>