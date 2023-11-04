<div class="mb-3 d-flex">
    <div onclick="childPage('ViewSurat')" id="ViewSurat" class="px-5 py-2 shadow-md fw-bold  bg-hover-custom me-1" style="cursor: pointer; border-right: 2px solid rgba(0, 0, 0, 0.65); border-bottom: 2px solid rgba(0, 0, 0, 0.65);">Surat</div>

    <div onclick="childPage('Sertifikat')" id="Sertifikat" class="px-5 py-2 shadow-md bg-hover-custom bg-custom" style="cursor: pointer; border-right: 2px solid rgba(0, 0, 0, 0.65); border-bottom: 2px solid rgba(0, 0, 0, 0.65);">Sertifikat</div>
</div>

<div class="container" style="margin-top: -10px;">
    <h1>Page Sertifikat</h1>
</div>

<table id="tablePenilaian" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Penilaian</th>
            <th>Nim</th> 
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Asal Sekolah</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
          
    </tbody>
</table>

<?php include APPPATH . 'views/templates/partials/EditPenilaian.php'; ?>

<script>

$(document).ready(function() {
   $('#tablePenilaian').DataTable({
       "processing": true,
       "serverSide": true,
       "order": [],
       "ajax": {
           "url": "<?= base_url('SertifikatController/GetDataPenilaian'); ?>",
           "type": "POST"
       },
       "columnDefs": [{
           "target": [-1],
           "orderable": false
       }],
       responsive: true,
   });
});

    function lihatSertifikat(id,status){
        console.log(id,status);

        // Dowload = 1
        // Lihat = 2
        // Edit = 3

        if(status == 1){

        }else if(status == 2){

        }else if(status == 3){

            var sendData =  {id : id};
            $.ajax({ 

                url: 'SertifikatController/GetEdit',
                data: sendData, 
                method: 'POST',
                success: function(response) {        
                    $('#PenilaianEdit').modal('show');
                    console.log(response);
                },
                error: function() {
                  console.log('Terjadi kesalahan saat memuat konten.');
                }
            });

        }

    }

    // Child Component
    function childPage(status){
        console.log('Status Component Page = ', status);

        if(status === "Sertifikat"){
            console.log("Sertifikat Click");
            $('#ViewSurat').removeClass('bg-custom');
            $('#Sertifikat').addClass('bg-custom');

            $("#Sertifikat").on('click', function() {

            })
        }else{
            $('#ViewSurat').removeClass('bg-custom');
            $('#Sertifikat').addClass('bg-custom');

            $.ajax({ 
                url: 'View/' + status, 
                method: 'POST',
                success: function(response) {        
                    $('#content').html(response);
                },
                error: function() {
                  console.log('Terjadi kesalahan saat memuat konten.');
                }
              });

        }

    }
</script>