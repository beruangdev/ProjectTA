<div id="content" class="content">
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Kriteria</a></li>
	</ol>
	<h2 class="page-header mb-3">Tambah Kriteria</h2>
	<p>Anda dapat mengelola data kriteria</p>

	<div class="container">
	<table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kriteria</th>
                    
                </tr>
            </thead>
            <tbody>
				<?php 
				foreach ($kriteria as $result) 
				{
					echo "<tr>"; 
					echo "<td>$result->id_kriteria</td>";
					echo "<td>$result->nama_kriteria</td>";
					echo "</tr>";
				} ?>
            </tbody>
        </table>
    </div>
  
</div>