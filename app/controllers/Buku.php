<?php 
class Buku extends Controller{
    public function __construct(){
        if(!isset($_SESSION['session_login'])){
            header('Location: '. BASEURL .'Login');
        }
    }
    public function index(){
        $data['judul'] = 'Buku';
        $data['Buku'] = $this->model('Buku_model')->getAllBuku();


        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    public function detail(){
        $data['judul'] = 'Detail Buku';
        $data['Buku'] = $this->model('Buku_model')->getAllBuku();


        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }

    public function insert(){
        var_dump($_POST);

        if($this->model('Buku_model')->insertBuku($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'Buku');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'Buku');
            exit;

        }
    }
    public function delete($id){
        // var_dump($_POST);

        if($this->model('Buku_model')->deleteBuku($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'Buku');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'Buku');
            exit;

        }
    }

    public function getUbah(){
        echo json_encode(
            $this->model('Buku_model')->getBukuById($_POST['id'])
        );
    }

    public function ubah(){
        if($this->model('Buku_model')->ubahBuku($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'Buku');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'Buku');
            exit;
        }
    }
}

?>