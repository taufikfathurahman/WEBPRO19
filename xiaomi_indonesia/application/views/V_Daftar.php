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
		<div class="card" style="height:800px; width: 870px">
			<div class="card-body">
				<div>
					<img style="width:50px;" src="<?php echo base_url("assets/image/icon2.PNG");?>" alt="icon mi">
				</div>
				<p style="margin-top: 15px; margin-bottom: 10px;font-size: 28px; font-weight: 400">Buat Akun Mi</p>
				<form action="<?php echo site_url('C_User/Register'); ?>" method="POST">
					<div class="form-group" style="width:370px">
						<div align="left">
								<label for="negara">Negara</label>
						</div>
						<input id="negara" name="negara" style="margin-bottom:10px; height: 50px" class="form-control" type="text" placeholder="Indonesia">
						<div align="left">
								<label for="email">Email</label>
						</div>
						<input id="email" name="email" style="margin-bottom:10px; height: 50px" class="form-control" type="email" placeholder="Masukkan alamat email">
						<div align="left">
								<label for="Password">Password</label>
						</div>
						<input id="password" name="password" style="margin-bottom:10px; height: 50px" class="form-control" type="password" placeholder="Masukkan Sandi">

						<input id="re_pass" name="re_pass" style="margin-bottom:10px; height: 50px" class="form-control" type="password" placeholder="Masukkan Ulang Sandi">
					</div>
					<div>
						<button style="width:370px; height: 50px; background-color: rgb(255, 123, 0)" type="submit" class="btn text-light">Buat Akun Mi</button>
					</div>
					<div>
						<button style="margin-bottom:80px; margin-top:10px; width:370px; height: 50px; border: 1px solid rgb(201, 201, 201)" type="button" class="btn btn-light">Buat menggunakan nomor telepon</button>
					</div>
				</form>
				<span><input type="radio"><a style="margin-left:15px;" class="text-body">Dapatkan info dan penawaran terbaru dari Mi Store.</a></span><br><br>
				<span><input type="radio"><a style="margin-left:15px;" class="text-body">Dengan membuat akun, Anda menyetujui <span style="font-weight:700">Perjanjian Pengguna</span> dan <span style="font-weight:700">Kebijakan Privasi</span>kami.</a></span>
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
