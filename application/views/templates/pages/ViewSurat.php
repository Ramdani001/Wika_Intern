
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
        <div class="modal-dialog">
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
                            height: 17%;
                            "
                            >
                        </div>
                        <div class="" style="display: flex; flex: 1; margin-top: 20px;">
                        <div style="font-size: 10.5px;">
                            <table class="mb-2">
                                <tr>
                                    <td class="d-flex">
                                    Nomor : <span id="nomorSuratBalasan"> </span>  <!-- Nomor Surat Penerimaan -->
                                    </td class="d-flex">
                                    <td class="" style="padding-left: 113px;">
                                    Majalengka, <span id="tglSuratBalasan"> </span> <!-- Tanggal Dibuat -->
                                    </td>
                                </tr>
                            </table>

                            <div class="text-justify">
                                Kepada Yth. <br>
                                <span id="asalSekolah" ></span> <br>
                                Di Tempat
                                <br>
                                    <span class="ml-4">Perihal : <b> Izin Praktik Kerja Lapangan (PKL) </b></span>
                                <br>
                                Dengan Hormat, <br>
                                Merujuk Surat Permohonan Nomor <b id="nomorSuratMou">  </b> tanggal <b id="tglSuratMou">16 Oktober 2023</b>, terkait
                                Permohonan Praktik Kerja Lapangan (PKL) di PT Wijaya Karya Industri & Konstruksi Pabrikasi Baja
                                Majalengka terhadap <b id="statusPemohon">Mahasiswa</b> di bawah ini :
                            </div>
                            <br>
                            <table  style="border-collapse: collapse; text-align: center; width: 100%;" >
                            <thead>
                                <tr class="border">
                                    <th class="border" style="width: 10%;">NO</th>
                                    <th class="border" style="width: 30%;">Nama</th>
                                    <th class="border" style="width: 25%;">Nim</th>
                                    <th class="border" style="width: 30%;">Jurusan / Kompetensi</th>
                                </tr>    
                            </thead>
                            <tbody>
                                <!-- Pemohon 1 -->
                                <tr class="border" id="pemohon1">
                                    <td class="border"> 1 </td>
                                    <td class="border text-start" id="namaPemohon1"></td>
                                    <td class="border" id="nim1"></td>
                                    <td class="border" id="jurusan1"></td>
                                </tr>
                                <!-- Pemohon 1 -->
                                <!-- Pemohon 2 -->
                                <tr class="border d-none" id="pemohon2">
                                    <td class="border"> 2 </td>
                                    <td class="border text-start" id="namaPemohon2"></td>
                                    <td class="border" id="nim2"></td>
                                    <td class="border" id="jurusan2"></td>
                                </tr>
                                <!-- Pemohon 2 -->
                                <!-- Pemohon 3 -->
                                <tr class="border d-none" id="pemohon3">
                                    <td class="border"> 3 </td>
                                    <td class="border text-start" id="namaPemohon3"></td>
                                    <td class="border" id="nim3"></td>
                                    <td class="border" id="jurusan3"></td>
                                </tr>
                                <!-- Pemohon 3 -->
                                <!-- Pemohon 4 -->
                                <tr class="border d-none" id="pemohon4">
                                    <td class="border"> 4 </td>
                                    <td class="border text-start" id="namaPemohon4"></td>
                                    <td class="border" id="nim4"></td>
                                    <td class="border" id="jurusan4"></td>
                                </tr>
                                <!-- Pemohon 4 -->
                                <!-- Pemohon 5 -->
                                <tr class="border d-none" id="pemohon5">
                                    <td class="border"> 5 </td>
                                    <td class="border text-start" id="namaPemohon5"></td>
                                    <td class="border" id="nim5"></td>
                                    <td class="border" id="jurusan5"></td>
                                </tr>
                                <!-- Pemohon 5 -->
                            </tbody>
                        </table>
                        <br>

                        <p class="text-justify">
                        Bersama dengan ini kami sampaikan bahwa permohonan tersebut <b id="statusSurat" ></b>
                        untuk melaksanakan Praktik Kerja Lapangan di Pabrikasi Baja Majalengka, PT Wijaya Karya Industri
                        & Konstruksi. Selanjutnya Praktik Kerja Lapangan dilaksanakan dengan ketentuan sebagai berikut : 

                        </p>
                        <table class="text-start" style="border-collapse: collapse; text-align: center; width: 65%;" >
                            <tr>
                                <td>Waktu Pelaksanaan</td>
                                <td> : </td>
                                <td class="fw-semibold"> <span id="tglMulai"></span> s.d <span id="tglAkhir"></span></td>
                            </tr>
                            <tr>
                                <td>Penempatan Unit Kerja</td>
                                <td> : </td>
                                <td class="fw-semibold" id="divisi">  </td>
                            </tr>
                            <tr>
                                <td>Pembimbing</td>
                                <td> : </td>
                                <td class="fw-semibold" id="namaPembimbing"></td>
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
                                    <img id="ttd_digital" src="" alt="" width="80">
                                </div>
                                <span class="" style="margin-right: 42px;">
                                    <span class="text-decoration-underline fw-bold" style="margin-right: 118px;">
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

    <!-- Modal Surat Edit -->
    <div class="modal fade" id="modalEditSurat" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDetailLabel">Surat Penerimaan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Modal Surat Edit -->

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
            
            function formatDate(inputDate) {
                const months = [
                    'Januari', 'Februari', 'Maret', 'April',
                    'Mei', 'Juni', 'Juli', 'Agustus',
                    'September', 'Oktober', 'November', 'Desember'
                ];

                const dateParts = inputDate.split('-');
                const year = dateParts[0];
                const month = months[parseInt(dateParts[1]) - 1];
                const day = dateParts[2];

                return day + ' ' + month + ' ' + year;
            }

            var dataToSend = { idSurat: id };
            $.ajax({  
                url: 'Administrator/ViewDataSurat',
                data: dataToSend, 
                method: 'POST',
                success: function(response) {
                    $('#modalViewSurat').modal('show');
                    var jumlahPemohon = response.getSurat.jumlahPemohon;

                    $('#nomorSuratBalasan').text(response.getSurat.nomorSuratBalasan);
                    $('#tglSuratBalasan').text(formatDate(response.getSurat.tglDibuat));
                    $('#asalSekolah').text(response.getSurat.asalSekolahPemohon);
                    $('#nomorSuratMou').text(response.getSurat.nomorSuratMou);
                    $('#tglSuratMou').text(formatDate(response.getSurat.tglSuratMou));
                    $('#statusPemohon').text(response.getSurat.statusPemohon);

                    // Kondisi Jumlah Pemohon
                    if(jumlahPemohon == 1){
                        $('#namaPemohon1').text(response.getSurat.namaPemohon1);
                        $('#nim1').text(response.getSurat.nim1);
                        $('#jurusan1').text(response.getSurat.jurusan1);

                        $('#pemohon2').addClass('d-none');
                        $('#pemohon3').addClass('d-none');
                        $('#pemohon4').addClass('d-none');
                        $('#pemohon5').addClass('d-none');
                    }else if(jumlahPemohon == 2){
                        $('#namaPemohon1').text(response.getSurat.namaPemohon1);
                        $('#nim1').text(response.getSurat.nim1);
                        $('#jurusan1').text(response.getSurat.jurusan1);

                        $('#namaPemohon2').text(response.getSurat.namaPemohon2);
                        $('#nim2').text(response.getSurat.nim2);
                        $('#jurusan2').text(response.getSurat.jurusan2);

                        $('#pemohon2').removeClass('d-none');
                        $('#pemohon3').addClass('d-none');
                        $('#pemohon4').addClass('d-none');
                        $('#pemohon5').addClass('d-none');
                    }else if(jumlahPemohon == 3){
                        $('#namaPemohon1').text(response.getSurat.namaPemohon1);
                        $('#nim1').text(response.getSurat.nim1);
                        $('#jurusan1').text(response.getSurat.jurusan1);

                        $('#namaPemohon2').text(response.getSurat.namaPemohon2);
                        $('#nim2').text(response.getSurat.nim2);
                        $('#jurusan2').text(response.getSurat.jurusan2);

                        $('#namaPemohon3').text(response.getSurat.namaPemohon3);
                        $('#nim3').text(response.getSurat.nim3);
                        $('#jurusan3').text(response.getSurat.jurusan3);

                        $('#pemohon2').removeClass('d-none');
                        $('#pemohon3').removeClass('d-none');
                        $('#pemohon4').addClass('d-none');
                        $('#pemohon5').addClass('d-none');
                    }else if(jumlahPemohon == 4){
                        $('#namaPemohon1').text(response.getSurat.namaPemohon1);
                        $('#nim1').text(response.getSurat.nim1);
                        $('#jurusan1').text(response.getSurat.jurusan1);

                        $('#namaPemohon2').text(response.getSurat.namaPemohon2);
                        $('#nim2').text(response.getSurat.nim2);
                        $('#jurusan2').text(response.getSurat.jurusan2);

                        $('#namaPemohon3').text(response.getSurat.namaPemohon3);
                        $('#nim3').text(response.getSurat.nim3);
                        $('#jurusan3').text(response.getSurat.jurusan3);

                        $('#namaPemohon4').text(response.getSurat.namaPemohon4);
                        $('#nim4').text(response.getSurat.nim4);
                        $('#jurusan4').text(response.getSurat.jurusan4);

                        $('#pemohon2').removeClass('d-none');
                        $('#pemohon3').removeClass('d-none');
                        $('#pemohon4').removeClass('d-none');
                        $('#pemohon5').addClass('d-none');
                    }else if(jumlahPemohon == 5){
                        $('#namaPemohon1').text(response.getSurat.namaPemohon1);
                        $('#nim1').text(response.getSurat.nim1);
                        $('#jurusan1').text(response.getSurat.jurusan1);

                        $('#namaPemohon2').text(response.getSurat.namaPemohon2);
                        $('#nim2').text(response.getSurat.nim2);
                        $('#jurusan2').text(response.getSurat.jurusan2);

                        $('#namaPemohon3').text(response.getSurat.namaPemohon3);
                        $('#nim3').text(response.getSurat.nim3);
                        $('#jurusan3').text(response.getSurat.jurusan3);

                        $('#namaPemohon4').text(response.getSurat.namaPemohon4);
                        $('#nim4').text(response.getSurat.nim4);
                        $('#jurusan4').text(response.getSurat.jurusan4);

                        $('#namaPemohon5').text(response.getSurat.namaPemohon5);
                        $('#nim5').text(response.getSurat.nim5);
                        $('#jurusan5').text(response.getSurat.jurusan5);

                        $('#pemohon2').removeClass('d-none');
                        $('#pemohon3').removeClass('d-none');
                        $('#pemohon4').removeClass('d-none');
                        $('#pemohon5').removeClass('d-none');
                    }
                    // Kondisi Jumlah Pemohon

                    $('#tglMulai').text(formatDate(response.getSurat.tglMulai));
                    $('#tglAkhir').text(formatDate(response.getSurat.tglAkhir));
                    $('#divisi').text(response.getSurat.namaDivisi);
                    $('#namaPembimbing').text(response.getSurat.namaPembimbing);
                    $('#ttd_digital').attr('src', '<?= base_url(); ?>assets/img/QrCode/' + response.getSurat.ttd_digital);

                    
                    console.log(response.getSurat.nomorSuratBalasan);
                },
                error: function() {
                  console.log('Terjadi kesalahan saat memuat konten.');
                }
            });

        }else if(status == 3){
            console.log('Edit Id Surat = ', id);
            $('#modalEditSurat').modal('show');
        }
        

    }

  

 </script>