<?php 
session_start();
require 'functions.php';


$resepsionis = query("SELECT * FROM resepsionis");

?>

<div class="main">
    <h1>Data Resepsionis</h1>
    <a href="tambah_data.php" class="tambah">tambah data</a>
<?php require 'sidebare.php'?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Kelas</th>
      <th scope="col">Password</th>
      <th scope="col">Roles</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <?php $i = 1; ?>
        <?php foreach($resepsionis as $data) :?>
  <tbody>
    <tr>
      <th scope="row"><?= $i; ?></th>
        <td><?= $data["username"];?></td>
        <td><?= $data["nama_lengkap"];?></td>
        <td><?= $data["kelas"];?></td>
        <td><?= $data["password"];?></td>
        <td><?= $data["roles"];?></td>
        <td>
            <a href="edit_data.php?id=<?= $data["id_resepsionis"]; ?>" class="edit">edit</a>
            <a href="hapus_data.php?id=<?= $data["id_resepsionis"]; ?>" class="hapus">hapus</a>
        </td>
    </tr>
    <?php $i++;?>
        <?php endforeach; ?>
  </tbody>
</table>
</div>