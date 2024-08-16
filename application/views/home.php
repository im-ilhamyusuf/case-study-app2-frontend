<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Auth</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="container">
		<div class="row" style="height: 100vh;">
			<div class="d-flex flex-column align-items-center justify-content-center">
				<div class="mb-4 text-center">
					<h2>Selamat datang di Aplikasi 2</h2>
					<h3 id="name" class="mb-2"></h3>
					<a href="http://localhost/app1_frontend" class="btn btn-primary"><i class="fa-solid fa-arrow-right me-2"></i> Aplikasi 1</a>
				</div>
				<button class="btn btn-danger" id="buttonLogout">Logout</button>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<script>
		$(document).ready(e => {
			const isLogin = localStorage.getItem('tokenSSO') ? true : false;
			
			if( !isLogin ) {
				window.location.href = 'http://localhost/auth_frontend?redirect=app2_frontend'	
			} else {
				document.getElementById('name').innerHTML = JSON.parse(localStorage.getItem('userData'))['name']
			}
		})

		$('#buttonLogout').on('click', e => {
			localStorage.removeItem('tokenSSO')
			localStorage.removeItem('userData')

			window.location.reload()
		})
	</script>
</body>

</html>
