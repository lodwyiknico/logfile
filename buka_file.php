<?php

if ($_GET) {
    switch ($_GET['page']) {
        case 'home':
            if (!file_exists("tampilan_awal.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'tampilan_awal.php';
            break;

            case 'd1back':
                if (!file_exists("detailgrafik.php")) {
                    die("Maaf, Page Tidak Ditemukan");
                }
                include 'detailgrafik.php';
                break;

        case 'd2back':
            if (!file_exists("detaillog.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'detaillog.php';
            break;

        case 'Tambah-Kategori':
            if (!file_exists("kategori_add.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'kategori_add.php';
            break;

        case 'Edit-Kategori':
            if (!file_exists("kategori_edit.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'kategori_edit.php';
            break;


        case 'Delete-Kategori':
            if (!file_exists("kategori_delete.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'kategori_delete.php';
            break;



        case 'Data-Barang':
            if (!file_exists("barang_data.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'barang_data.php';
            break;



        case 'Tambah-Barang':
            if (!file_exists("barang_add.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'barang_add.php';
            break;


        case 'Edit-Barang':
            if (!file_exists("barang_edit.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'barang_edit.php';
            break;


        case 'Delete-Barang':
            if (!file_exists("barang_delete.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'barang_delete.php';
            break;


        case 'Login':
            if (!file_exists("login.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'login.php';
            break;

        case 'Registrasi':
            if (!file_exists("registrasi.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'registrasi.php';
            break;


        case 'HalamanUtama':
            if (!file_exists("halaman_utama.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'halaman_utama.php';
            break;


        case 'LogOut':
            if (!file_exists("logout.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'logout.php';
            break;


        case 'Transaksi':
            if (!file_exists("transaksi.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'transaksi.php';
            break;


       case 'Cari-Barang':
            if (!file_exists("barang_cari.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'barang_cari.php';
            break;
    }
} else {
    if (!file_exists('tampilan_awal.php')) {
        die("Page Tidak Ditemukan");
    }
    include 'tampilan_awal.php';
}
?>
