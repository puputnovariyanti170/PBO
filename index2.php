<?php
//membuat public property
//membuat class barang
//membuat objek dari atribut barang
//menampilkam method
//fungsi dari function construct akan mengambil data pada method 

    class Barang{
      public $namabarang , $jenisbarang , $hargabarang , $kodebarang;
      public function __construct($namabarang = "namabarang" , $jenisbarang = "jenisbarang", $hargabarang = "hargabarang", $kodebarang = "kodebarang"){
        $this->namabarang = $namabarang; 
        $this->jenisbarang = $jenisbarang;
        $this->hargabarang = $hargabarang;
        $this->kodebarang = $kodebarang;
      }
      public function getInfoBarang(){
//membuat public method
//menambahkan objek method pada dolar nb
// dan menampilkannya pada return
	
		$nb = "namabarang : {$this->namabarang},<br>
		 		  jenisbarang : {$this->jenisbarang},<br>
          hargabarang : {$this->hargabarang},<br>
          kode barang : {$this->kodebarang}
          
		   	"; 

		return $nb;
	
      }
    }

    class Barang1 extends Barang {
//membuat objek atau class baru
//menambahkan fugsi method 
//menampilkan dolar nb
      public function getInfoBarang(){
        $nb = "Barang 1 : <br><br>".parent::getInfoBarang();
        return $nb;
      }
    }

    class Barang2 extends Barang{
//membuat objek atau class baru
//menambahkan fungsi objek Barang2
//membuat public property
//membuat public method function
      public $kodebarang;
      public function __construct ($namabarang, $jenisbarang, $hargabarang, $kodebarang ){
        parent:: __construct($namabarang, $jenisbarang, $hargabarang, $kodebarang,);
        $this->kodebarang = $kodebarang;
      }
      public function getInfoBarang(){

        $nb = "Barang 2: <br><br>".parent::getInfoBarang();
        return $nb;
      }
    }
//buat objek dari class barang
//menampilkan objek barang1 dan barang2
    $barang1 = new Barang1("Helm kyt", "kyt k2 raider", "800.000", "455647736");
    $barang2 = new Barang2("sepatu", "diadora", "350.000", "6373673278");
//tampilkan property 
//tampilkan method
	  echo $barang1->getInfoBarang();
	   echo "<br>";
      echo "<br>";
      echo $barang2->getInfoBarang();

 ?>
