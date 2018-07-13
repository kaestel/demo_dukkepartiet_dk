<?php include_once($_SERVER["LOCAL_PATH"]."/includes/segment.php") ?>
<?php include_once($_SERVER["LOCAL_PATH"]."/includes/functions.inc.php") ?>
<?

$name            = getPost("name");
$address1        = getPost("address1");
$address2        = getPost("address2");
$postal          = getPost("postal");
$city            = getPost("city");
$municipality    = getPost("municipality");
$cpr_1           = getPost("cpr_1");
$cpr_2           = getPost("cpr_2");

$date_data       = getPost("date_data");
$signature_data  = getPost("signature_data");

?>
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

<div class="scene dataform i:dataform">

	<h1>Vælgererklæring</h1>
	<p>Hjælp os med at opstille til folketingsvalget, ved at udfylde den digitale vælgererklæring.</p>
	<p>Indtast dine personlige oplysninger i formularen herunder:</p>

	<form name="declaration" action="/vaelgererklaering/signature" method="post">
		<fieldset>

			<div class="field string required">
				<label for="name">Navn</label>
				<input type="text" name="name" id="name" value="<?= $name ?>" />
			</div>

			<div class="field string required">
				<label for="address1">Adresse 1</label>
				<input type="text" name="address1" id="address1" value="<?= $address1 ?>" />
			</div>

			<div class="field string">
				<label for="address2">Adresse 2</label>
				<input type="text" name="address2" id="address2" value="<?= $address2 ?>" />
			</div>

			<div class="field postalcity required">
				<label for="postal">Postnr. og by</label>
				<input type="tel" name="postal" class="postal" id="postal" value="<?= $postal ?>" />
				<input type="text" name="city" class="city" value="<?= $city ?>" />
			</div>

			<div class="field string required">
				<label for="municipality">Kommune</label>
				<input type="text" name="municipality" id="municipality" value="<?= $municipality ?>" />
			</div>

			<div class="field cpr required">
				<label for="cpr">CPR</label>
				<input type="tel" name="cpr_1" value="<?= $cpr_1 ?>" id="cpr" class="cpr1" /><span>-</span><input type="tel" name="cpr_2" value="<?= $cpr_2 ?>" class="cpr2" />
			</div>

		</fieldset>

		<ul class="actions">
			<li><input type="submit" value="Fortsæt"></li>
		</ul>
	</form>

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