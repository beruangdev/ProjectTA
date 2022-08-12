<div id="content" class="content">
<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Dashboard</a></li>
		<!-- <button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Data Baru</button> -->
	</ol>
<body>
	<div class="container">
		<h1 class="text-center">Daftar Calon Penerima Bansos</h1>
		<p class="text-center">Anda dapat mengelola data calon penerima bansos</p>
		<div class="form-group text-right">
			<a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary">Tambah</a>
			<a class="btn btn-info" href="<?php echo base_url('Algoritma'); ?>">Cek Penerima Bansos</a>
		</div>
		<table class="table table-striped table-bordered">
            <thead>
                <tr>
					<th>No</th>
					<th>id Calon Penerima</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No HP</th>
					<th>Kriteria</th>
					<th>Data</th>
					<th>Action</th>
                </tr>
            </thead>
            <tbody>
			<?php
			$no = 0;
				foreach ($alternatif as $result) { 
				$no++;
				echo "<tr>";
					echo "<td>$no</td>";
					echo "<td>$result->id_calon_penerima</td>";
					echo "<td>$result->nama_calon_penerima</td>";
					echo "<td>$result->alamat</td>";
					echo "<td>$result->no_HP</td>";
					echo "<td>$result->id_kriteria</td>";
					echo "<td>$result->data</td>";
					echo "<td>
								<a class='btn btn-warning'>Ubah</a>
								<a class='btn btn-danger'>Hapus</a> 
						<td/>";
					
				echo "</tr>";
				} ?>
            </tbody>
        </table>
    </div>
</div>