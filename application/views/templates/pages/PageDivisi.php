<div class="card mx-auto shadow" style="width: 70%;">
    <div class="card-body">
        <div class="mb-2">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDivisi">Tambah</button>
        </div>

        <table id="tableDivisi" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Divisi</th>
                    <th>Lokasi Divisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>

    </div>
</div>

<!-- Modal Edit -->

<div class="modal fade" id="EditDivisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Divisi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="w-full" action="<?php echo base_url('Administrator/ControlDivisi?Page=Edit'); ?>" method="POST">
            <input type="text" class="form-control mb-2" placeholder="Id Divisi" name="idDivisi" id="EditidDivisi" hidden>
            <input type="text" class="form-control mb-2" placeholder="Nama Divisi" name="namaDivisi" id="EditnamaDivisi">
            <input type="text" class="form-control mb-2" placeholder="Lokasi Divisi" name="lokasiDivisi" id="EditlokasiDivisi">
            <div class="row" style="padding: 10px;">
                <button class="col btn btn-primary w-full">Submit</button>
            </div>
        </form>
        </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahDivisi" tabindex="-1" aria-labelledby="tambahDivisiLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahDivisiLabel">Tambah Data Divisi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->

<script>

$(document).ready(function() {
   
   $('#tableDivisi').DataTable({
       "processing": true,
       "serverSide": true,
       "order": [],
       "ajax": {
           "url": "<?= base_url('Administrator/getDivisi'); ?>",
           "type": "POST"
       },
       "columnDefs": [{
           "target": [-1],
           "orderable": false
       }],
       responsive: true,
               
   });

});

function aksiDivisi(id, status){
    console.log("Id Divisi = ", id , " Status Modal = ", status);

    if(status == 1){
        
        $sendData = {idDivisi : id};
        $.ajax({ 
            url: 'Administrator/ControlDivisi?Page=GetUpdate',
            method: 'POST',
            data: $sendData,
            success: function(response) {
                $('#EditDivisi').modal('show');

                $('#EditidDivisi').val(response.data.idDivisi);
                $('#EditnamaDivisi').val(response.data.namaDivisi);
                $('#EditlokasiDivisi').val(response.data.lokasiDivisi);
            },
            error: function() {
                console.log('Terjadi kesalahan saat memuat konten.');
            }
        });
        

    }else{
        console.log("Aksi Untuk Hapus");
    }

}

</script>