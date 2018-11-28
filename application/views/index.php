
  <div class="container">
    <h1 class="header">Bayar Dong</h1>
    <p class="p-header">Sistem Informasi berbasis website untuk urusan bayar membayar tanggungan siswa.</p></br>
    <?php
    $formmaster = array(
      'class' => 'form-group row'
    );
    $formcontrol = array(
      'class'=>'form-control',
      'placeholder'=>'Masukkan NIM',
      'type' => 'number'
    );
    $formbutton = array(
      'class'=>'form-control btn-success',
      'data-toggle' => 'modal',
      'data-target' => '#modalForm'
    );

    echo "<div class='col-sm-3'>";
    echo form_open('pembayaran', $formmaster);
    echo form_input('nim','', $formcontrol);
    echo "</div>";
    echo "<div class='col-sm-2'>";
    echo form_submit('submit','Cek Pembayaran', $formbutton);
    echo "</div>";
    echo form_close();

    ?>
    <img src="https://skspace.sgp1.digitaloceanspaces.com/webAssets/public/alaligo-float.png" width="120" id="alaligo-astro-img">
  </div>
</div>

<div class="konten">
    <div class="row">
      <div class="col-6 col-md-4">
        <img src="https://skspace.sgp1.digitaloceanspaces.com/webAssets/thumbnails/belajar.png" width="200" id="foto-konten">
        <p class="konten-landing">Data Mahasiswa, dari kelas A Teknik Informatika, berisi tentang biodata mahasiswa</p>
      </div>
      <div class="col-6 col-md-4">
        <img src="https://skspace.sgp1.digitaloceanspaces.com/webAssets/thumbnails/belajar.png" width="200" id="foto-konten">
        <p class="konten-landing">Data Dosen yang mengajar kelas A Teknik Informatika, Untuk memudahkan menghubungi dosen!</p>
      </div>
      <div class="col-6 col-md-4">
        <img src="https://skspace.sgp1.digitaloceanspaces.com/webAssets/thumbnails/belajar.png" width="200" id="foto-konten">
        <p class="konten-landing">Data Tugas, Berguna untuk memberitahukan tugas kepada para mahasiswa.</p>

    </div>
  </div>
  </div>
</div>
