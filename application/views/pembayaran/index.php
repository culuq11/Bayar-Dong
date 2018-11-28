<div class="container">
<button type="button" class="btn btn-danger" onclick="window.location.href='../'">Kembali Ke Halaman Utama</button>
  <?php
if($mahasiswa == null){
  echo "<h1> NIM Tidak Ditemukan,</br> Mohon Cek Penginputan NIM Kembali</h1></br></br>";
  echo "";
}else {
  foreach ($mahasiswa as $dataMahasiswa) {

  ?>
    <h1> Detail Tunggakan </h1>
    <h2>
    <?php
    echo $dataMahasiswa->nama_mahasiswa; ?> - <?php echo $dataMahasiswa->nim_mahasiswa;
    $totalTunggakan = $dataMahasiswa->spp_tunggakan + $dataMahasiswa->ujian_tunggakan + $dataMahasiswa->daftarulang_tunggakan + $dataMahasiswa->dll_tunggakan;
    ?>
  </h2>
    <table class="table">
      <thead>
        <tr>
          <th class="col col-md-1">#</th>
          <th class="col col-md-3">Tunggakan</th>
          <th class="col col-md-5">Jumlah</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Tunggakan SPP</td>
          <td>Rp. <?php echo number_format($dataMahasiswa->spp_tunggakan);?></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Tunggakan Ujian</td>
          <td>Rp. <?php echo number_format($dataMahasiswa->ujian_tunggakan)?></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Tunggakan Daftar Ulang</td>
          <td>Rp. <?php echo number_format($dataMahasiswa->daftarulang_tunggakan)?></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Tunggakan lain lain</td>
          <td>Rp. <?php echo number_format($dataMahasiswa->dll_tunggakan)?></td>
        </tr>
      </tbody>
<?php } ?>
    </table>
<div class="col-md-5">
    <h2>
    <?php
    if($totalTunggakan != 0){
      echo "Total : ", number_format($totalTunggakan);
    }else {
      echo "LUNAS";
    }
    ?>
  </h2>
</div>

</br>
<div class="col-md-3">
  <?php
  if($totalTunggakan != 0){
  ?>
<button class="form-control btn-success" data-toggle="modal" data-target="#modalForm">Menuju Pembayaran</button>
<?php } ?>
<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only"><font color='black'>Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Detail Pembayaran <b><i> <?php echo $dataMahasiswa->nama_mahasiswa;?></i></b></h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="masukkanNama">Nim</label>
                        <input type="text" class="form-control" id="masukkanNama" placeholder="<?php echo $dataMahasiswa->nim_mahasiswa;?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="masukkanEmail">Jumlah Yang Harus Dibayarkan</label>
                        <input type="email" class="form-control" id="masukkanEmail" placeholder="Rp. <?php echo number_format($totalTunggakan);?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="masukkanPesan">Kirim Ke Rekening BAAK</label>
                          <?php foreach ($informasi as $info); { ?>
                            <textarea class="form-control" id="masukkanPesan" placeholder=""><?php echo $info->no_rekening;?> A/N <?php echo $info->atasnama_rekening;?> (<?php echo $info->bank_rekening;?>)</textarea>
                    </div>
                </form>
                          <?php } ?>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="window.location.href='konfirmasi'">KIRIM</button>
            </div>
        </div>
    </div>
</div>
</font>
<?php } ?>
