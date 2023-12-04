<?php 

class About extends Controller {
    public function __construct(){
        if(!isset($_SESSION['session_login'])){
            header('Location: '. BASEURL .'Login');
        }
    }
    public function index($nama = 'aldo', $pendidikan = 'smk'){
        $data['judul'] = 'about';
        $data['nama'] = $nama ; 
        $data['pendidikan'] = $pendidikan;

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = 'home';

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}


?>