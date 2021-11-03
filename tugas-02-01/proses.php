<?php

/**
 * Inisialisasi variabel
 */
$nim = isset ($_POST["txtNIM"]) ? $_POST["txtNIM"] : "";
$nama = "Nurfadilah";
$prodi = "Teknik Informatika";
$simpan = "";

/**
 * Menangkap variabel dan data serta menampilkan ke layar 
 */
if ($simpan)
{
    echo "Hai, perkenalkan nama saya : ".Nurfadilah." 
    dengan nim ".20212215008.". Saya adalah seorang mahasiswa dari program studi ".Teknik Informatika.";
}

?>