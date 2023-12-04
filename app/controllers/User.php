<?php 

class User extends Controller{
    public function __construct(){
        if(!isset($_SESSION['session_login'])){
            header('Location: '. BASEURL .'Login');
        }
    }
    public function index(){
        $data['judul'] = 'User';
        $data['user'] = $this->model('User_model')->getAllUser();


        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail user';
        $data['user'] = $this->model('User_model')->getUserById($id);


        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }
    public function detailAll(){
        $data['judul'] = 'Detail all user';
        $data = $this->model('User_model')->getAllUser();


        $this->view('templates/header', $data);
        $this->view('user/detailAll', $data);
        $this->view('templates/footer');
    }

    public function getUbah(){
        echo json_encode(
            $this->model('User_model')->getUserById($_POST['id'])
        );
    }

    public function Ubah(){
        var_dump($_POST);
        if($this->model('User_model')->ubahUser($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'User');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'User');
            exit;
        }
    }

    public function insert(){

        if($this->model('User_model')->insertUser($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'User');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'User');
            exit;

        }
    }

    public function delete($id){
        // var_dump($_POST);

        if($this->model('User_model')->deleteUser($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'User');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'User');
            exit;

        }
    }
}


?>