<?php

if ($_GET) {
    switch ($_GET['page']) {

            case 'd1back':
                if (!file_exists("detgraf/detailgrafik.php")) {
                    die("Maaf, Page Tidak Ditemukan");
                }
                include 'detgraf/detailgrafik.php';
                break;

        case 'd2back':
            if (!file_exists("detlog/detaillog.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'detlog/detaillog.php';
            break;

        case 'd3back':
            if (!file_exists("detailall/detgrapro.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'detailall/detgrapro.php';
            break;
        case 'd10back':
            if (!file_exists("dashboard/detaillogopentoday.php")) {
                die("Page Tidak Ditemukan");
              }
              include 'dashboard/detaillogopentoday.php';
              break;
        case 'd11back':
            if (!file_exists("dashboard/detaillogdonetoday.php")) {
                die("Page Tidak Ditemukan");
              }
              include 'dashboard/detaillogdonetoday.php';
              break;
        case 'd01back':
            if (!file_exists("dashboard/detaillogopenall.php")) {
                die("Page Tidak Ditemukan");
              }
              include 'dashboard/detaillogopenall.php';
              break;
      

        case 'Edit-Kategori':
            if (!file_exists("kategori_edit.php")) {
                die("Page Tidak Ditemukan");
            }
            include 'kategori_edit.php';
            break;

    }
} else {
    if (!file_exists('dashboard/tampilan_awal.php')) {
        die("Page Tidak Ditemukan");
    }
    include 'dashboard/tampilan_awal.php';
}
?>
