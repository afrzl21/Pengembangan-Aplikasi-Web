<?php
    function coba($jumlah, $nama){
        for ($i = 0 ; $i < $jumlah; $i++){
            echo('<br>selamat datang<br>'.$nama);
        }
    }
    coba(4,' afrizal');
    
    echo('<br> ini memanggil fungsi lain');
    coba(6,'  manusia')
?>