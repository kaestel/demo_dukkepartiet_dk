<?php include_once($_SERVER["LOCAL_PATH"]."/includes/segment.php") ?>
<!DOCTYPE html>
<html lang="DA">
<head>
	<!-- (c) & (p) think.dk, 2015-2018 //-->
	<!-- All material protected by copyrightlaws, as if you didn't know //-->
	<title>Dukke Partiet - Vælgererklæring</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="" />
	<meta name="description" content="Kære politikere, tusind tak for indsatsen - vi tager demokratiet herfra." />
	<meta name="viewport" content="initial-scale=1, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta property="og:image" content="http://dukkepartiet.dk/img/sh_dukkepartiet.png" />

	<link rel="apple-touch-icon" href="/touchicon.png">
	<link rel="icon" href="/favicon.png">

	<link type="text/css" rel="stylesheet" media="all" href="/css/seg_<?= $_SESSION["segment"] ?>.css" />
	<script type="text/javascript" src="/js/seg_<?= $_SESSION["segment"] ?>.js"></script>
</head>

<body class="declaration">

<div id="page" class="i:page">
	<div id="header">
		<ul class="servicenavigation">
			<li class="keynav navigation nofollow"><a href="#navigation">To navigation</a></li>
		</ul>
	</div>

	<div id="content">

<div class="scene receipt i:receipt">

	<h1>Tusind tak</h1>
	<p>Vi har nu modtaget din underskrevne vælgererklæring.</p>

	<h3>Returnér din godkendte vælgererklæring til os</h3>
	<p>Indenfor nogle uger får du din godkendte vælgererklæring tilbage med posten fra Folkeregistret i din kommune. Først når vi modtager den fra dig, tæller den med blandt de 20.260 vælgererklæringer, som vi skal bruge for at kunne stille op til næste folketingsvalg.</p>
	<p>Husk at sende den til os hurtigst muligt!</p>
	<p>
		Du gør det meget hurtigt og nemt ved at tage et foto af den med din smartphone og uploade den til os: 
	</p>
	<ul class="actions">
		<li class="preview"><input type="button" value="Upload vælgererklæring" onclick="location.href='/upload'" /></li>
	</ul>

	<p class="regards">Med venlig hilsen</p>
	<h2>Dukkepartiet</h2>

	<div class="close"><a href="javascript:window.close();">go back</a></div>

</div>


	</div>

	<div id="navigation">
		<ul class="primary">
			<li><a class="front" href="/">Forside</a></li>
			<li><a class="primeminister" href="/statsministerkandidat">Statsministerkandidat?</a></li>
			<li><a class="interview" href="/interview">Dukkerne møder</a></li>
			<li><a class="reform" href="/vision">Vision</a></li>
			<li><a class="bills" href="/lovforslag">Lovforslag</a></li>

			<li><a class="events" href="/kalender">Kalender</a></li>
			<li><a class="mask" href="/print-maske">Print maske</a></li>
		</ul>

	</div>

	<div id="footer" class="i:footer" >
		<!-- Move to fixed menu -->
		<ul class="servicenavigation">
			<li class="support_us"><a href="/stot_os">Støt os</a></li>
			<li class="help_us"><a href="/hjaelp_os">Hjælp os</a></li>
		</ul>

		<!-- Move to menu overlay -->
		<div class="social">
			<h4>Følg Dukkepartiet</h4>
			<ul>
				<li class="facebook"><a href="http://www.facebook.com/dukkepartiet" target="_blank">facebook</a></li>
				<li class="youtube"><a href="http://www.youtube.com/channel/UCWHykjLjMYGVjugW0PYsg5w" target="_blank">youtube</a></li>
				<li class="twitter"><a href="http://twitter.com/Dukkepartiet" target="_blank">twitter</a></li>
				<li class="instagram"><a href="http://instagram.com/dukkepartiet" target="_blank">instagram</a></li>
			</ul>
		</div>

		<!-- Stay in footer -->
		<div class="about">
			<p>Dukkepartiet er et samlingspunkt for alle, der hverken kan eller vil stille sig tilfreds med den aktuelle udformning af det politiske landskab. Partiet består af en gruppe borgere, der ønsker at tage et opgør med vores demokratiforståelse. Et opgør, der skal udstille tomheden for derigennem at genstarte demokratiet.</p>
			<ul class="contacts">
				<li class="contact" itemscope itemtype="http://schema.org/Organization">
					<h4>Kontakt os</h4>
					<div class="address" itemscope itemtype="http://schema.org/PostalAddress">
						<h5 itemprop="name">Dukkepartiet</h5>
						<p itemprop="streetAddress">Postbox 2030</p>
						<p><span itemprop="postalCode">1112 </span><span itemprop="addressLocality">KBH K.</span></p>
					</div>
					<p><a itemprop="email" href="mailto:kontakt@dukkepartiet.dk">kontakt@dukkepartiet.dk</a></p>
				</li>
			</ul>
		</div>
	</div>

</div>

</body>
</html>