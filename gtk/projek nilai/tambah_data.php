<?php 
session_start();
require 'functions.php';


if(isset($_POST["kirim"])){
    if(tambahData($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('data berhasil di tambah')
        window.location = 'resepsionis.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javasript'>
        alert('data gagal di tambahkan');
        window.location = 'resepsionis.php';
        </script>
        ";
    }
}

?>

<?php require 'sidebare.php'?>

<div class="main">
    <div class="box">
        <h3>tambah Data</h3>

        <form action="" method="POST">
            <label for="username">username</label> <br />
            <input type="text" name="username" id="username" class="form-control"> <br /><br />

            <label for="nama_lengkap">nama lengkap</label> <br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br /><br />

            <label for="kelas">kelas</label><br />
            <input type="text" name="kelas" id="kelas" class="form-control"><br /><br />

            <label for="password">password</label><br />
            <input type="password" name="password" id="password" class="form-control"><br /><br />

            <label for="roles">roles</label><br />
            <select name="roles" class="form-control">
                <option value="admin">admin</option>
                ect name="roles" class="form-control">
                <option value="resepsionis">Resepsionis</option>
            </select><br /><br />

            <button type="submit" name="kirim">tambah</button>
        </form>
    </div>
</div>