<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{ $title ?? 'Iniciado com Laravel' }}</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle>
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/admin">Laravel iniciante</a>
			</div>
		</div>
	</nav>
	<main>
		<section class="container">
			{{ $slot }}
		</section>
	</main>
	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>