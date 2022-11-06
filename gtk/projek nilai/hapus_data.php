<?php

require 'functions.php';

$id = $_GET["id"];

    if(hapusData($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('data berhasil di hapus')
        window.location = 'resepsionis.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javasript'>
        alert('data gagal di hapus');
        window.location = 'resepsionis.php';
        </script>
        ";
    }


?>