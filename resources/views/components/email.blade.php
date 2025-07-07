{{--
<x-proton.email title="Email" locale="pl">
	// Email message content
</x-proton.email>
--}}
<!DOCTYPE html>
<html lang="{{ $locale ?? 'pl' }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ $title ?? 'Email message' }}</title>

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
			font-family: 'Baloo 2', 'Google Sans', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
		}

		.proton-table {
			border-collapse: collapse;
			border-spacing: 0;
			border: 0px;
			width: 640px;
			max-width: 90%;
			margin: 100px auto;
			box-shadow: 0px 20px 48px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
			overflow: hidden;
		}

		.proton-table tr {
			background: #ffffff;
		}

		.proton-table td,
		.proton-table th {
			border: 0px;
			border-spacing: 0;
			border-collapse: collapse;
		}

		.proton-table tr td {
			box-sizing: border-box;
		}

		.proton-margin {
			float: left;
			width: 100%;
			overflow: hidden;
			height: 40px;
			padding-bottom: 0px;
			box-sizing: border-box;
		}

		.proton-div {
			float: left;
			width: 100%;
			overflow: hidden;
			box-sizing: border-box;
		}

		.proton-table h1,
		.proton-table h2,
		.proton-table h3,
		.proton-table h4 {
			float: left;
			width: 100%;
			margin: 0px 0px 20px 0px !important;
			padding: 0px;
		}

		.proton-table h1 {
			font-size: 33px;
		}

		.proton-table h2 {
			font-size: 26px;
		}

		.proton-table h3 {
			font-size: 23px;
		}

		.proton-table p {
			float: left;
			width: 100%;
			font-size: 18px;
			margin: 0px 0px 20px 0px !important;
		}

		.proton-table h4 {
			font-size: 20px;
		}

		.proton-table a {
			color: #024ef0;
			font-weight: bold;
		}

		.proton-table a:hover {
			color: #55cc55;
		}

		.proton-table a:active {
			color: #ff6600;
		}

		.proton-table a:visited {
			color: #ff00ff;
		}

		.proton-table a.proton-link {
			display: inline-block;
			width: auto !important;
			outline: none !important;
			text-decoration: none !important;
		}

		.proton-table img,
		.proton-table a img {
			display: inline-block;
			width: auto;
			max-width: 100%;
			margin-bottom: 0px;
			border: 0px;
			border-radius: 10px;
			overflow: hidden;
		}

		.proton-table img.proton-image-mb {
			margin-bottom: 20px;
		}

		.proton-table a.proton-button {
			display: inline-block;
			font-weight: bold;
			font-size: 17px;
			padding: 15px 40px;
			margin: 20px 0px;
			color: #ffffff !important;
			background: #024ef0 !important;
			border-radius: 10px;
			text-decoration: none;
			outline: none;
		}

		.proton-table a.proton-button:hover {
			color: #ffffff !important;
			background: #55cc55 !important;
		}

		.proton-code {
			float: left;
			width: 100%;
			overflow: hidden;
			box-sizing: border-box;
			padding: 15px 40px;
			margin: 20px 0px;
			border: 1px dashed #024ef0aa;
			background: #024ef011;
			color: #024ef0;
			font-weight: 700;
			font-size: 23px;
		}

		.proton-divider {
			float: left;
			width: 100%;
			overflow: hidden;
			margin: 20px 0px;
			border-top: 2px solid #f2f2fd;
		}

		.proton-flex {
			float: left;
			width: 100%;
			text-align: center;
		}

		.proton-flex img {
			margin: 10px;
			max-width: 15%;
			width: 25px;
		}

		.proton-social-link {
			display: inline-block;
			width: 45px;
			height: 45px;
			background: #d8d8e4;
			border-radius: 59%;
		}

		.proton-social-link img {
			margin: 5px !important;
		}

		.proton-rights {
			color: #706d6b;
		}
	</style>

	{{ $style ?? '' }}
</head>

<body class="proton-body">
	<div class="proton-wrapper">
		<table class="proton-table">
			<tbody>
				{{ $slot }}
			</tbody>
		</table>
	</div>
</body>

</html>
