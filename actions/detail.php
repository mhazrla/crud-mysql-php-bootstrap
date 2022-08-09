<?php 

$id = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

?>
  <div class="container mt-3 on-relative">
    <div class="data-detail">
        <div class="row mt-3 ">
            <div class="container">
                <div class="row">
                  <div class="col">
                    <p  class="fw-bolder">Nama Lengkap </p>
                  </div>
                  <div class="col-9">
                    <p><?= $data['nama'] ?></p>
                  </div>
                </div>
    
                <div class="row">
                    <div class="col">
                      <p  class="fw-bolder">Jenis Kelamin </p>
                    </div>
                    <div class="col-9">
                      <p><?= $data['jenisKelamin'] ?></p>
                    </div>
                </div>
    
                <div class="row">
                  <div class="col">
                    <p  class="fw-bolder">Tanggal Lahir </p>
                  </div>
                  <div class="col-9">
                    <p><?= $data['tanggalLahir'] ?></p>
                  </div>
                </div>
    
                                  <div class="row">
                                    <div class="col">
                                      <p  class="fw-bolder">Tempat Lahir </p>
                                    </div>
                                    <div class="col-9">
                                        <p><?= $data['tempatLahir'] ?></p>
                                    </div>
                                  </div>
    
                                  <div class="row">
                                    <div class="col">
                                      <p  class="fw-bolder">Kewarganegaraan </p>
                                    </div>
                                    <div class="col-9">
                                        <p><?= $data['kewarganegaraan'] ?></p>
                                    </div>
                                  </div>
    
                                  <div class="row">
                                    <div class="col">
                                      <p  class="fw-bolder">Agama </p>
                                    </div>
                                    <div class="col-9">
                                        <p><?= $data['agama'] ?></p>
                                    </div>
                                  </div>
    
                                  <div class="row">
                                    <div class="col">
                                      <p  class="fw-bolder">No. Telepon </p>
                                    </div>
                                    <div class="col-9">
                                        <p><?= $data['noHP'] ?></p>
                                    </div>
                                  </div>
    
                                  <div class="row">
                                    <div class="col">
                                      <p  class="fw-bolder">Email </p>
                                    </div>
                                    <div class="col-9">
                                        <p><?= $data['email'] ?></p>
                                    </div>
                                  </div>
    
                                  <div class="row">
                                    <div class="col">
                                      <p  class="fw-bolder">Instagram </p>
                                    </div>
                                    <div class="col-9">
                                        <p><?= $data['instagram'] ?></p>
                                    </div>
                                  </div>
                              </div>

                              <div class="row mb-5">
                                <div class="col my-5">
                                  <div class="d-flex">
                                    <div class="pt-2 pb-3 flex-grow-1">
                                        <a href="<?= $WEB_CONFIG['base_url'] ?>" class="card-link d-block mt-3">&laquo;Kembali ke daftar mahasiswa</a>
                                    </div>
                                    <div class="pt-2 pb-3">
                                      <a href="<?= $WEB_CONFIG['base_url'] ?>index.php?page=ubah&id=<?= $data['id'] ?>" class="btn btn-success m-1">Ubah</a>
                                      <a href="javascript:alertDelete(<?= $data['id'] ?>);" class="btn btn-danger m1">Hapus</a>
                                      
                                    </div>
                                </div>
                                </div>
                              </div>
    
                        </div>
                    </div>
  </div>

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Konfirmasi menghapus data</h5>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin? </p>
      </div>
      <div class="modal-footer ">
        <a type="button" class="btn btn-danger" data-dismiss="modal" href="<?= $WEB_CONFIG['base_url'] ?>index.php?page=detail&id=<?= $data['id'] ?>">Batal</a>
        <a type="button" class="btn btn-primary" id="deleteButtonModal">Lanjutkan</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function alertDelete(idn) {
    $('#deleteButtonModal').attr('href', '<?= $WEB_CONFIG['base_url'] ?>index.php?page=delete&id='+idn);
    $('#deleteModal').modal('show');
}
</script>