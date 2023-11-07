<?= $this->extend('components/layout') ?>
		<?= $this->section('content') ?>
		<?php
		if(session()->getFlashData('success')){
		?> 
		<div class="alert alert-info alert-dismissible fade show" role="alert">
			<?= session()->getFlashData('success') ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php
		}
		?>
		<?php
		if(session()->getFlashData('failed')){
		?> 
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<?= session()->getFlashData('failed') ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php
		}
		?>

	<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Bouqetta</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                    <p class="text-center small">Masukkan data anda untuk buat akun</p>
                  </div>

				<form action="<?= base_url('user_add') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Masukkan Username Anda</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Masukkan Password Anda</div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun? <a href="<?= base_url() ?>login">Login</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>
		<?= $this->endSection() ?>