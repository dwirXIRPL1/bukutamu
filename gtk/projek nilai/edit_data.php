<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$user = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editData($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('data berhasil di ubah')
        window.location = 'resepsionis.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javasript'>
        alert('data user gagal di ubah');
        window.location = 'resepsionis.php';
        </script>
        ";
    }
}

?>

<?php require 'sidebare.php'?>

<div class="main">
    <div class="box">
        <h3>edit data</h3>

        <form action="" method="POST">

            <input type="hidden" name="id_resepsionis" value="<?= $user["id_resepsionis"] ; ?>">

            <label for="username">username</label> <br />
            <input type="text" name="username" id="username" class="form-control" value="<?= $user["username"]; ?>"><br /><br />

            <label for="nama_lengkap">nama lengkap</label><br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"]; ?>"> <br /><br />

            <label for="kelas">kelas</label><br />
            <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $user["kelas"]; ?>"> <br /><br />


            <label for="password">password</label><br />
            <input type="password" name="password" id="password" class="form-control" value="<?= $user["password"]; ?>"><br /><br />

            <label for="roles">roles</label><br />
            <select name="roles" class="form-control" value="<?= $user["roles"]; ?>">
                <option value="admin">admin</option>
                <option value="resepsionis">resepsionis</option>
            </select><br /><br />
            <button type="submit" name="kirim">tambah</button>
        </form>
    </div>
</div>