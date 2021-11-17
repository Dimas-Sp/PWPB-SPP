<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php')?>
</head>

<body id="page-top">
  <div id="wrapper">
		
	<!-- Sidebar -->
    <?php $this->load->view('admin/_partials/sidebar.php')?>
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
				
        <!-- TopBar -->
        <?php $this->load->view('admin/_partials/navbar.php')?>
        <!-- Topbar -->

       

          <!-- MAIN CONTENT-->
		  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card mb-3">
                        <div class="card-header">
                             <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        </div>
                   
                        <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/siswa/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="<?php base_url('admin/siswa/add') ?>" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="nisn">Nisn*</label>
                                    <input class="form-control <?php echo form_error('nisn') ? 'is-invalid':'' ?>"
                                     type="text" name="nisn" placeholder="NIsn" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nisn') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nis">Nis*</label>
                                    <input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
                                     type="number" name="nis" min="0" placeholder="Nis" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nis') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama*</label>
                                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                     type="text" name="nama" min="0" placeholder="nama" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_kelas">Kelas*</label>
                                    <input class="form-control <?php echo form_error('id_kelas') ? 'is-invalid':'' ?>"
                                     type="number" name="id_kelas" min="0" placeholder="id_kelas" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_kelas') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">alamat*</label>
                                    <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                     type="text" name="alamat" min="0" placeholder="alamat" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('alamat') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_telp">No Telepon*</label>
                                    <input class="form-control <?php echo form_error('id_telp') ? 'is-invalid':'' ?>"
                                     type="number" name="id_telp" min="0" placeholder="id_telp" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_telp') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_login">ID Login*</label>
                                    <input class="form-control <?php echo form_error('id_login') ? 'is-invalid':'' ?>"
                                     type="number" name="id_login" min="0" placeholder="id_login" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_login') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_spp">ID Spp*</label>
                                    <input class="form-control <?php echo form_error('id_spp') ? 'is-invalid':'' ?>"
                                     type="number" name="id_spp" min="0" placeholder="id_spp" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_spp') ?>
                                    </div>
                                </div>
                                <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                            </form>
                        </div>
                        <div class="card-footer small text-muted">
                            * required fields
                        </div>
                    </div>
                   <?php $this->load->view("admin/_partials/footer.php") ?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

          <!-- Modal Logout -->
          <?php $this->load->view('admin/_partials/modal.php')?>

        </div>
        <!---Container Fluid-->
      </div>
      
    </div>
  </div>

  <!-- Scroll to top -->
  <?php $this->load->view('admin/_partials/scrolltop.php')?>

  <?php $this->load->view('admin/_partials/js.php')?>
</body>

</html>
