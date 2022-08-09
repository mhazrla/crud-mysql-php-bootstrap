<?php 
$query = "SELECT * FROM mahasiswa ORDER BY id DESC";
$result = mysqli_query($connect, $query);
 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>index.php?page=tambah" class="btn btn-primary mb-3">
    <svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1 m">
        <path fill="#fff" d="M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
    </svg> Tambah data
</a> 
<div class="box_table">
    <table class="table table-sm">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No. HP</th>
                <th scope="col">Email</th>
                <th scope="col" width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php while($data = mysqli_fetch_array($result)) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['noHP'] ?></td>
                <td><?= $data['email'] ?></td>
                
                <td>
                    <a href="<?= $WEB_CONFIG['base_url'] ?>index.php?page=detail&id=<?= $data['id'] ?>" class="btn btn-success badge rounded-pill "><i class="bi bi-info-circle">Detail</a>
                </td>
            </tr>
            <?php $no++ ?>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

