                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                    	<!-- Page Heading -->
                    	<div class="card shadow mb-4">
                    		<div class="card-header py-3">
                    			<h6 class="m-0 font-weight-bold text-success">Halaman Data Pengembalian
                    				<!-- Button trigger modal -->
                    				<a href="<?=base_url('Home/tambah_peminjam') ?>" class="btn btn-success float-right"
                    					data-bs-toggle="modal" data-bs-target="#exampleModal">
                    					<i class ="fas fa-plus"></i>
                    					Tambah Data
                    				</a>
                    		</div>
                    		<div class="card-body">
                    			<div class="table-responsive">
                    				<table class="table table-bordered text-center" id="dataTable" width="100%"
                    					cellspacing="0">
                    					<thead>
                    						<tr>
                    							<td>No transaksi</td>
                    							<td>No anggota</td>
                    							<td>Nama</td>
                    							<td>Kelas</td>
                    							<td>Status</td>
                    							<td>Kode buku</td>
                    							<td>Judul buku</td>
                    							<td>Pengarang</td>
                    							<td>Penerbit</td>
                    							<td>Tgl pinjam</td>
                    							<td>Tgl harus kembali</td>
                                                <td>Aks</td>

                    						</tr>
                    					</thead>
                    					<tbody>
                    						<?php
                                         foreach($peminjam as $pmj):
                                              ?>
                    						<tr>
                    							<td><?php echo $pmj['no_transaksi'];?></td>
                    							<td><?php echo $pmj['no_anggota'];?></td>
                    							<td><?php echo $pmj['nama'];?></td>
                    							<td><?php echo $pmj['kelas'];?></td>
                    							<td><?php echo $pmj['status'];?></td>
                    							<td><?php echo $pmj['kode_buku'];?></td>
                    							<td><?php echo $pmj['judul_buku'];?></td>
                                                <td><?php echo $pmj['pengarang'];?></td>
                                                <td><?php echo $pmj['penerbit'];?></td>
                                                <td><?php echo $pmj['tgl_pinjam'];?></td>
                                                <td><?php echo $pmj['tgl_harus kembali'];?></td>
                    							<td>
                    								<a href="<?php echo base_url('') ?>
													Home/edit_peminjam/<?php echo $pmj['no_transaksi'];?>" class="btn btn-primary"><i
                    										class="fa fa-edit"></i></a>
                    								<a href="<?php echo base_url() ?>Home/hapus_peminjam/<?php echo $pmj['no_transaksi'];?>"
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
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    	aria-hidden="true">
                    	<div class="modal-dialog">
                    		<div class="modal-content">
                    			<div class="modal-header">
                    				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    				<button type="button" class="btn-close" data-bs-dismiss="modal"
                    					aria-label="Close"></button>
                    			</div>
                    			<div class="modal-body">
                    				...
                    			</div>
                    			<div class="modal-footer">
                    				<button type="button" class="btn btn-secondary"
                    					data-bs-dismiss="modal">Close</button>
                    				<button type="button" class="btn btn-primary">Save changes</button>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <!-- Akhir modal-->
