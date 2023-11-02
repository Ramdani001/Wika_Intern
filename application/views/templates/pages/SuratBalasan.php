<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title fw-bold text-center">
                SURAT PENERIMAAN & SERTIFIKASI
            </h3>
        </div>
        <div class="card-body h-full" style="height: 50vh;">

            <div class="row g-5 mt-5 items-center justify-content-evenly ">
                <div class="col-5 text-center p-3 card shadow"  data-bs-toggle="modal" data-bs-target="#modalSurat" style="width: 300px; height: 150px; cursor: pointer;">
                    <h4>
                    Surat Penerimaan
                    </h4>
                    <i class="fa-solid fa-file-pen fs-1 mt-3"></i>
                </div>
                
                <div id="viewSurat" class="col-5 text-center p-3 card shadow" style="width: 300px; height: 150px; cursor: pointer;" value="viewSurat">
                    <h4>
                        View
                    </h4>
                    <i class="fa-solid fa-users-viewfinder  fs-1 mt-3"></i>
                </div>

                <div class="col-5 text-center p-3 card shadow" data-bs-toggle="modal" data-bs-target="#modalSertifikat" style="width: 300px; height: 150px; cursor: pointer;">
                    <h4>
                        Sertifikat
                    </h4>
                    <i class="fa-solid fa-certificate fs-1 mt-3"></i>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Surat -->

<div class="modal fade" id="modalSurat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Surat Penerimaan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url('Administrator/InsertSuratBalasan'); ?>" method="POST" enctype="multipart/form-data">


           <!-- Header Surat -->
           <div class="card-header">
                <h3 class="fw-semiblod">Header</h3>
                <hr>
            </div>
            <div class="mb-3">
                <label for="nomorSuratBalasan">Nomor Surat</label>
                <input type="text" class="form-control" placeholder="Nomor Surat" name="nomorSuratBalasan" id="nomorSuratBalasan">
            </div>
            <div class="mb-3">
                <label for="asalSekolah">Asal Sekolah / Universitas</label>
                <input type="text" class="form-control" placeholder="Kepada Yth." name="asalSekolahPemohon" id="asalSekolahPemohon">
            </div>
            <div class="mb-3">
                <label for="tglDibuat">Tanggal Dibuat</label>
                <!-- Value Tanggal Ditambah Majalengka -->
                <input type="date" class="form-control" placeholder="Tanggal Dibuat" name="tglDibuat" id="tglDibuat">
            </div>
            <!-- Isi Surat -->
            <div class="card-header">
                <hr>
                <h3 class="fw-bold">Isi Surat</h3>
                <hr>
            </div>
            <div class="mb-3">
                <label for="nomorSuratMou">Nomor Surat MOU dari Anak PKL</label>
                <input type="text" class="form-control" placeholder="Nomor Surat MOU dari Anak PKL" name="nomorSuratMou" id="nomorSuratMou">
            </div>
            <div class="mb-3">
                <label for="tglSuratMou">Tanggal Surat MOU dari Anak PKL</label>
                <input type="date" class="form-control" placeholder="Tanggal Surat MOU dari Anak PKL" name="tglSuratMou" id="tglSuratMou">
            </div>
            <div class="mb-3">
                <label for="statusPemohon">Status Pemohon</label>
                <input type="text" class="form-control" placeholder="Status Pemohon Mahasiswa/Siswa" name="statusPemohon" id="statusPemohon">
            </div>
            <!-- Tabel -->
            <div class="mb-3">
                <label for="jumlahPemohon">Jumlah Pemohon</label>
                <select class="form-select" aria-label="Default select example" name="jumlahPemohon" id="jumlahPemohon">
                    <option selected>Jumlah Pemohon</option>
                    <option value="1">1 Pemohon</option>
                    <option value="2">2 Pemohon</option>
                    <option value="3">3 Pemohon</option>
                    <option value="4">4 Pemohon</option>
                    <option value="5">5 Pemohon</option>
                </select>
            </div>
            
            <!-- ==== -->
            <!-- Disini Jumlah Pemohon 1-5 Maka inputan yang keluar sesuai jumlah pemohon -->
            <!-- ==== -->
            
            <!-- Pemohon 1 -->
            <div id="pemohon1" class="row gap-3 d-none">
                <h4>Pemohon 1</h4>
                <div class="mb-3 col">
                    <label for="namaPemohon1">Nama Pemohon</label>
                    <input type="text" class="form-control" id="namaPemohon1" placeholder="Nama Pemohon" name="namaPemohon1">
                </div>

                <div class="mb-3 col">
                    <label for="nim1">NIM / NRP</label>
                    <input type="text" class="form-control" placeholder="NIM / NRP" id="nim1" name="nim1">
                </div>

                <div class="mb-3 col">
                    <label for="jurusan">Jurusan / Kompetensi</label>
                    <input type="text" class="form-control" placeholder="Jurusan / Kompetensi" id="jurusan1" name="jurusan1">
                </div>
            </div>
            <!-- Pemohon 1 -->
            
            <!-- Pemohon 2 -->
            <div id="pemohon2" class="row gap-3 d-none">
                <h4>Pemohon 2</h4>
                <div class="mb-3 col">
                    <label for="namaPemohon2">Nama Pemohon</label>
                    <input type="text" class="form-control" id="namaPemohon2" placeholder="Nama Pemohon" name="namaPemohon2">
                </div>

                <div class="mb-3 col">
                    <label for="nim1">NIM / NRP</label>
                    <input type="text" class="form-control" placeholder="NIM / NRP" id="nim2" name="nim2">
                </div>

                <div class="mb-3 col">
                    <label for="jurusan">Jurusan / Kompetensi</label>
                    <input type="text" class="form-control" placeholder="Jurusan / Kompetensi" id="jurusan2" name="jurusan2">
                </div>
            </div>
            <!-- Pemohon 2 -->
            
            <!-- Pemohon 3 -->
            <div id="pemohon3" class="row gap-3 d-none">
                <h4>Pemohon 3</h4>
                <div class="mb-3 col">
                    <label for="namaPemohon3">Nama Pemohon</label>
                    <input type="text" class="form-control" id="namaPemohon3" placeholder="Nama Pemohon" name="namaPemohon3">
                </div>

                <div class="mb-3 col">
                    <label for="nim3">NIM / NRP</label>
                    <input type="text" class="form-control" placeholder="NIM / NRP" id="nim3" name="nim3">
                </div>

                <div class="mb-3 col">
                    <label for="jurusan">Jurusan / Kompetensi</label>
                    <input type="text" class="form-control" placeholder="Jurusan / Kompetensi" id="jurusan3" name="jurusan3">
                </div>
            </div>
            <!-- Pemohon 3 -->
            
            <!-- Pemohon 4 -->
            <div id="pemohon4" class="row gap-3 d-none">
                <h4>Pemohon 4</h4>
                <div class="mb-3 col">
                    <label for="namaPemohon4">Nama Pemohon</label>
                    <input type="text" class="form-control" id="namaPemohon4" placeholder="Nama Pemohon" name="namaPemohon4">
                </div>

                <div class="mb-3 col">
                    <label for="nim4">NIM / NRP</label>
                    <input type="text" class="form-control" placeholder="NIM / NRP" id="nim4" name="nim4">
                </div>

                <div class="mb-3 col">
                    <label for="jurusan">Jurusan / Kompetensi</label>
                    <input type="text" class="form-control" placeholder="Jurusan / Kompetensi" id="jurusan4" name="jurusan4">
                </div>
            </div>
            <!-- Pemohon 4 -->
            
            <!-- Pemohon 5 -->
            <div id="pemohon5" class="row gap-3 d-none">
                <h4>Pemohon 5</h4>
                <div class="mb-3 col">
                    <label for="namaPemohon5">Nama Pemohon</label>
                    <input type="text" class="form-control" id="namaPemohon5" placeholder="Nama Pemohon" name="namaPemohon5">
                </div>

                <div class="mb-3 col">
                    <label for="nim5">NIM / NRP</label>
                    <input type="text" class="form-control" placeholder="NIM / NRP" id="nim5" name="nim5">
                </div>

                <div class="mb-3 col">
                    <label for="jurusan">Jurusan / Kompetensi</label>
                    <input type="text" class="form-control" placeholder="Jurusan / Kompetensi" id="jurusan5" name="jurusan5">
                </div>
            </div>
            <!-- Pemohon 5 -->
                
                <div class="mb-3">
                    <label for="statusSurat">Status Surat</label>
                    <select class="form-select" aria-label="Default select example" id="statusSurat" name="statusSurat">
                        <option selected>Staus Surat</option>
                        <option value="Telah Kami Terima">Telah Kami Terima</option>
                        <option value="Belum Bisa Kami Terima">Belum Bisa Kami Terima</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="dateFrom">Waktu Pelaksanaan</label>
                    <div class="row">
                        <div class="col">
                            <label for="dateFrom">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="tglMulai" name="tglMulai">
                        </div>
                        <div class="col ">
                            <label for="statusSurat">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="tglAkhir" name="tglAkhir">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="divisi">Penempatan Unit Kerja / Divisi</label>
                    <select class="form-select" aria-label="Default select example" id="divisi" name="divisi">
                        <option selected>Penempatan Unit Kerja / Divisi</option>
                        <?php foreach ($divisi as $data) { ?>
                            <?php if($data->idDivisi != 4) {?>
                                <option value="<?= $data->idDivisi ?>"> <?= $data->namaDivisi ?> </option>
                            <?php }?>
                        <?php }?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pembimbing">Nama Pembimbing</label>
                    <input type="text" class="form-control" placeholder="Nama Pembimbing" name="namaPembimbing" id="namaPembimbing">
                </div>

                <div class="mb-3">
                    <label for="ttd_digital">Ttd Digital / QR Code</label>
                    <input type="file" class="form-control" placeholder="Ttd Digital / QR Code" id="ttd_digital" name="ttd_digital">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
        </div>
     
    </div>
  </div>
</div>

<!-- Modal Sertifikat -->

<div class="modal fade" id="modalSertifikat" tabindex="-1" aria-labelledby="modalSertifikatLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalSertifikatLabel">Data Sertifikat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <!-- Header Surat -->
            <div class="card-header">
                <div class="card-title">Header</div>
            </div>
            <div class="mb-3">
                <label for="nomorSuratBalasan">Nomor Surat</label>
                <input type="text" class="form-control" placeholder="Nomor Surat">
            </div>
            <div class="mb-3">
                <label for="asalSekolah">Asal Sekolah / Universitas</label>
                <input type="text" class="form-control" placeholder="Asal Sekolah / Universitas" value="Rektor .....">
            </div>
            <div class="mb-3">
                <label for="tglDibuat">Tanggal Dibuat</label>
                <!-- Value Tanggal Ditambah Majalengka -->
                <input type="tanggalDibuat" class="form-control" placeholder="Tanggal Dibuat">
            </div>
            <!-- Isi Surat -->
            <div class="card-header">
                <div class="card-title">Isi Surat</div>
            </div>
            <div class="mb-3">
                <label for="nomorSuratMou">Nomor Surat MOU dari Anak PKL</label>
                <input type="text" class="form-control" placeholder="Nomor Surat MOU dari Anak PKL">
            </div>
            <div class="mb-3">
                <label for="tglSuratMou">Tanggal Surat MOU dari Anak PKL</label>
                <input type="date" class="form-control" placeholder="Tanggal Surat MOU dari Anak PKL">
            </div>
            <div class="mb-3">
                <label for="statusPemohon">Status Pemohon</label>
                <input type="date" class="form-control" placeholder="Status Pemohon Mahasiswa/Siswa">
            </div>
            <!-- Tabel -->
            <div class="mb-3">
                <label for="statusPemohon">Jumlah Pemohon</label>
                <input type="date" class="form-control" placeholder="Jumlah Pemohon">
            </div>
            
            <!-- ==== -->
            <!-- Disini Jumlah Pemohon 1-5 Maka inputan yang keluar sesuai jumlah pemohon -->
            <!-- ==== -->
            
            <!-- Pemohon 1 -->
                <div class="mb-3">
                    <label for="namaPemohon">Nama Pemohon</label>
                    <input type="text" class="form-control" id="namaPemohon" placeholder="Nama Pemohon">
                </div>

                <div class="mb-3">
                    <label for="nim">NIM / NRP</label>
                    <input type="text" class="form-control" placeholder="NIM / NRP">
                </div>

                <div class="mb-3">
                    <label for="jurusan">Jurusan / Kompetensi</label>
                    <input type="text" class="form-control" placeholder="Jurusan / Kompetensi">
                </div>
                <!-- Pemohon 1 -->
                
                <div class="mb-3">
                    <label for="statusSurat">Status Surat</label>
                    <input type="text" class="form-control" placeholder="Status Surat">
                </div>

                <div class="mb-3">
                    <label for="dateFrom">Waktu Pelaksanaan</label>
                    <div>
                        <div>
                            <label for="dateFrom">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="dateFrom" name="dateFrom">
                        </div>
                        <div>
                            <label for="statusSurat">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="dateTo" name="dateTo">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="divisi">Status Surat</label>
                    <input type="text" class="form-control" placeholder="Penempatan Unit Kerja / Divisi">
                </div>

                <div class="mb-3">
                    <label for="pembimbing">Nama Pembimbing</label>
                    <input type="text" class="form-control" placeholder="Nama Pembimbing">
                </div>

                <div class="mb-3">
                    <label for="personalia">Nama Personalia</label>
                    <input type="text" class="form-control" placeholder="Nama Personalia">
                </div>

                <div class="mb-3">
                    <label for="telp_personalia">Kontak Person</label>
                    <input type="text" class="form-control" placeholder="Kontak Person Personalia" id="telp_personalia" name="telp_personalia">
                </div>

                <div class="mb-3">
                    <label for="ttd_digital">Ttd Digital / QR Code</label>
                    <input type="text" class="form-control" placeholder="Ttd Digital / QR Code" id="ttd_digital" name="ttd_digital">
                </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

 <!-- Surat Balasan -->
 <script>
      $('#jumlahPemohon').on('change', function() {
        console.log("Jumlah Pemohon = ", $(this).val());

        if($(this).val() == 1){
            $('#pemohon1').removeClass('d-none');
            $('#pemohon2').addClass('d-none');
            $('#pemohon3').addClass('d-none');
            $('#pemohon4').addClass('d-none');
            $('#pemohon5').addClass('d-none');
        }else if($(this).val() == 2){
            $('#pemohon1').removeClass('d-none');
            $('#pemohon2').removeClass('d-none');
            $('#pemohon3').addClass('d-none');
            $('#pemohon4').addClass('d-none');
            $('#pemohon5').addClass('d-none');
        }else if($(this).val() == 3){
            $('#pemohon1').removeClass('d-none');
            $('#pemohon2').removeClass('d-none');
            $('#pemohon3').removeClass('d-none');
            $('#pemohon4').addClass('d-none');
            $('#pemohon5').addClass('d-none');
        }else if($(this).val() == 4){
            $('#pemohon1').removeClass('d-none');
            $('#pemohon2').removeClass('d-none');
            $('#pemohon3').removeClass('d-none');
            $('#pemohon4').removeClass('d-none');
            $('#pemohon5').addClass('d-none');
        }else if($(this).val() == 5){
            $('#pemohon1').removeClass('d-none');
            $('#pemohon2').removeClass('d-none');
            $('#pemohon3').removeClass('d-none');
            $('#pemohon4').removeClass('d-none');
            $('#pemohon5').removeClass('d-none');
        }

      });

      $('#viewSurat').click(function() {
            var value = $(this).attr('value');
            console.log(value);

            $.ajax({ 
                url: 'View/' + value, 
                method: 'POST',
                success: function(response) {        
                    // console.log(response);
                    $('#content').html(response);
                },
                error: function() {
                  console.log('Terjadi kesalahan saat memuat konten.');
                }
              });
        });

    </script>