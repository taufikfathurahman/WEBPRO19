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
				<a class="nav-link" href="#">Pesanan Saya</a>
			</li>
		</ul>
	</div>
</nav>

<div class="akun" style="background-color:#eee;">
<div class="card-body-0">
        <div class="row justify-content-left">
            <div class="col-3 p-4">
                <div class="card o-hidden border-0 my-5" style="background-color:white;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg">
                                <div class="container">
                                    <h3 class="mt-5">PESANAN</h3>
                                    <div>
                                        <button class="btn btn-outline-secondary btn-block p-1 mt-6 border-0">Pesanan Saya</button><hr>
                                        <a href="<?php echo site_url('C_Kembali'); ?>"><button class="btn btn-outline-secondary btn-block p-1 border-0" >Pengembalian</button><hr></a>
                                    </div>
                                </div>
                                <div class="container">
                                    <h3 class="mt-4 mb-5">MI SAYA</h3>
                                    <div style="margin-top:-20px">
                                        <button class="btn btn-outline-secondary btn-block p- mt-5 border-0">Akun Saya</button><hr>
                                        <button class="btn btn-outline-secondary btn-block p- border-0">Kupon</button><hr>
                                        <button class="btn btn-outline-secondary btn-block p- border-0">F-Code</button><hr>
                                        <button class="btn btn-outline-secondary btn-block p- border-0">Buku Alamat</button><hr>
                                        <button class="btn btn-outline-secondary btn-block p- border-0">Pesan</button><hr>
                                        <button class="btn btn-outline-secondary btn-block p- border-0">Notifikasi</button><hr>
                                        <div class="mb-5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 pt-4">
                <div class="card o-hidden border:none my-5" style="background-color:white;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg">
                                <div class="container border:none">
                                <div class="bagan1 ">
                                    <h3 class="mt-5" style="font-size:40px;">PESANAN SAYA</h3>
                                    <center>
    <div class="orderMurid">
        <div class="card text-center card-center" style="width: 60rem;">
            <div class="card-header" style="background-color:#fefefe">
                <nav>
                    <div class="nav justify-content-center" id="nav-tabs" role="tablist">
                        <a class="nav-item nav-link active" id="nav-awal-tab" data-toggle="tab" href="#nav-awal" role="tab" aria-controls="nav-awal" aria-selected="true">Semua</a>
                        <a class="nav-item nav-link" id="nav-order-tab" data-toggle="tab" href="#nav-order" role="tab" aria-controls="nav-order" aria-selected="false">Menunggu pembayaran(0)</a>
                        <a class="nav-item nav-link" id="nav-aktif-tab" data-toggle="tab" href="#nav-aktif" role="tab" aria-controls="nav-aktif" aria-selected="false">Ongkos Kirim(0)</a>
                        <a class="nav-item nav-link" id="nav-histori-tab" data-toggle="tab" href="#nav-histori" role="tab" aria-controls="nav-histori" aria-selected="false">Ditutup</a>
                    </div>
                </nav>

                    <!-- homeles -->
                    <div class="tab-pane fade" id="nav-awal" role="tabpanel" aria-labelledby="nav-awal-tab">
                        <div class="card" style="width:;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p class="card-title text-left">Tidak ada open orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- order -->
                    <div class="tab-pane fade" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                        <div class="card" style="margin-top:-35px">
                            <div class="row">
                                <div class="col-xs-8">
                                    <p class="card-title text-left">Tidak ada orders awaiting payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- aktif -->
                    <div class="tab-pane fade" id="nav-aktif" role="tabpanel" aria-labelledby="nav-aktif-tab">
                        <div class="card border-0 " style="margin-top:-45px">
                            <p class="card-title text-left">Tidak ada oustanding orders</p>
                        </div>
                            
                    </div>
                    <!-- histori -->
                    <div class="tab-pane fade" id="nav-histori" role="tabpanel" aria-labelledby="nav-histori-tab">
                        <div class="card border-0 mb-3 mx-auto" style="width:60rem;margin-top:-45px">
                            <p class="card-title text-left">Tidak ada close orders</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>