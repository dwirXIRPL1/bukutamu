<?php 
session_start();
require 'functions.php';
$gtk = query("SELECT * FROM gtk");

?>

<?php require 'sidebare.php'?>

<div class="main">
    <h2>Data GTK</h2>

    <a href="tambah_gtk.php" class="tambah">tambah data</a>
    <?php require 'sidebare.php'?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Job</th>
      <th scope="col">Roles</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <?php $i = 1; ?>
        <?php foreach($gtk as $data) :?>
  <tbody>
    <tr>
      <th scope="row"><?= $i; ?></th>
        <td><?= $data["nama_lengkap"];?></td>
        <td><?= $data["job"];?></td>
        <td><?= $data["roles"];?></td>
        <td><img src="../projek nilai/fotogtk/<?= $data["foto"];?>" alt="" width="80"></td>
        <td>
            <a href="edit_gtk.php?id=<?= $data["id_gtk"]; ?>" class="edit">edit</a>
            <a href="hapus_gtk.php?id=<?= $data["id_gtk"]; ?>" class="hapus">hapus</a>
        </td>
    </tr>
    <?php $i++;?>
        <?php endforeach; ?>
  </tbody>
</table>
</div>