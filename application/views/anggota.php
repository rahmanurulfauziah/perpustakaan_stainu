<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-success">Halaman Data Anggota
				<!-- Button trigger modal -->
				<a href="<?=base_url('Home/tambah_anggota') ?>" class="btn btn-success float-right"
	data-bs-toggle="modal" data-bs-target="#exampleModal">
	<i class ="fas fa-plus"></i>
	Tambah Data
</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<td>id anggota</td>
							<td>Nama</td>
							<td>Kelas</td>
							<td>Jenis kelamin</td>
							<td>Tempat lahir</td>
							<td>Tgl lahir</td>
							<td>Alamat</td>
							<td>setting</td>
						</tr>
					</thead>
					<tbody>
						<?php
  
 foreach($anggota as $agt):
?>
						<tr>
							<td><?php echo $agt['id_anggota'];?></td>
							<td><?php echo $agt['nama'];?></td>
							<td><?php echo $agt['kelas'];?></td>
							<td><?php echo $agt['jenis_kelamin'];?></td>
							<td><?php echo $agt['tempat_lahir'];?></td>
							<td><?php echo $agt['tgl_lahir'];?></td>
							<td><?php echo $agt['alamat'];?></td>
							<td>
								<a href="<?php echo base_url('') ?>
        home/edit_anggota/<?php echo $agt['id_anggota'];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
								<a href="<?php echo base_url() ?>home/hapus_anggota/<?php echo $agt['id_anggota'];?>"
									class="btn btn-danger"><i class="fa fa-trash"></i></a>
							</td>
						</tr>

						<?php endforeach; ?>
					</tbody>
			</div>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
<!-- Akhir modal-->
