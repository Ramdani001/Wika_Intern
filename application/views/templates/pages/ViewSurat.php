
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
`
    <!-- Modal Detail -->
    <div class="modal fade" id="modalViewSurat" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
        <div class="modal-dialog large">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDetailLabel">Surat Penerimaan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="suratHeader">
                        <div class="d-flex justify-content-center">
                            <img src="<?= base_url() ?>assets/img/logoSuratPenerimaan.png" alt="Logo WIKA" width="100"
                            style="
                            margin-left: auto;
                            margin-right: auto;
                            width: 30%;
                            height: 15%;
                            "
                            >
                        </div>
                        <div class="" style="display: flex; flex: 1; margin-top: 20px;">
                        <div style="font-size: 10.5px;">
                            <table class="mb-2">
                                <tr>
                                    <td>
                                    Nomor :  SE.01.01/WIK.C.MJK.KP.00030/2023  <!-- Nomor Surat Penerimaan -->
                                    </td>
                                    <td class="" style="padding-left: 120px;">
                                    Majalengka,  17 Oktober 2023 <!-- Tanggal Dibuat -->
                                    </td>
                                </tr>
                            </table>

                            <div class="text-justify">
                                Kepada Yth. <br>
                                Rektor Institut Teknologi Petroleum Balongan <br>
                                Di Tempat
                                <br>
                                    <span class="ml-4">Perihal : <b> Izin Praktik Kerja Lapangan (PKL) </b></span>
                                <br>
                                Dengan Hormat, <br>
                                Merujuk Surat Permohonan Nomor <b>718/ITPB/FS/KP/X/2023</b> tanggal <b>16 Oktober 2023</b>, terkait
                                Permohonan Praktik Kerja Lapangan (PKL) di PT Wijaya Karya Industri & Konstruksi Pabrikasi Baja
                                Majalengka terhadap <b>Mahasiswa</b> di bawah ini :
                            </div>
                            <br>
                            <table style="border-collapse: collapse; text-align: center; width: 100%;" >
                            <thead>
                                <tr class="border">
                                    <th class="border" style="width: 10%;">NO</th>
                                    <th class="border" style="width: 30%;">Nama</th>
                                    <th class="border" style="width: 25%;">Nim</th>
                                    <th class="border" style="width: 30%;">Jurusan / Kompetensi</th>
                                </tr>    
                            </thead>
                            <tbody>
                                <tr class="border">
                                    <td class="border"> 1 </td>
                                    <td class="border"> Rizkan Ramdani </td>
                                    <td class="border"> 2043014 </td>
                                    <td class="border"> Teknik Informatika </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>

                        <p class="text-justify">
                        Bersama dengan ini kami sampaikan bahwa permohonan tersebut <b>Telah / Belum Bisa Kami Terima</b>
                        untuk melaksanakan Praktik Kerja Lapangan di Pabrikasi Baja Majalengka, PT Wijaya Karya Industri
                        & Konstruksi. Selanjutnya Praktik Kerja Lapangan dilaksanakan dengan ketentuan sebagai berikut : 

                        </p>
                        <table class="text-start" style="border-collapse: collapse; text-align: center; width: 65%;" >
                            <tr>
                                <td>Waktu Pelaksanaan</td>
                                <td> : </td>
                                <td class="fw-semibold">23 Oktober s.d 23 November 2023</td>
                            </tr>
                            <tr>
                                <td>Penempatan Unit Kerja</td>
                                <td> : </td>
                                <td class="fw-semibold">Safety, Health and Environment </td>
                            </tr>
                            <tr>
                                <td>Pembimbing</td>
                                <td> : </td>
                                <td class="fw-semibold">Bapak Joko Prasetyo </td>
                            </tr>
                        </table>
                        <p class="text-justify mt-2">
                            Mohon melakukan konfirmasi maksimal H-3 sebelum waktu pelaksanaan pada kontak di bawah ini
                        </p>
                        <table class="text-start" style="margin-top: -10px; border-collapse: collapse; text-align: center; width: 65%;" >
                            <tr>
                                <td>Personalia</td>
                                <td> : </td>
                                <td class="fw-semibold">Jagad Giyana C. </td>
                            </tr>
                            <tr>
                                <td>Kontak Person</td>
                                <td> : </td>
                                <td class="fw-semibold">0822 4291 0617 </td>
                            </tr>
                        </table>
                        <p class="text-justify mt-1">
                            Demikian surat ini disampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih
                        </p>
                      
                            <div class="text-end justify-content-end">
                                    <span class="" style="margin-right: 113px;">
                                        Hormat Kami, 
                                    </span>
                                    <br>
                                <span class="text-decoration-underline" >
                                    PT. Wijaya Karya Industri & Konstruksi <br>
                                </span>
                                <div class="mt-2 mb-2" style="margin-right: 100px;">
                                    <img src="<?= base_url(); ?>assets/img/QrCode/Personalia.png" alt="" width="80">
                                </div>
                                <span class="" style="margin-right: 42px;">
                                    <span style="margin-right: 118px;">
                                        Titan Rifesha
                                    </span>
                                    <br>
                                    Kasie Keuangan & Personalia 

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
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
        
    function lihatSurat(e, status){
        console.log("Id Surat = ", e);
        console.log("Id Surat = ", status);
        var id = e;

        if(status == 1){
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
        }else if(status == 2){
            console.log('Lihat Id Surat = ', id);
            var dataToSend = { idSurat: id };
            $.ajax({ 
                url: 'Administrator/ViewDataSurat',
                data: dataToSend,
                method: 'POST',
                success: function(response) {        

                    $('#modalViewSurat').modal('show');

                    // console.log(response);
                    console.log(response);
                },
                error: function() {
                  console.log('Terjadi kesalahan saat memuat konten.');
                }
            });

        }else if(status == 3){
            console.log('Edit Id Surat = ', id);
        }
        

    }

  

 </script>