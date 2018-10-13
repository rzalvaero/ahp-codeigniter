<?php require_once(APPPATH.'views/include/headlogin.php'); ?>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form" action="<?php echo site_url('login/ath')?>" method="post">
					<span class="login100-form-title p-b-34">
						Penilaian PM5/6/9 Pura
					</span>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
<div id="dropDownSelect1"></div>
<!-- <script type="text/javascript">
	$(document).ready(function(){
		//clickforcebyuser
		$("form").on('submit', function(event) {
		event.preventDefault();
		var isbn = $('#inputISBN').val();
		var judul_buku = $('#inputJudul').val();
		var pengarang = $('#inputPengarang').val();
		var penerbit = $('#inputPenerbit').val();
		var jenis = $('#inputJenis').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url();?>index.php/welcome/chkISBN",
				data: {isbn:isbn,
							 pengarang:pengarang,
							 judul_buku:judul_buku,
							 penerbit:penerbit,
							 jenis:jenis},
				success: function(data){
				}
			}).done(function(data){
				alert(data); // This will be called after the ajax executed
			});

		});
	});
</script> -->
</body>
</html>
