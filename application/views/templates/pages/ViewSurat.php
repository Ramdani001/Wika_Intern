
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Asal Sekolah</th>
                <th>Jumlah Pemohon</th>
                <th>Status Surat</th>
                <th>Divisi</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          
        </tbody>
    </table>

    <!-- Modal Detail -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDetailLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php base_url(); ?>Administrator/Kehadiran" method="post"> 
                        <!-- NIM -->
                        <input type="hidden" name="id_user" class="form-control" id="id_user" placeholder="Id User" readonly>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM/NRP</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" readonly>
                        </div>
                        <!-- Nama Lengkap -->
                        <div class="mb-3">
                            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="namaLengkap" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="form-group"> <!-- Date input -->
                                <label for="tglHadir" class="form-label">Tanggal Hadir</label>
                                <input type="date" name="tglHadir" class="form-control" id="tglHadir" placeholder="Tanggal Hadir">
                            </div>
                        </div>
                        <!-- Status -->
                        <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Status Kehadiran</label>
                            <select class="form-select" id="statusKehadiran" aria-label="Default select example" name="status" id="status_kehadiran">
                                <option selected>Status</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <!-- Alasan -->
                        <div class="mb-3 d-none" id="formAlasan">
                             <label for="alasan" class="form-label">Alasan</label>
                             <textarea class="form-control" id="alasan" rows="5" name="alasan"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </div>
                                </form>
            </div>
        </div>
    </div>
    <!-- Modal Detail -->

 <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?= base_url('Administrator/getDataSurat'); ?>",
                    "type": "POST"
                },
                "columnDefs": [{
                    "target": [-1],
                    "orderable": false
                }],
                responsive: true,
                
            });

            // Fungsi untuk menghasilkan nomor surat
    function generateNomorSurat(divisi, bulan, tanggal, perusahaan, bulanSekarang, lokasiPerusahaan, jenisSurat, jumlahSurat, tahunSekarang) {
        // Format nomor surat sesuai dengan parameter yang diberikan
        var nomorSurat = divisi + "." +
            bulan + "." +
            tanggal + "/" +
            perusahaan + "." +
            hurufAbjad + "." +
            lokasiPerusahaan + "." +
            jenisSurat + "." +
            jumlahSurat.toString().padStart(5, '0') + "/" +
            tahunSekarang;
        return nomorSurat;
    }

    function singkatanDariKata(kata) {
    // Pisahkan kata-kata menjadi array
    var kataArray = kata.split(" ");

    // Inisialisasi variabel untuk singkatan
    var singkatan = "";

    // Loop melalui setiap kata
    for (var i = 0; i < kataArray.length; i++) {
        var kata = kataArray[i];
        // Periksa apakah huruf pertama kata adalah huruf besar
        if (/[A-Z]/.test(kata.charAt(0))) {
            // Ambil huruf besar pertama dari kata
            var hurufBesar = kata.charAt(0);

            // Tambahkan huruf besar ke singkatan
            singkatan += hurufBesar;
        }
    }

    return singkatan;
}


    // Contoh penggunaan fungsi untuk menghasilkan nomor surat
    var kata = "System and Software";
    var divisi = singkatanDariKata(kata);
    var bulan = (new Date().getMonth() + 1).toString().padStart(2, '0');
    var tanggal = new Date().getDate().toString().padStart(2, '0');

    var perusahaan = "WIK";
    var bulanSekarang = new Date().getMonth() + 1; // Mengambil bulan dalam angka (1-12)
    var hurufAbjad = String.fromCharCode(64 + bulanSekarang);
    var lokasiPerusahaan = "MJK";
    var jenisSurat = "KP";
    var jumlahSurat = 1230;  // Misalnya, jumlah surat yang sudah dibuat
    var tahunSekarang = new Date().getFullYear();

    var nomorSurat = generateNomorSurat(divisi, bulan, tanggal, perusahaan, hurufAbjad, lokasiPerusahaan, jenisSurat, jumlahSurat, tahunSekarang);

    console.log("Nomor Surat Generate = ",nomorSurat);

        });
        
    function lihatSurat(e){
        console.log("Id Surat = ", e);

        var form = document.createElement("form");
        form.method = "POST";
        form.action = "Administrator/DetailSurat";
        form.target = "_blank";

        var input = document.createElement("input");
        input.type = "hidden";
        input.name = "idSurat";
        input.value = e;

        form.appendChild(input);

        document.body.appendChild(form);

        form.submit();

    }

  

 </script>