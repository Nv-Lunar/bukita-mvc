<?php 

class Buku_model{
    private $table = 'buku';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function upload(){

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        
        //cek apakah ada gambar yang di upload
        if($error === 4){
            echo
            "<script>
            alert('pilih gambar dulu !');
            </script>";
            return false ;
        }
        //cek yang di upload gambar/bukan
        $ekstensiGambarValid = ['jpg', 'png','jpeg'];
        $ekstensiGambar = explode('.',$namaFile) ;
        $ekstensiGambar = strtolower(end($ekstensiGambar)) ;
        
        if( !in_array($ekstensiGambar,$ekstensiGambarValid)){
            echo "<script>
            alert('yang anda upload bukan gambar !');
            </script>";
            return false ;
        }
        //cek jika ukuran besar
        if($ukuranFile > 100000000000){
            echo
            "<script>
            alert('ukuran file terlalu besar !')
            </script>";
            return false ;
        }
        
        //lolos pengecekan, gambar siap di upload
        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.'; 
        $namaFileBaru .= $ekstensiGambar; 
        
        move_uploaded_file($tmpName, BASEURL . 'dist/img' . $namaFileBaru);
        return $namaFileBaru ;
        }
    
    //ingat tambahkan spasi setelah from agar frof dan table tdk menyatu('... FROMBuku')
    public function getAllBuku(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->singel();
    }

    //karena jika id diisi dgn null karena jika menggunakan '' karena akan dianggap sebagai str
    //jika ingin mengosonginya harus menggunakan null
    public function insertBuku($data){
        // $gambar = $data['gambar'];
        // $upload= $this->upload()->$gambar;
        $query = "INSERT INTO buku(id, judul, penerbit, pengarang, tahun, kategori_id, harga) VALUES(
            null,
            :judul,
            :penerbit,
            :pengarang,
            :tahun,
            :kategori_id,
            :harga
        )";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBuku($id){
        $delete = "DELETE FROM buku WHERE id=:id";
        $this->db->query($delete);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahBuku($data){
        
        $query = "UPDATE buku SET
        judul = :judul,
        penerbit = :penerbit,
        pengarang = :pengarang,
        tahun = :tahun,
        kategori_id = :kategori_id,
        harga = :harga
        WHERE id = :id
    ";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();

        return $this->db->rowCount();
    }

}

?>