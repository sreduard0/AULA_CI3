<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo ($title) ?> </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="assets/css/main.css">



	<?php echo ($assets) ?>
</head>

<body>
	<header>
		<nav class="d-flex justify-content-center">
			<img id="logo" src="https://leadforce.com.br/assets/uploads/nt_conteudo_geral/97426-logo-lf-header.png?v=1699053174" class="fostrap-logo mt-4" />
		</nav>
	</header>
	<div class="wrapper">

		<?php echo ($content) ?>
	</div>
	<footer class="py-3 my-4 border-top">
		<ul class="nav justify-content-center">
			<li class="ms-3 text-primary">
				<i class="ion ion-social-facebook"></i>
			</li>
			<li class="ms-3 text-danger">
				<i class=" ion ion-social-instagram"></i>
			</li>

			<li class="ms-3 text-success">
				<i class="ion ion-social-whatsapp"></i>
			</li>
		</ul>
		<p class="text-center text-muted">©2022 Eduardo Martins</p>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script>
		$(window).on("scroll", function() {
			if ($(window).scrollTop()) {
				$('nav').addClass('navbar-color');
				$('#logo').removeClass('mt-4');
			} else {
				$('nav').removeClass('navbar-color');
				$('#logo').addClass('mt-4');
			}
		})
	</script>
</body>

</html>
