<?php
include("lang-en.php");
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><FWD:media></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
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
								  <li><a href="#"><?php echo $lang['lang-en']; ?></a></li>
								  <li><a href="#"><?php echo $lang['lang-fr']; ?></a></li>
								  <li><a href="#"><?php echo $lang['lang-es']; ?></a></li>
								</li>
								<li class="special">
									<a href="#menu" class="menuToggle"><span><?php echo $lang['nav-menu']; ?></span></a>
									<div id="menu">
										<ul>
											<li><a href="#"><?php echo $lang['nav-home']; ?></a></li>
											<li><a href="#start" class="scrolly"><?php echo $lang['nav-start']; ?></a></li>
											<li><a href="#whatislb" class="scrolly"><?php echo $lang['nav-lbabout']; ?></a></li>
											<li><a href="#weprovide" class="scrolly"><?php echo $lang['nav-what']; ?></a></li>
											<li><a href="#whocanapply"><?php echo $lang['nav-who']; ?></a></li>
											<li><a href="#apply"><?php echo $lang['nav-apply']; ?></a></li>
											<li><a href="#faq"><?php echo $lang['nav-faq']; ?></a></li>
											<li><a href="#contact"><?php echo $lang['nav-contact']; ?></a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2><?php echo $lang['head-title']; ?></h2>
							<p><?php echo $lang['head-claim']; ?></p>
							<ul class="actions">
								<li><a href="#" class="button special"><?php echo $lang['btn-applynow']; ?></a></li>
							</ul>
						</div>
						<a href="#start" class="more scrolly"><?php echo $lang['btn-more']; ?></a>
					</section>

				<!-- One -->
					<section id="start" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2><?php echo $lang['sourcefabricsinitiative']; ?></h2>
								<p>
								  <?php echo $lang['rumediaorg']; ?>
								  <a href='https://www.sourcefabric.org/en/liveblog/' target='_blank'><?php echo $lang['btn-checklb']; ?></a>
								</p>
								<h2><?php echo $lang['deadlinetxt']; ?></h2>
							</header>
						</div>
					</section>

				<!-- Learn about live blogging -->
					<section id="whatislb" class="lb-bg-banner bigtxt ">
						<div class="inner">
							<header class="major">
								<h2><?php echo $lang['biglb4fm']; ?></h2>
								<p><?php echo $lang['biglb4fminfo']; ?></p>
								<!--p>
    						  <a href="#whatislbspotlight" class="smalltxt more scrolly"><?php echo $lang['btn-more']; ?></a>
								</p-->
							</header>
						</div>
					</section>

				<!-- Live blog details -->
					<section id="whatislbspotlight" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/lb-icon-01.png" alt="" /></div><div class="content">
								<h2 class=""><?php echo $lang['spotlight-a']; ?></h2>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/lb-icon-02.png" alt="" /></div><div class="content">
								<h2 class=""><?php echo $lang['spotlight-b']; ?></h2>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/lb-icon-03.png" alt="" /></div><div class="content">
								<h2 class=""><?php echo $lang['spotlight-c']; ?></h2>
							</div>
						</section>
					</section>

				<!-- we provide -->
					<section id="weprovide" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2 class="upperc"><?php echo $lang['weprovide']; ?></h2>
								<p><?php echo $lang['weprovideinfo']; ?></p>
							</header>
							<ul class="features">
								<li class="icon fa-paper-plane-o">
									<h3><?php echo $lang['weprovide-title-a']; ?></h3>
									<p><?php echo $lang['weprovide-info-a']; ?></p>
								</li>
								<li class="icon fa-laptop">
									<h3><?php echo $lang['weprovide-title-b']; ?></h3>
									<p><?php echo $lang['weprovide-info-b']; ?></p>
								</li>
								<li class="icon fa-code">
									<h3><?php echo $lang['weprovide-title-c']; ?></h3>
									<p><?php echo $lang['weprovide-info-c']; ?></p>
								</li>
								<li class="icon fa-users">
									<h3><?php echo $lang['weprovide-title-d']; ?></h3>
									<p><?php echo $lang['weprovide-info-d']; ?></p>
								</li>
								<li class="icon fa-heart-o">
									<h3><?php echo $lang['weprovide-title-e']; ?></h3>
									<p><?php echo $lang['weprovide-info-e']; ?></p>
								</li>
								<li class="icon fa-lightbulb-o">
									<h3><?php echo $lang['weprovide-title-f']; ?></h3>
									<p><?php echo $lang['weprovide-info-f']; ?></p>
								</li>
							</ul>
						</div>
					</section>

				<!-- what we do not provide -->
					<section id="notprovide" class="wrapper style2">
						<div class="inner narrow">
							<header>
								<h2><?php echo $lang['notprovide']; ?></h2>
											<ul class="">
												<li><?php echo $lang['notprovide-a']; ?></li>
												<li><?php echo $lang['notprovide-b']; ?></li>
												<li><?php echo $lang['notprovide-c']; ?></li>
												<li><?php echo $lang['notprovide-d']; ?></li>
												<li><?php echo $lang['notprovide-e']; ?></li>
											</ul>
								<p><?php echo $lang['notprovideinfo']; ?></p>
							</header>
						</div>
					</section>

				<!-- who should apply -->
					<section id="whoapply" class="wrapper style5">
						<div class="inner narrow">
								<h2><span class="icon fa-check"></span> <?php echo $lang['whoapply']; ?></h2>
								<p><?php echo $lang['whoapplyinfo']; ?></p>

									<div class="table-wrapper">
										<table>
											<tbody>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $lang['whoapply-a']; ?></td>
												</tr>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $lang['whoapply-b']; ?></td>
												</tr>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $lang['whoapply-c']; ?></td>
												</tr>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $lang['whoapply-d']; ?></td>
												</tr>
												<tr>
													<td><span class="icon fa-check"></span></td>
													<td><?php echo $lang['whoapply-e']; ?></td>
												</tr>
										</table>
									</div>
								
								<p><?php echo $lang['whoapplybottominfo']; ?></p>
						</div>
					</section>
					
				<!-- contact form-->
					<section id="applynow" class="wrapper style3">
						<div class="inner">
  						<h2><?php echo $lang['applynow']; ?></h2>
  						<p><?php echo $lang['applynowinfo']; ?></p>
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
								<h2><?php echo $lang['faq']; ?></h2>
								<p><?php echo $lang['faqinfo']; ?></p>
								<ul class="alt" id="drawers">
                 <li>
                    <h4><?php echo $lang['faq-a-q']; ?></h4>
                    <div style="display: none;"><?php echo $lang['faq-a-a']; ?></div>
                 </li>
                 <li>
                    <h4><?php echo $lang['faq-b-q']; ?></h4>
                    <div style="display: none;"><?php echo $lang['faq-b-a']; ?></div>
                 </li>
                 <li>
                    <h4><?php echo $lang['faq-c-q']; ?></h4>
                    <div style="display: none;"><?php echo $lang['faq-c-a']; ?></div>
                 </li>
              </ul>
						</div>
					</section>
					

				<!-- contactusinfo -->
					<section id="contactfooter" class="wrapper style2 special">
						<div class="inner">
							<header class="major">
								<h2 class="upperc"><?php echo $lang['bottomcontact']; ?></h2>
								<p><?php echo $lang['bottomcontactinfo']; ?></p>
							</header>
							<ul class="features">
								<li class="icon fa-binoculars">
									<h3><?php echo $lang['bottomcontact-title-a']; ?></h3>
									<p><?php echo $lang['bottomcontact-info-a']; ?></p>
								</li>
								<li class="icon  fa-envelope-o">
									<h3><?php echo $lang['bottomcontact-title-b']; ?></h3>
									<p><?php echo $lang['bottomcontact-info-b']; ?></p>
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