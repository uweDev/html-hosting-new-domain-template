<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="de"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="de"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="de"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
<!--
This is a Open-Source-Software.
This open source software was released on 24.11.2019 by Uwe Hellmann and is subject to the MIT License.
You can download this Open-Source-Software from here: https://github.com/uweDev/html-hosting-new-domain-template
-->
    <head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Domain reserved</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			font-family: Open Sans, sans-serif;
		}
		h2 {
			font-size: 15px;
			font-weight: 900;
			color: #a00c57;
		}
		p {
			font-size: 20px;
			margin-bottom: 40px;
		}
		p + h2 + p {
			margin-bottom: 0;
		}
		.text-center {
			text-align: center;
		}
		header {
			background-color: #e6e6e6;
			padding: 30px 10px;
		}
		.reservedDomainContent {
			padding: 12% 30%;
		}
		footer {
			background-color: #a00c57;
			color: #fff;
			padding: 60px 10px;
		}
		footer a {
			text-decoration: none;
			color: #fff;
		}
	    </style>
	</head>
	<body>
		<div class="reservedDomainContainer">
			<header class="text-center">
				<h1><a href="#">Your Logo</a></h1>
			</header>
			<div class="reservedDomainContent">
				<h2>Deutsch</h2>
				<p>Diese Domain (<?php echo $_SERVER["SERVER_NAME"]; ?>) wurde soeben freigeschaltet. Es wurden noch keine Inhalte hinterlegt.</p>
				<h2>English</h2>
				<p>This domain (<?php echo $_SERVER["SERVER_NAME"]; ?>) is now reserved. As of now, no content has been uploaded.</p>
			</div>
			<footer class="text-center">
				<a href="#">Powered by Your LOGO</a>
			</footer>
		</div>
	</body>
</html>
