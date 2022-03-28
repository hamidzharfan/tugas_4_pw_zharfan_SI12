<?php
  //class lingkaran
  class Lingkaran {
    private $jari;
     const PHI = 3.14;
    public function __construct( $jari ) {
     $this->jari = $jari;
     }
     public function getluas() {
     return self::PHI * $this->jari * $this->jari ;
     }
    public function getKeliling() {
     return 2 * self::PHI * $this->jari;
      } // tutup class
  }
?>