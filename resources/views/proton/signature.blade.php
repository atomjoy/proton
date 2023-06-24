<!DOCTYPE html>
<html lang="{{ $locale ?? 'pl' }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ $title ?? 'Email signature' }}</title>

	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

	<style>
		.proton-body {
			display: block;
			padding: 0px;
			margin: 0px;
		}

		.proton-wrapper {
			width: 100%;
			display: block;
			overflow: hidden;
			box-sizing: border-box;
			color: #222;
			background: #f2f2fd;
			font-size: 18px;
			font-weight: normal;
			font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
		}

		.proton-table a.proton-link {
			display: inline-block;
			width: auto !important;
			outline: none !important;
			text-decoration: none !important;
		}
	</style>

	<style>
		.si-wrapper {
			width: 640px;
			margin: 50px auto;
			border: 1px solid #191715;
			border-radius: 20px;
			overflow: hidden;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0px;
			border: 0px;
			width: 640px;
			margin: 0px auto;
			background-color: #F1EBE4;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
		}

		td,
		th {
			padding: 10px 20px;
			border-bottom: 1px solid #191715;
		}

		table {
			border-top-width: 3px;
		}

		.si-foto {
			display: block;
			height: 170px;
			width: 150px;
			object-fit: cover;
			border: 4px solid #ff4400;
			box-shadow: 0px 0px 0px 4px #ff4400aa, 0px 0px 0px 8px #ff440055;
			border-radius: 20px;
			transition: all 1s;
		}

		.si-name {
			color: #191715;
			font-weight: 900;
			font-size: 25px;
			border-left: 1px solid #191715;
		}

		.si-title {
			text-align: left;
			border-left: 1px solid #191715;
		}

		.si-title strong {
			color: #ff4400;
			font-weight: 700;
			font-size: 19px;
		}

		.si-row {
			text-align: left;
			border-left: 1px solid #191715;
		}

		.si-row strong {
			font-weight: 600;
			font-size: 19px;
		}

		.si-social {
			background: #191715;
			color: #F1EBE4;
			padding: 15px;
			border: 0px;
		}

		.si-icon {
			float: left;
			height: 30px;
			width: 30px;
			margin-right: 10px;

		}

		.si-company img {
			float: left;
			width: 150px;
		}
	</style>
</head>

<body class="proton-body">
	<div class="proton-wrapper">
		<div class="si-wrapper">
			<table>
				<tbody>
					<tr>
						<td class="si-company" colspan="2">
							<img src="https://www.freepnglogos.com/uploads/black-netflix-logo-png-4.png" alt="Logo">
						</td>
					</tr>
					<tr class="si-image">
						<td rowspan="4" width="150px">
							{{-- <img class="si-foto" src="https://img.freepik.com/free-photo/fashion-boy-with-yellow-jacket-blue-pants_71767-96.jpg?w=740&t=st=1687603414~exp=1687604014~hmac=e996a267d60cb3bb9467733a6fb6a5116c49020aa25efb3610f90fcb9ae83de9" alt="Foto"> --}}
							<img class="si-foto" src="https://xsgames.co/randomusers/avatar.php?g=female" alt="Foto">
							{{-- <img class="si-foto" src="https://i.pravatar.cc/150" alt="Foto"> --}}
							</th>
						<td class="si-name">Alex Cosmonova</th>
					</tr>
					<tr>
						<td class="si-title"><strong>Web Developer</strong></td>
					</tr>
					<tr>
						<td class="si-row"><strong>Netflix Novatec Ltd.</strong></td>
					</tr>
					<tr>
						<td class="si-row">
							<div>Email: <strong>alex@astralio.xyz</strong></div>
							<div>Phone: <strong>+48 100 200 300</strong></div>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="si-social">
							<a href="" class="proton-link"><img class="si-icon" src="https://img.icons8.com/?size=128&id=16713&format=png"></a>
							<a href="" class="proton-link"><img class="si-icon" src="https://img.icons8.com/?size=128&id=13963&format=png"></a>
							<a href="" class="proton-link"><img class="si-icon" src="https://img.icons8.com/?size=128&id=32323&format=png"></a>
							<a href="" class="proton-link"><img class="si-icon" src="https://img.icons8.com/?size=128&id=19318&format=png"></a>
							<a href="" class="proton-link"><img class="si-icon" src="https://img.icons8.com/?size=128&id=Wkmw3VcFPr8T&format=png"></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>