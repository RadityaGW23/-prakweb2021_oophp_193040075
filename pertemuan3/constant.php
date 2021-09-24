<?php

// define('NAMA', 'Raditya Gilang Wicaksono');
// echo NAMA;

// echo"<br>";

// const NRP = 193040075;
// echo NRP;

// class Coba{
//     const NAMA = 'Raditya Gilang Wicaksono';
// }

// echo Coba::NAMA;

// echo __LINE__;
// echo "<hr>";
// echo __FILE__;
// echo "<hr>";
// echo __DIR__;
// echo "<hr>";
// echo __FUNCTION__;
// echo "<hr>";
// echo __CLASS__;
// echo "<hr>";
// echo __METHOD__;
// echo "<hr>";
// echo __NAMESPACE__;
// echo "<hr>";

function coba(){
    return __FUNCTION__;
}

echo coba();

echo"<br>";

class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>