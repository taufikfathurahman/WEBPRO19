<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Akun Mi - Masuk</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
</head>
<body style="background-color:rgb(247, 247, 247)">
	<div class="container" align="center">
		<div class="card" style="height:620px; width: 870px">
			<div class="card-body">
				<div>
					<img style="width:50px; margin-top:30px" src="<?php echo base_url("assets/image/icon2.PNG");?>" alt="icon mi">
				</div>
				<p style="margin-top: 25px; margin-bottom: 40px;font-size: 28px; font-weight: 400">Masuk ke Akun Mi Anda</p>
				<form action="<?php echo site_url('C_User/login'); ?>" method="POST">
					<div class="form-group" style="width:370px">
						<input type="email" name="email" style="margin-bottom:20px; height: 50px" class="form-control" placeholder="Email/Telepon/Akun Mi">
						<input type="password" name="password" style="margin-bottom:25px; height: 50px" class="form-control"  placeholder="Sandi">
					</div>

					<div>
						<button type="submit" style="width:370px; height: 50px; background-color: rgb(255, 123, 0)" type="button" class="btn text-light">Masuk</button>
					</div>
				</form>
				<form action="#">
					<div style="margin-top: 35px">
						<span><a href="<?php echo site_url('C_Login/register'); ?>" class="text-secondary" href="">Buat akun</a></span>
						<span class="text-secondary"> | </span>
						<span><a class="text-secondary" href="">Lupa sandi?</a></span>
					</div>
					<div style="margin-top: 40px">
						<span></span>
						<span><a class="text-secondary" href="">Pilihan lainnya</a></span>
						<span></span>
					</div>
					<div style="margin-top: 10px">
						<span><img style="width:30px; margin-right: 30px" src="<?php echo base_url("assets/image/facebook.png");?>" alt=""></span>
						<span><img style="width:30px; " src="<?php echo base_url("assets/image/google.png");?>" alt=""></span>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- FOOTER WOY -->
	<div align="center" style="margin-top:20px">
		<span style="margin-right:15px;"><a class="text-body" href="">Bahasa Indonesia</a></span>
		<span style="margin-right:15px;"><a class="text-secondary" href="">English</a></span>
		<span style="margin-right:15px;" class="text-secondary">|</span>
		<span style="margin-right:15px;"><a class="text-secondary" href="">Pertanyaan umum</a></span>
		<span style="margin-right:15px;" class="text-secondary">|</span>
		<span style="margin-right:15px;"><a class="text-secondary" href="">Kebijakan Privasi</a></span>
	</div>
</body>

</html>
