<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<title>Backend</title>

	</head>

	<body>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
		<script type="text/javascript">
            $(document).ready(function(){
                $('.modal').modal();
                $('select').material_select();
            });
        </script>
		
		<nav>
			<div class="nav-wrapper">
				<a href="/" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="/promo">Promos</a></li>
					<li><a href="/fichier">Fichiers</a></li>
				</ul>
			</div>
		</nav>

		<div id="content">
			<div id="main">
				<?php echo $content; ?>
			</div>
		</div>

	</body>
</html>