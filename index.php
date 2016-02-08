<!DOCTYPE HTML>
<!--
  2016 Sourcefabric / www.sourcefabric.org
  Find the site sources on github: https://github.com/MiczFlor/FWDmedia2016
  Free for personal and commercial use under the CCA 3.0 license 
  Site built on top of the theme Spectral by HTML5 UP / html5up.net | @n33co / html5up.net/license
-->
<html>
<?php

//////////////////////////////////////
// MULTILINGUAL STUFF

// read default language to make sure there is something to work with
include("lang-def.php");
$l = $lang['def']; // $l is the array for multilingual items

// set default user language if none chosen
$lselect = "en";

// read language from URL
if(isset($_GET["l"])) {
  // see if there is a matching language file
  if(file_exists("lang-".$_GET["l"].".php")) {
    $lselect = $_GET["l"]; 
  }
} 

// now read the language items one by one to overwrite default values 
include("lang-".$lselect.".php");
foreach($lang[$lselect] as $key => $value) {
  $l[$key] = $value;
}

// end of MULTILINGUAL STUFF
//////////////////////////////////////

?>
	<head>
		<title><FWD:media></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300,300italic|Roboto+Slab:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- General Metatags and social -->
    <meta name="copyright" content="<?php echo $l['meta-copyright']; ?>" />
    <meta name="DC.title" content="<?php echo $l['meta-title']; ?>" />
    <meta property="og:title" content="<?php echo $l['meta-description']; ?>">
    <meta property="og:site_name" content="<?php echo $l['meta-title']; ?>" />
    <meta property="og:url" content="https://fwd.media/">
    <meta property="og:image" content="<?php echo $l['meta-img-url']; ?>"/>
    <meta property="og:description" content="<?php echo $l['meta-description']; ?>" />
    <meta property="article:author" content="https://fwd.media/" />
    <meta property="article:publisher" content="https://www.facebook.com/Sourcefabric" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@sourcefabric">
    <meta name="twitter:creator" content="@sourcefabric">
    <meta name="twitter:title" content="<?php echo $l['meta-title']; ?>">
    <meta name="twitter:domain" content="https://fwd.media//">
    <meta property="twitter:image" content="<?php echo $l['meta-img-url']; ?>">
    <meta name="twitter:description" content="<?php echo $l['meta-description']; ?>">
    <meta itemprop="name" content="<?php echo $l['meta-title']; ?>">
    <meta itemprop="image" content="<?php echo $l['meta-img-url']; ?>">
    <meta itemprop="description" content="<?php echo $l['meta-description']; ?>">
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="#top">&lt;FWD:media&gt;</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
								  <li><a href="?"><?php echo $l['lang-en']; ?></a></li>
								  <li><a href="?l=fr"><?php echo $l['lang-fr']; ?></a></li>
								  <li><a href="?l=es"><?php echo $l['lang-es']; ?></a></li>
								</li>
								<li class="special">
									<a href="#menu" class="menuToggle"><span><?php echo $l['nav-menu']; ?></span></a>
									<div id="menu">
										<ul>
											<li><a href="#"><?php echo $l['nav-home']; ?></a></li>
											<li><a href="#start" class="scrolly"><?php echo $l['nav-start']; ?></a></li>
											<li><a href="#whatislb" class="scrolly"><?php echo $l['nav-lbabout']; ?></a></li>
											<li><a href="#weprovide" class="scrolly"><?php echo $l['nav-what']; ?></a></li>
											<li><a href="#whoapply" class="scrolly"><?php echo $l['nav-who']; ?></a></li>
											<li><a href="#applynow" class="scrolly"><?php echo $l['nav-apply']; ?></a></li>
											<li><a href="#faq" class="scrolly"><?php echo $l['nav-faq']; ?></a></li>
											<li><a href="#contact" class="scrolly"><?php echo $l['nav-contact']; ?></a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2><?php echo $l['head-title']; ?></h2>
							<p><?php echo $l['head-claim']; ?></p>
							<ul class="actions">
								<li><a href="#applynow" class="button special scrolly"><?php echo $l['btn-applynow']; ?></a></li>
							</ul>
						</div>
						<a href="#start" class="more scrolly"><?php echo $l['btn-more']; ?></a>
					</section>

				<!-- First page -->
					<section id="start" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2><?php echo $l['sourcefabricsinitiative']; ?></h2>
								<p>
								  <?php echo $l['rumediaorg']; ?>
								  <a href='https://www.sourcefabric.org/en/liveblog/' target='_blank'><?php echo $l['btn-checklb']; ?></a>
								</p>
								<h2><?php echo $l['deadlinetxt']; ?></h2>
							</header>
						</div>
					</section>

				<!-- Learn about live blogging -->
					<section id="whatislb" class="lb-bg-banner bigtxt ">
						<div class="inner">
							<header class="major">
								<h2><?php echo $l['biglb4fm']; ?></h2>
								<p><?php echo $l['biglb4fminfo']; ?></p>
								<!--p>
    						  <a href="#whatislbspotlight" class="smalltxt more scrolly"><?php echo $l['btn-more']; ?></a>
								</p-->
							</header>
						</div>
					</section>

				<!-- Live blog details -->
					<section id="whatislbspotlight" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/lb-icon-01.png" alt="" /></div><div class="content">
								<h2 class=""><?php echo $l['spotlight-a']; ?></h2>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/lb-icon-02.png" alt="" /></div><div class="content">
								<h2 class=""><?php echo $l['spotlight-b']; ?></h2>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/lb-icon-03.png" alt="" /></div><div class="content">
								<h2 class=""><?php echo $l['spotlight-c']; ?></h2>
							</div>
						</section>
					</section>

				<!-- we provide -->
					<section id="weprovide" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2 class="upperc"><?php echo $l['weprovide']; ?></h2>
								<p><?php echo $l['weprovideinfo']; ?></p>
							</header>
							<ul class="features">
								<li class="icon fa-paper-plane-o">
									<h3><?php echo $l['weprovide-title-a']; ?></h3>
									<p><?php echo $l['weprovide-info-a']; ?></p>
								</li>
								<li class="icon fa-laptop">
									<h3><?php echo $l['weprovide-title-b']; ?></h3>
									<p><?php echo $l['weprovide-info-b']; ?></p>
								</li>
								<li class="icon fa-code">
									<h3><?php echo $l['weprovide-title-c']; ?></h3>
									<p><?php echo $l['weprovide-info-c']; ?></p>
								</li>
								<li class="icon fa-users">
									<h3><?php echo $l['weprovide-title-d']; ?></h3>
									<p><?php echo $l['weprovide-info-d']; ?></p>
								</li>
								<li class="icon fa-heart-o">
									<h3><?php echo $l['weprovide-title-e']; ?></h3>
									<p><?php echo $l['weprovide-info-e']; ?></p>
								</li>
								<li class="icon fa-lightbulb-o">
									<h3><?php echo $l['weprovide-title-f']; ?></h3>
									<p><?php echo $l['weprovide-info-f']; ?></p>
								</li>
							</ul>
						</div>
					</section>

				<!-- what we do not provide -->
					<section id="notprovide" class="wrapper style2">
						<div class="inner narrow">
							<header>
								<h2><?php echo $l['notprovide']; ?></h2>
											<ul class="">
												<li><?php echo $l['notprovide-a']; ?></li>
												<li><?php echo $l['notprovide-b']; ?></li>
												<li><?php echo $l['notprovide-c']; ?></li>
												<li><?php echo $l['notprovide-d']; ?></li>
												<li><?php echo $l['notprovide-e']; ?></li>
											</ul>
								<p><?php echo $l['notprovideinfo']; ?></p>
							</header>
						</div>
					</section>

				<!-- who should apply -->
					<section id="whoapply" class="wrapper style5">
						<div class="inner narrow">
								<h2><span class="icon fa-check"></span> <?php echo $l['whoapply']; ?></h2>
								<p><?php echo $l['whoapplyinfo']; ?></p>

									<div class="table-wrapper">
										<table>
											<tbody>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $l['whoapply-a']; ?></td>
												</tr>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $l['whoapply-b']; ?></td>
												</tr>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $l['whoapply-c']; ?></td>
												</tr>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $l['whoapply-d']; ?></td>
												</tr>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $l['whoapply-e']; ?></td>
												</tr>
										</table>
									</div>
								
								<p><?php echo $l['whoapplybottominfo']; ?></p>
						</div>
					</section>
					
				<!-- contact form-->
					<section id="applynow" class="wrapper style3">
						<div class="inner">
  						<h2><?php echo $l['applynow']; ?></h2>
  						<p><?php echo $l['applynowinfo']; ?></p>
  						<form method="post" action="#">
  							<div class="row uniform">
  								<div class="6u 12u$(xsmall)">
  									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
  								</div>
  								<div class="6u$ 12u$(xsmall)">
  									<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
  								</div>
  								<div class="12u$">
  									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
  								</div>
  								<div class="12u$">
  									<ul class="actions">
  										<li><input type="submit" value="Send Message" class="special" /></li>
  										<li><input type="reset" value="Reset" /></li>
  									</ul>
  								</div>
  							</div>
  						</form>
  				  </div>
					</section>

				<!-- FAQ -->
					<section id="faq" class="wrapper style5">
						<div class="inner">
								<h2><?php echo $l['faq']; ?></h2>
								<p><?php echo $l['faqinfo']; ?></p>
								<ul class="alt" id="drawers">
                 <li>
                    <h4><?php echo $l['faq-a-q']; ?></h4>
                    <div style="display: none;"><?php echo $l['faq-a-a']; ?></div>
                 </li>
                 <li>
                    <h4><?php echo $l['faq-b-q']; ?></h4>
                    <div style="display: none;"><?php echo $l['faq-b-a']; ?></div>
                 </li>
                 <li>
                    <h4><?php echo $l['faq-c-q']; ?></h4>
                    <div style="display: none;"><?php echo $l['faq-c-a']; ?></div>
                 </li>
              </ul>
						</div>
					</section>
					

				<!-- contactusinfo -->
					<section id="contact" class="wrapper style2 special">
						<div class="inner">
							<header class="major">
								<h2 class="upperc"><?php echo $l['bottomcontact']; ?></h2>
								<p><?php echo $l['bottomcontactinfo']; ?></p>
							</header>
							<ul class="features">
								<li class="icon fa-binoculars">
									<h3><?php echo $l['bottomcontact-title-a']; ?></h3>
									<p><?php echo $l['bottomcontact-info-a']; ?></p>
								</li>
								<li class="icon  fa-envelope-o">
									<h3><?php echo $l['bottomcontact-title-b']; ?></h3>
									<p><?php echo $l['bottomcontact-info-b']; ?></p>
								</li>
							</ul>
						</div>
					</section>
					
				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="http://www.facebook.com/Sourcefabric" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="http://twitter.com/sourcefabric" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://plus.google.com/102556733644257731505" target="_blank" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
							<li><a href="http://www.flickr.com/photos/sourcefabric" target="_blank" class="icon fa-flickr"><span class="label">Flickr</span></a></li>
							<li><a href="http://vimeo.com/sourcefabric" target="_blank" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
							<li><a href="https://www.linkedin.com/company/sourcefabric" target="_blank" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="mailto:contact@sourcefabric.org" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
							<li><a href="https://www.sourcefabric.org/en/home/rss" target="_blank" class="icon fa-rss"><span class="label">RSS</span></a></li>
						</ul>
						<ul class="copyright">
							<li>
							&copy; 2016 
							<a href='https://www.sourcefabric.org/' target='_blank'>Sourcefabric z.ú.</a> 
							This work is licensed under a 
							<a href='https://creativecommons.org/licenses/by/3.0/' target='_blank'>Creative Commons Attribution 3.0 Unported License</a>
							</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
      <script type="text/javascript">
        $('#drawers').find('h4').click(function(){
          $(this).next().slideToggle();
          $("#drawers div").not($(this).next()).slideUp();
        });
      </script>

	</body>
</html>