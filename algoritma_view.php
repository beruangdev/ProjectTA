<div id="content" class="content">
<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Dashboard</a></li>
	</ol>
	<div class="container">
		<h2 class="text-center">Pilih Algoritma</h2>
		<div class="form-group text-right">
		</div>
		<?=$this->session->flashdata('notif')?>
		<table class="table table-striped table-bordered">
            <thead>
                <tr>
					<th>No.</th>
                    <th>ID</th>
                    <th>Nama Algoritma</th>
					<th>Action</th>
                </tr>
            </thead>
            <tbody>
				<?php $no=0;
				foreach ($algoritma as $algo) 
				{ $no++;
				echo "<tr>";
					echo "<td>$no</td>";
                    echo "<td>$algo->id_algoritma</td>";
					echo "<td>$algo->nama_algoritma</td>";
					echo "<td>
                    <a href='#' class='btn btn-success'>RUN</a>
					</td>";				
				echo "</tr>";
                 } ?>
            </tbody>
        </table>
    </div>


</div>