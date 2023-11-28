<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-edit" style="color:green"> </i>  Verifikasi User - <?= $user[0]['nama'] ?>
    </h1>
    <ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-edit"></i>&nbsp; Verifikasi User - <?= $user[0]['nama'] ?> </li>
    </ol>
  </section>
  <section class="content">
	<div class="row">
	    <div class="col-md-12">	
	        <div class="box box-primary">
                <div class="box-header with-border">
                </div>
			    <!-- /.box-header -->
			    <div class="box-body">
					<div class="row">
						<div class="col-md-12 text-center">
							<img class="rounded mx-auto d-block" src="<?= base_url("/assets_style/image/paymentCheck/").$user[0]['foto']?>" alt="Card image cap" style="height:500px;">
						</div>
					</div>
					<div class="pull-right">
						<a href="<?= base_url("user")?>">
							<button class="btn btn-secondary">Kembali</button>
						</a>
						<a href="<?= base_url("user/ver/").$id?>">
							<button class="btn btn-success">Verifikasi</button>
						</a>
					</div>
		        </div>
	        </div>
	    </div>
    </div>
</section>
</div>
