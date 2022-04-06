              <!-- Begin Page Content -->
              <div class="container-fluid">

                <!-- Page Heading -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Halaman Data Buku
                      <!-- Button trigger modal -->
                      <a href="<?=base_url('Home/tambah_data') ?>" class="btn btn-success float-right"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus"></i>
                        Tambah Data
                      </a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <td>no</td>
                            <td>nama</td>
                            <td>alamat</td>
                            <td clospan="2">aksi</td>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                                      $no=1;
                                      foreach($mahasiswa as $mhs):
                                      ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $mhs['nama'];?></td>
                            <td><?php echo $mhs['alamat'];?></td>
                            <td>
                              <a href="<?php echo base_url('') ?>
                              Home/edit_data/<?php echo $mhs['id_mahasiswa'];?>" class="btn btn-primary"><i
                                  class="fa fa-edit"></i></a>
                              <a href="<?php echo base_url() ?>Home/hapus_data/<?php echo $mhs['id_mahasiswa'];?>"
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
              <!--Akhir Modal-->
