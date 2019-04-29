<nav class="navbar navbar-expand-sm   navbar-light bg-light">
	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="#">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><img style="height:25px" src="assets/image/next.png"></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Aksesoris</a>
			</li>
		</ul>
	</div>
</nav>
<nav style="margin-top:20px; margin-bottom:20px" class="navbar transparent navbar-expand-lg navbar-light">
	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="#">PERANGKAT</a>
			</li>
			<li class="nav-item" style="margin-left:70px">
				<a class="nav-link" href="#">Semua</a>
			</li>
			<li class="nav-item" style="margin-left:70px">
				<a class="nav-link" href="#">Redmi</a>
			</li>
			<li class="nav-item" style="margin-left:70px">
				<a class="nav-link" href="#">Mi3</a>
			</li>
			<li class="nav-item" style="margin-left:70px">
				<a class="nav-link" href="#">Note</a>
			</li>
			<li class="nav-item" style="margin-left:70px">
				<a class="nav-link" href="#">Redmi1S</a>
			</li>
		</ul>
	</div>
</nav>
<nav class="navbar navbar-expand-sm   navbar-light bg-light">
	<div style="margin-top:20px; margin-bottom:20px" class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="#" style="color: #FF6700; font-weight: bold">RELEVANSI</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" style="font-weight: bold">BARU</a>
			</li>
		</ul>
	</div>
</nav>

<!-- Page Content -->
<div class="container">

	<div class="row">
		<?php foreach($image as $data): ?>
		<div class="col-lg-3 col-sm-6 mb-4">
			<div class="card h-100">
				<a href="<?php echo site_url('C_IsiKeranjang'); ?>"><img class="card-img-top"
						src="<?php echo base_url(); ?>Uploads/<?php echo $data['img_barang']; ?>" alt=""></a>
				<div class="card-body" align="center">
					<h4 class="card-title">
						<a href="<?php echo site_url('C_IsiKeranjang'); ?>" style="color: black"><?php echo $data['nama_barang']; ?></a>
					</h4>
					<h6 class="card-title">
						<a href="<?php echo site_url('C_IsiKeranjang'); ?>" style="color: #FF6700">Rp<?php echo $data['harga_barang']; ?></a>
					</h6>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<!-- /.row -->

	<!-- Pagination -->
	<ul class="pagination justify-content-center">
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item">
			<a class="page-link" href="#">1</a>
		</li>
		<li class="page-item">
			<a class="page-link" href="#">2</a>
		</li>
		<li class="page-item">
			<a class="page-link" href="#">3</a>
		</li>
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>

</div>
<!-- /.container -->
