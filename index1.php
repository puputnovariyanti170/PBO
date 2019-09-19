<?php

class Mahasiswa{
    //*class Mahasiswa adalah untuk membuat class mahasiswa baru*//

    public $nim, $nama, $prodi, $asalsma;
    //untuk menentukan variabel//
    public function __construct($nim = "NIM", $nama = "Nama", $prodi = "Prodi", $asalsma = "Asal SMA" ){
        // menentukan variabel pada function this//
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->asalsma = $asalsma;
    }
    public function getInfoMahasiswa(){

        $mhs = "NAMA : {$this->nama}, NIM : {$this->nim}, Prodi : {$this->prodi}, Asal SMA : {$this->asalsma}";

        return $mhs;
        // muntuk menampilkan 
    }
}

class MahasiswaStrataSatu extends Mahasiswa {

    public function getInfoMahasiswa(){
        $mhs = "Mahasiswa S1 :<br> ".parent ::getInfoMahasiswa();
        return $mhs;
    }
}

class MahasiswaStrataDua extends Mahasiswa{
    
    public $asalS1;
    public function __construct($nim, $nama, $prodi, $asalsma, $asalS1){
        parent::__construct($nim, $nama, $prodi, $asalsma);
        $this->asalS1 = $asalS1;
    }
    public function getInfoMahasiswa(){

        $mhs = "Mahasiswa S2 : <br>".parent::getInfoMahasiswa()."Asal S1 : {$this->asalS1}";
        return $mhs;
    }
}

$mahasiswa1 = new MahasiswaStrataSatu("F1G118004", "puput nova riyanti", "Ilmukomputer", "SMKN 2 Kendari");
$mahasiswa2 = new MahasiswaStrataDua("F1G118040", "hartini selan", "Ilmukomputer", "SMAN 5 KENDARI", "UHO");

echo $mahasiswa1->getInfoMahasiswa();
echo "<br>";
echo $mahasiswa2->getInfoMahasiswa();

?>