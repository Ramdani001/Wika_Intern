
<div class="modal fade" id="PenilaianEdit" tabindex="-1" aria-labelledby="PenilaianEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="PenilaianEditLabel">Data Sertifikat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>SertifikatController/Update" method="POST">
            
            <input type="text" class="form-control mb-2" placeholder="No Surat Penilaian" name="no_surat_penilaian" id="Edit_no_surat_penilaian" readonly>
            <input type="text" class="form-control mb-2" placeholder="Id User" name="id_user" id="Edit_id_user">
            <input type="text" class="form-control mb-2" placeholder="Nama Lengkap" name="namaLengkap" id="namaLengkap" readonly>
            <input type="text" class="form-control mb-2" placeholder="Jurusan" name="jurusan" id="jurusan" readonly>
            <input type="text" class="form-control mb-2" placeholder="Asal Sekolah" name="asalSekolah" id="asalSekolah" readonly>
            <input type="date" class="form-control mb-2" placeholder="Tanggal Dibuat" name="tgl_dibuat" id="Edit_tgl_dibuat">
            <h5>
                Penilaian - Kepribadian dan Perilaku
            </h5>
            <hr>
            <input type="text" class="form-control mb-2" placeholder="Kedisiplinan" name="kedisiplinan" id="Edit_kedisiplinan">
            <input type="text" class="form-control mb-2" placeholder="Tanggung Jawab" name="tanggung_jawab" id="Edit_tanggung_jawab">
            <input type="text" class="form-control mb-2" placeholder="Kerapihan" name="kerapihan" id="Edit_kerapihan">
            <input type="text" class="form-control mb-2" placeholder="Komunikasi" name="komunikasi" id="Edit_komunikasi">
            <h5>
                Penilaian - Proses Kerja
            </h5>
            <hr>
            <input type="text" class="form-control mb-2" placeholder="Pemahaman Pekerjaan" name="pemahaman_pekerjaan" id="Edit_pemahaman_pekerjaan">
            <input type="text" class="form-control mb-2" placeholder="Manajemen Waktu" name="manajemen_waktu" id="Edit_manajemen_waktu">
            <input type="text" class="form-control mb-2" placeholder="Kerjasama Tim" name="kerjasama_tim" id="Edit_kerjasama_tim">

            <div class="mx-end">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>