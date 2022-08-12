<div id="content" class="content">
<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Dashboard</a></li>
	</ol>
	
	<div class="container">
		<h1 class="text-center">Tabel Data Kriteria Bansos</h1>
		<p class="text-center">Anda dapat mengelola data kriteria bansos</p>
		<div class="form-group text-right">
		<a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary">Tambah</a>
		</div>
		<?=$this->session->flashdata('notif')?>
	<table class="table table-striped">
            <thead>
                <tr>
					<th>No</th>
                    <th>id kriteria</th>
                    <th>nama kriteria</th>
					<th>id kriteria bansos</th>
					<th>Bobot</th>
					<th>Tipe Kriteria</th>
					<th>Action</th>
                </tr>
            </thead>
            <tbody>
				<?php
				$no = 0;
				foreach	($kriteria as $result)	{
				$no++;
				echo "<tr>";
					echo "<td>$no</td>";
					echo "<td>$result->id_kriteria</td>";
                    echo "<td>$result->nama_kriteria</td>";
					echo "<td>$result->id_kriteria_bansos</td>";
					echo "<td>$result->nilai_bobot</td>";
					echo "<td>$result->tipe_kriteria</td>";
					echo "<td>
                    	 
					<a> <button type='button' class='btn btn-warning'>Ubah</button></a>
					<a> <button type='button' class='btn btn-danger'>Hapus</button></a> 
					</td>";
				echo "</tr>";
				} ?>
            </tbody>
        </table>
    </div>

// 	<!-- Form Tambah -->
// 	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
//      <div class="modal-dialog">
//          <div class="modal-content">
//              <div class="modal-header">
//                  <h4 class="modal-title">Tambah Data Kriteria</h4>
//              </div>
//              <form class="form-horizontal" action="<?php echo base_url('kriteria/add_kriteria')?>" method="post" enctype="multipart/form-data" role="form">
//               <div class="modal-body">
//                       <div class="form-group">
//                           <label class="col-lg-2 col-sm-2 control-label">ID Kriteria</label>
//                           <div class="col-lg-10">
//                               <input type="text" class="form-control" name="id_kriteria" placeholder="Masukkan ID Kriteria">
//                           </div>
//                       </div>
// 					  <div class="form-group">
//                           <label class="col-lg-2 col-sm-2 control-label">ID Kriteria Bansos</label>
//                           <div class="col-lg-10">
//                               <input type="text" class="form-control" name="id_kriteria_bansos" placeholder="Masukkan ID Kriteria Bansos">
//                           </div>
//                       </div>
// 					  <div class="form-group">
//                           <label class="col-lg-2 col-sm-2 control-label">Tipe Kriteria Bansos</label>
//                           <div class="col-lg-10">
//                               <!-- <input type="text" class="form-control" name="tipe_kriteria" placeholder="Masukkan Tipe Kriteria "> -->
// 							  <select class="form-control" name="tipe_kriteria">
// 								<option value="Benefit" >Benefit</option>
// 								<option value="Cost">Cost</option>
// 							</select>
//                           </div>
//                       </div>
// 					  <div class="form-group">
//                           <label class="col-lg-2 col-sm-2 control-label">Nilai Bobot</label>
//                           <div class="col-lg-10">
//                               <input type="text" class="form-control" name="nilai_bobot" placeholder="Masukkan Nilai Bobot">
//                           </div>
//                       </div>
//                   </div>
//                   <div class="modal-footer">
//                       <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
//                       <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
//                   </div>
//                  </form>
//              </div>
//          </div>
//      </div>
//  </div>
