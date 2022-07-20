<?php
    $tgl= date("d-m-Y");
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $material=$_POST['material'];
    $merek=$_POST['merek'];
    $jumlah=$_POST['jumlah'];
    $pesan=$_POST['pesan'];

    header("Location: pesan.html");

    $fp = fopen("pesanan.txt","a+");
    fputs($fp,"$tgl|$nama|$alamat|$telp|$material|$merek|$jumlah|$pesan\n");
    fclose($fp);

    $fp = fopen("struct.txt","w");
    fputs($fp,"Struct Pemesanan di Toko Bangunan\n");
    fputs($fp,"Tanggal : $tgl\nNama : $nama\nAlamat : $alamat\nNo. Telp/ Wa : $telp\nMaterial : $material\nMerek : $merek\nJumlah : $jumlah\nPesan : $pesan\n\n");
    fclose($fp);
?>
