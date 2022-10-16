<?php

//define('NAMA', 'Raka Rizkya');
//echo NAMA;
//
//echo "<br>";
//
//const UMUR = 25;
//echo UMUR;

//class Coba {
//    const NAMA = 'Raka'; 
//}
//
//echo Coba::NAMA;

//echo __FILE__;

//function coba() {
//    return __FUNCTION__;
//}
//
//echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;