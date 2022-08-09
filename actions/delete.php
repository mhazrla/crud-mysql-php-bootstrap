<?php 

//Mengambil ID dari URL
$delete_id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id='$delete_id'";

if(mysqli_query($connect, $query)){
    //Eksekusi Query
    $_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data telah terhapus</div>";
}else{
    $_SESSION['flash'] = "<div class=\"alert alert-danger\" role=\"alert\">Data gagal terhapus</div>";
}

//Redirect to base_url
echo "<script>window.location='".$WEB_CONFIG["base_url"]."';</script>";