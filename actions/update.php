<?php 

if(isset($_POST['save'])){
        $id = $_GET['id'];
        $nama = $_POST['nama'];
        $noHP = $_POST['noHP'];
        $instagram = $_POST['instagram'];
        $email = $_POST['email'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $tempatLahir = $_POST['tempatLahir'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $agama = $_POST['agama'];

        $query = "INSERT INTO mahasiswa (nama,noHP,instagram,email,
        jenisKelamin,tempatLahir,tanggalLahir,kewarganegaraan,agama) 
        VALUES('$nama', '$noHP', '$instagram', '$email', '$jenisKelamin', 
        '$tempatLahir', '$tanggalLahir', '$kewarganegaraan', '$agama'
        )";

        $query = "UPDATE mahasiswa SET nama='$nama', noHP='$noHP', instagram='$instagram', 
        email='$email', jenisKelamin='$jenisKelamin', tempatLahir='$tempatLahir', tanggalLahir='$tanggalLahir', 
        kewarganegaraan='$kewarganegaraan', agama='$agama' WHERE id=$id";


        if (mysqli_query($connect, $query)) {
            echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil diubah</div>";
        }else{
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal diubah</div>";
        }
    }

$id = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

?>

<a href="<?= $WEB_CONFIG['base_url'] ?>" class="btn btn-warning mb-3">
    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
        <path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
    </svg> Kembali
</a>

<div class="container mt-3">
    <form action="" method="post" class="row g-3 needs-validation" validate>
        <div class="mb-1">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>" required>
        </div>

        <div class="mb-1 col-md-4">
            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
            <div class="input-group mb-1">
            <select class="form-select" name="jenisKelamin" id="jenisKelamin" value="<?= $data['jenisKelamin'] ?>" required>
                <option  selected disabled value="">Pilih jenis kelamin Anda...</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>
        </div>
        
        <div class="mb-1 col-md-4">
            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempatLahir" id="tempatLahir" value="<?= $data['tempatLahir'] ?>" required>
        </div>
        
        <div class="col-md-4 mb-1">
            <label for="date" class="form-label">Tanggal Lahir</label>
                <div class="input-group date" id="datepicker">
                    <input type="text" class="form-control" name="tanggalLahir" id="tanggalLahir" value="<?= $data['tanggalLahir'] ?>" required>
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>
        </div>
        
        <div class="mb-1 col-md-6 has-validation">
                <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" value="<?= $data['kewarganegaraan'] ?>" required>
        </div>
        
        <div class="mb-1 col-md-6">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" name="agama" id="agama" value="<?= $data['agama'] ?>" required>
        </div>
        
        <div class="mb-1 col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?= $data['email'] ?>" required>
        </div>

        <div class="mb-1 col-md-4">
                <label for="NoHP" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="noHP" id="noHP" value="<?= $data['noHP'] ?>" required>
                <div class="form-text">Ex : 08841512162</div>
        </div>

        <div class="mb-1 col-md-4">
                <label for="instagram" class="form-label">Instagram</label>
                <div class="input-group">
                <span class="input-group-text" id="instagram">@</span>
                <input type="text" class="form-control" name="instagram" id="instagram" value="<?= $data['instagram'] ?>" required>
                </div>
        </div>
        <div class="container-fluid mb-5">
            <button type="submit" class="btn btn-primary mt-3 mb-5" name="save" >Submit</button>
        </div>
    </form>
</div>