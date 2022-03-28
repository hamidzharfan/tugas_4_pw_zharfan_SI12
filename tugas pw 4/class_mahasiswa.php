<?php
class mahasiswa{
    var $nama;
    var $nim;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    function _contruct($nim,$nama){
       $this->nim = $nim;
       $this->nama = $nama;       
    }

    function predikat_ipk(){
        if($this->ipk < 2.0) return "cukup";
        elseif($this->ipk >= 2.0 && $this->ipk < 3.0) return "Baik";
        elseif($this->ipk >= 3.0 && $this->ipk < 3.75) return "memuaskan";
        elseif($this->ipk >= 3.75 && $this->ipk < 4) return "cum laude";
        
        
    }

}
?>