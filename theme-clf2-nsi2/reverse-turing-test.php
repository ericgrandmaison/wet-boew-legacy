<?php
  $sequenceIsValid = false;
  $guid = $_POST['captchaValue'];

  if (isValidGUID($guid)) {
    $sequenceIsValid = isDistchaValid($guid);
  }
  else {
    $sequenceIsValid = false;
  }

  function isValidGUID($guid) {
    $filePath = '../guid/' . $guid . '.txt';

    return is_file($filePath);
  }

  /**
  * Determines if distcha action is valid or not.
  * 
  * Get content of the present guid file take the difference in time 
  * of the first and last position and if too fast make
  * a value false otherwise make it true.
  **/
  function isDistchaValid($guid) {
    $distchaFileContent = getDistchaFileContent($guid);
    $milestones = getDistchaMilestones($distchaFileContent);
    
    $firstPosition = reset($milestones); 
    $lastPosition = end($milestones);

    $timeToMoveDistchaCursor = $lastPosition - $firstPosition;

    if($timeToMoveDistchaCursor < 0.08){
      return false;
    }
    else{
      return true;
    }
  }

  function getDistchaFileContent($guid) {
    $filePath = '../guid/' . $guid . '.txt';

    return file_get_contents($filePath);
  }

  /*
   * Returns an array of distcha milestones in the format of $array[$abscissaPosition] = $microTime.
   */
  function getDistchaMilestones($distchaFileContent) {
    $milestones = array();

    $fileLines = explode(PHP_EOL, $distchaFileContent);

    foreach($fileLines as $oneFileLine) {
     $abscissaPosition = NULL;
     $microTime = NULL;

     if (!empty($oneFileLine)) {
       list($abscissaPosition, $microTime) = explode(';', $oneFileLine);
       $milestones[$abscissaPosition] = $microTime;
     }
    }

    return $milestones;
  }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<!-- 
	DISTCHA (Accessible CAPTCHA) v0.3 / DISTCHA (CAPTCHA accessible) v0.3
	CLF 2.0 theme v1.2 / Thème de la NSI 2.0 v1.2
	Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
	Terms and conditions of use: http://tbs-sct.ircan.gc.ca/projects/gcwwwtemplates/wiki/Terms
	Conditions régissant l'utilisation : http://tbs-sct.ircan.gc.ca/projects/gcwwwtemplates/wiki/Conditions
	-->

	<!-- Title begins / Début du titre -->
	<title>Reverse Turing test result - Device Independent Slider Test to tell Computers and Humans Apart (DISTCHA) - HTML5 - Web Experience Toolkit (WET)</title>
	<!-- Title ends / Fin du titre -->
	
	<!-- Favicon (optional) begins / Début du favicon (optionnel) -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico" /> -->
	<!-- Favicon (optional) ends / Fin du favicon (optionnel) -->
	
	<!-- Meta-data begins / Début des métadonnées -->
	<meta name="dcterms.description" content="English description / Description en anglais" />
	<meta name="description" content="English description / Description en anglais" />
	<meta name="keywords" content="English keywords / Mots-clés en anglais" />
	<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
	<meta name="dcterms.title" content="English title / Titre en anglais" />
	<meta name="dcterms.issued" title="W3CDTF" content="Date published (YYYY-MM-DD) / Date de publication (AAAA-MM-JJ)" />
	<meta name="dcterms.modified" title="W3CDTF" content="Date modified (YYYY-MM-DD) / Date de modification (AAAA-MM-JJ)" />
	<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" />
	<meta name="dcterms.language" title="ISO639-2" content="eng" />
	<!-- Meta-data ends / Fin des métadonnées -->

	<!-- WET scripts/CSS begin / Début des scripts/CSS de la BOEW --><!--[if IE 6]><![endif]-->
	<link href="../css/base.css" rel="stylesheet" type="text/css" />
	<!--[if IE 8]><link href="../css/base-ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if IE 7]><link href="../css/base-ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if lte IE 6]><link href="../css/base-ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
	<link href="../css/util.css" rel="stylesheet" type="text/css" />
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
	<link href="css/theme-clf2-nsi2.css" rel="stylesheet" type="text/css" />
	<!--[if IE 7]><link href="css/theme-clf2-nsi2-ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if lte IE 6]><link href="css/theme-clf2-nsi2-ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
	<!-- WET scripts/CSS end / Fin des scripts/CSS de la BOEW -->

	<!-- Progressive enhancement begins / Début de l'amélioration progressive -->
	<script src="../js/lib/jquery.min.js"></script>
	<script src="../js/pe-ap.js" id="progressive"></script>
	<script>
	/* <![CDATA[ */
		var params = {
		};
		PE.progress(params);
	/* ]]> */
	</script>
	<!-- Progressive enhancement ends / Fin de l'amélioration progressive -->
	
	<!-- Custom scripts/CSS begin / Début des scripts/CSS personnalisés -->
	<!-- Custom scripts/CSS end / Fin des scripts/CSS personnalisés -->

	<!-- WET print CSS begins / Début du CSS de la BOEW pour l'impression -->
	<link href="../css/pf-if.css" rel="stylesheet" media="print" type="text/css" />
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
	<link href="css/pf-if-theme-clf2-nsi2.css" rel="stylesheet" media="print" type="text/css" />
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
	<!-- WET print CSS ends / Fin du CSS de la BOEW pour l'impression -->
</head>
<body>
<!-- Two column layout begins / Début de la mise en page de deux colonnes -->
<div id="cn-body-inner-2col">
	<!-- Skip header begins / Début du saut de l'en-tête -->
	<div id="cn-skip-head">
		<ul id="cn-tphp">
			<li id="cn-sh-link-1"><a href="#cn-cont">Skip to main content</a></li>
			<li id="cn-sh-link-2"><a href="#cn-nav">Skip to primary navigation</a></li>
		</ul>
	</div>
	<!-- Skip header ends / Fin du saut de l'en-tête -->

	<!-- Header begins / Début de l'en-tête -->
	<div id="cn-head"><div id="cn-head-inner">
	<header>
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
		<div id="cn-sig"><img src="images/sig-eng.gif" width="372" height="20" alt="Government of Canada" title="Government of Canada" /></div>
		<div id="cn-wmms"><img src="images/wmms.gif" width="83" height="20" alt="Symbol of the Government of Canada" title="Symbol of the Government of Canada" /></div>

		<!-- Banner begins / Début de la bannière -->
		<div id="cn-leaf"></div>
		<div id="cn-banner" role="banner">
			<p id="cn-banner-text">Name of Institution</p>
			<p>[www.]mainsite-siteprimaire.gc.ca</p>
		</div>
		<!-- Banner ends / Fin de la bannière -->

		<nav role="navigation">
			<!-- Common menu bar begins / Début de la barre de menu commune -->
			<div id="cn-cmb">
				<h2>Common menu bar</h2>
				<ul>
					<li id="cn-cmb1"><a href="2col-theme-clf2-nsi2-fra.html" lang="fr" title="Français - Version française de cette page">Français</a></li>
					<li id="cn-cmb2"><a href="#" title="Home - Main page of the Web site">Home</a></li>
					<li id="cn-cmb3"><a href="#" title="Contact Us - Important contact information">Contact Us</a></li>
					<li id="cn-cmb4"><a href="#" title="Help - Information about using the Web site">Help</a></li>
					<li id="cn-cmb5"><a rel="search" href="#" title="Search - Search the Web site">Search</a></li>
					<li id="cn-cmb6"><a rel="external" href="http://www.canada.gc.ca/home.html" title="canada.gc.ca - Government of Canada Web site">canada.gc.ca</a></li>
				</ul>
			</div>
			<!-- Common menu bar ends / Fin de la barre de menu commune -->

			<!-- Breadcrumb begins / Début du fil d'Ariane -->
			<div id="cn-bcrumb">
				<h2>Breadcrumb</h2>
				<ol>
					<li><a href="#" title="Home - Main page of the Web site">Home</a>&#160;&#62;</li>
					<li><a href="#">Level&#160;1</a>&#160;&#62;</li>
					<li><a href="#">Level&#160;2</a>&#160;&#62;</li>
					<li>Reverse Turing test result - <abbr title="Device Independent Slider Test to tell Computers and Humans Apart">DISTCHA</abbr> - HTML5 - Web Experience Toolkit (WET)</li>
				</ol>
			</div>
			<!-- Breadcrumb ends / Fin du fil d'Ariane -->
		</nav>
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
	</header>
	</div></div>
	<!-- Header ends / Fin de l'en-tête -->

	<div id="cn-cols">
	<!-- Main content begins / Début du contenu principal --> 
	<div id="cn-centre-col-gap"></div>
	<div id="cn-centre-col" role="main"><div id="cn-centre-col-inner">
		<!-- Content title begins / Début du titre du contenu -->
		<h1 id="cn-cont">Reverse Turing test result - Device Independent Slider Test to tell Computers and Humans Apart (DISTCHA) - HTML5 - Web Experience Toolkit (WET)</h1>
		<!-- Content Title ends / Fin du titre du contenu -->

<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
		<section>
		<h2>Reverse Turing test result &ndash;&nbsp;<abbr title="Device Independent Slider Test to tell Computers and Humans Apart">DISTCHA</abbr> Proof of Concept</h2>
			<?php	if (isFormSubmitted()) : ?>
				<?php if ($sequenceIsValid) : ?>
					<p id="msg">Congratulations! It appears you are a full-fledged human being, not an evil spamBot.</p>
				<?php else : ?>
					<p id="msg">Sadly, you seem to be an evil spamBot.</p>
				<?php endif; ?>
			<?php else : ?>
				<?php header('HTTP/1.1 405 Method Not Allowed'); ?>
				<h2>Method Not Allowed</h2>
				<p>The request method used in the HTTP request (<code>GET</code>) is not supported on this ressource.</p>
				<h2>Supported Methods on this Ressource</h2>
				<ul>
					<li><code>HEAD</code></li>
					<li><code>POST</code></li>
					<li><code>OPTIONS</code></li>
					<li><code>TRACE</code></li>
				</ul>
			<?php endif; ?>
		</section>
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
	</section>
	</div></div>
	<!-- Main content ends / Fin du contenu principal --> 

	<!-- Primary navigation (left column) begins / Début de la navigation principale (colonne gauche) -->
	<div id="cn-left-col-gap"></div>
	<div id="cn-left-col"><div id="cn-left-col-inner">
	<section>
		<h2 id="cn-nav">Primary navigation (left column)</h2>
		<div class="cn-left-col-default">
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
		<div role="search">
			<section>
				<h3><label for="cn-search">Search</label></h3>
				<form action="#" method="post">
				<div id="cn-search-box">
					<input id="cn-search" name="cn-search" type="search" size="18" maxlength="40" /><input id="cn-search-submit" name="cn-search-submit" type="submit" value="Search" />
					<a rel="search" href="#">Advanced search</a>
				</div>
				</form>
			</section>
		</div>
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
		<nav role="navigation">
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
			<section>
				<h3>Section&#160;1</h3>
				<ul>
					<li><a href="#">Item&#160;1a</a>
					<ul>
						<li><a href="#">Item&#160;1b</a></li>
						<li><a href="#">Item&#160;2b</a></li>
					</ul>
					</li>
					<li><a href="#">Item&#160;2a</a></li>
					<li><a href="#">Item&#160;3a</a></li>
				</ul>		
			</section>
			<section>
				<h3>Section&#160;2</h3>
				<ul>
					<li><a href="#">Item&#160;1a</a></li>
					<li><a href="#">Item&#160;2a</a></li>
					<li><a href="#">Item&#160;3a</a></li>
				</ul>
			</section>
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
	</div></div>
	<!-- Main content ends / Fin du contenu principal --> 

	<!-- Primary navigation (left column) begins / Début de la navigation principale (colonne gauche) -->
	<div id="cn-left-col-gap"></div>
	<div id="cn-left-col"><div id="cn-left-col-inner">
	<nav role="navigation">
		<h2 id="cn-nav">Primary navigation (left column)</h2>
		<div class="cn-left-col-default">
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
			<section role="search">
				<h3><label for="cn-search">Search</label></h3>
				<form action="#" method="post">
				<div id="cn-search-box">
					<input id="cn-search" name="cn-search" type="search" size="18" maxlength="40" /><input id="cn-search-submit" name="cn-search-submit" type="submit" value="Search" />
					<a rel="search" href="#">Advanced search</a>
				</div>
				</form>
			</section>
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
			<section>
				<h3>Section&#160;1</h3>
				<ul>
					<li><a href="#">Item&#160;1a</a>
					<ul>
						<li><a href="#">Item&#160;1b</a></li>
						<li><a href="#">Item&#160;2b</a></li>
					</ul>
					</li>
					<li><a href="#">Item&#160;2a</a></li>
					<li><a href="#">Item&#160;3a</a></li>
				</ul>		
			</section>
			<section>
				<h3>Section&#160;2</h3>
				<ul>
					<li><a href="#">Item&#160;1a</a></li>
					<li><a href="#">Item&#160;2a</a></li>
					<li><a href="#">Item&#160;3a</a></li>
				</ul>
			</section>
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
		</div>
	</nav>
	</div></div>
	<!-- Primary navigation (left column) ends / Fin de la navigation principale (colonne gauche) -->
	</div>

	<!-- Footer begins / Début du pied de page --> 
	<div id="cn-foot"><div id="cn-foot-inner">
	<footer>
		<h2>Footer</h2>
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
		<div id="cn-in-pd">			
			<dl id="cn-doc-dates" role="contentinfo">
				<dt>Date Modified:</dt>
				<dd><span><time>2010-08-09</time></span></dd>
			</dl>
			<div id="cn-toppage-foot"><a href="#cn-tphp" title="Return to Top of Page">Top of Page</a></div>
			<div id="cn-in-pd-links">
				<ul>
					<li id="cn-inotices-link"><a href="#" rel="license">Important Notices</a></li>
				</ul>
			</div>
		</div>
<!-- clf2-nsi2 theme ends / Fin du thème clf2-nsi2 -->
	</footer>
	</div></div>
	<!-- Footer ends / Fin du pied de page -->
</div>
<!-- Two column layout ends / Fin de la mis en page de deux colonnes -->
</body>
</html>
<?php
	function isFormSubmitted()
	{
		return isset($_POST['captchaValue']);
	}
?>
