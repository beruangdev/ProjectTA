<div id="content" class="content">
<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Dashboard</a></li>
	</ol>
	
	<div class="container">
		<h1 class="text-center">Tabel Data Bansos</h1>
		<p class="text-center">Anda dapat mengelola data bansos</p>
		<div class="form-group text-right">
		<a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary">Tambah</a>
        <!-- <a class="btn btn-info" href="<?php echo base_url('Info'); ?>">Info</a> -->
					
		</div>
		<?=$this->session->flashdata('notif')?>
		<table class="table table-striped table-bordered">
            <thead>
                <tr>
					<th>No.</th>
                    <th>ID</th>
                    <th>Nama Bantuan Sosial</th>
					<th>Periode</th>
					<th>Action</th>
                </tr>
            </thead>
            <tbody>
				<?php $no=0;
				foreach ($bansos as $bs) 
				{ $no++;
				echo "<tr>";
					echo "<td>$no</td>";
                    echo "<td>$bs->id_bansos</td>";
					echo "<td>$bs->nama_bansos</td>";
					echo "<td>$bs->periode</td>";
					echo "<td>
                    <a class='btn btn-info' href='<?php echo base_url('Info'); ?>Info</a>
                    <a href='#' class='btn btn-warning'>Ubah</a>
					<a href='#' class='btn btn-danger'>Hapus</a>
                    </td>";				
				echo "</tr>";
                 } ?>
            </tbody>
        </table>
    </div>
  					
	<!-- Form Tambah -->
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Tambah Data Bansos</h4>
             </div>
             <form class="form-horizontal" action="<?php echo base_url('bansos/add_bansos')?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">ID Bantuan Sosial</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="id_bansos" placeholder="Masukkan ID Bansos">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Nama Bantuan Sosial</label>
                          <div class="col-lg-10">
                           <input type="text" class="form-control" name="nama_bansos" placeholder="Masukkan Nama Bansos">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Periode</label>
                          <div class="col-lg-10">
                              <input type="date" class="form-control" name="periode" placeholder="Masukkan Tanggal">
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                  </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!-- Modal Ubah -->
<!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('bansos/ubah')?>" method="post" enctype="multipart/form-data" role="form">
             <div class="modal-body">
                     <div class="form-group">
                         <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                         <div class="col-lg-10">
                          <input type="hidden" id="id_bansos" name="id_bansos">
                             <input type="text" class="form-control" id="id_bansos" name="id_bansos" placeholder="Tuliskan ID Bansos">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
                         <div class="col-lg-10">
                          <textarea class="form-control" id="nama_bansos" name="nama_bansos" placeholder="Tuliskan Nama Bansos"></textarea>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="col-lg-2 col-sm-2 control-label">Pekerjaan</label>
                         <div class="col-lg-10">
                             <input type="text" class="form-control" id="periode" name="periode" placeholder="Tuliskan Periode">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                     <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Ubah -->
<!-- <script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama').attr("value",div.data('nama'));
            modal.find('#periode').attr("value",div.data('periode'));
        });
    });
</script> --> 

</div>