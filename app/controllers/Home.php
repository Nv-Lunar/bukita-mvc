<?php 

class Home extends Controller{
    public function __construct(){
        if(!isset($_SESSION['session_login'])){
            header('Location: '. BASEURL .'login');
        }
    }
    public function index(){
        $data['judul'] = 'Home'; 

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}

?>