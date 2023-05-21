<?php
// array indexing
$ar_buah = array('pisang','jambu','pepaya');

echo $ar_buah[2];

// cetak seluruh data array
echo '<br/> Jumlah Buah : ' .count($ar_buah);

// tambahkan data array
$ar_buah[] = "durian";

// hapus index ke-1
unset($ar_buah[1]);

// ubah index ke dua menjadi buah manggis 
$ar_buah[2] = "manggis";

// cetak seluruh data array
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}


// array assosiatif
$buah = ["P"=>'pisang',"J"=>'jambu',"A"=>'pepaya'];
?>