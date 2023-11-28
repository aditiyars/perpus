<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title_web ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url();?>assets_style/assets/css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url();?>assets_style/assets/css/app.css">
</head>

<body class="bg-color-one">

    <?php if($this->session->flashdata('pesan')): ?>
      <div class="custom-alert active">
        <?php if($this->session->flashdata('pesan') === 'username taken') : ?>
            <span>Username sudah pernah digunakan</span>
        <?php elseif($this->session->flashdata('pesan') === 'upload failed') : ?>
            <span>Gagal upload gambar ! Tipe file gambar tidak diizinkan.</span>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-image">
							              </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sistem Informasi<br><b>Perpustakaan Daerah</b></h1>
                                    </div>
                                    <form action="<?= base_url('register/joinMembership');?>" method="POST" class="user" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control"
                                                id="fullname" name="fullname" required="required"
                                                placeholder="Masukkan nama lengkap anda...">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control"
                                                id="username" name="username" required="required"
                                                placeholder="Masukkan username...">
                                        </div>
                                        <div class="form-group">
                                          <label for="password">Password</label>
                                            <input type="password" class="form-control"
                                                id="password" name="password" placeholder="Masukkan password...">
                                        </div>
                                        <div class="form-group">
                                          <label for="phone">No. Telepon</label>
                                            <input type="text" class="form-control"
                                                id="phone" name="phone" placeholder="Masukkan nomor telepon...">
                                        </div>
                                        <div class="form-group">
                                            <label for="birth">Tanggal Lahir</label>
                                            <input type="date" class="form-control"
                                                id="birth" name="birth">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Jenis Kelamin</label>
                                            <select name="gender" id="gender" class="form-control">
                                              <option value="Laki-Laki">Laki-Laki</option>
                                              <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="address">Alamat</label>
                                            <textarea class="form-control" name="address" id="address" placeholder="Masukkan Alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label for="gambar">Bukti Bayar Pendaftaran</label>
                                          <input type="file" name="gambar" class="form-control" accept="image/jpg, image/jpeg, image/png">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary bg-color-four btn-user btn-block " type="submit">
                                                Daftar Membership
                                            </button>
                                        </div>
                                        <div class="form-group">
                                          <a href="<?= base_url()?>login" class="btn btn-primary form-control" role="button " >Sudah menjadi anggota</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="<?= base_url();?>assets_style/assets/scripts/flashAlert.js"></script>

</body>
</html>
