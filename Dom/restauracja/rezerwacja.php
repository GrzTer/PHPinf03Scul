<?php 
    $polonczenie = mysqli_connect('localhost', 'root', '', 'baza');
    
    $pData = $_POST['pData'];
    $pIlosc = $_POST['pIlosc'];
    $pTel = $_POST['pTel'];

    $sql = "INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES('$pData', '$pIlosc', '$pTel');";

    if (mysqli_query($polonczenie, $sql)) {
        echo "Dodano rezerwację do bazy";
    }
    mysqli_close($polonczenie);
?>