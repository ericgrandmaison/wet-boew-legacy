<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
	<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
	Terms and conditions of use: http://tbs-sct.ircan.gc.ca/projects/gcwwwtemplates/wiki/Terms
	Conditions régissant l'utilisation : http://tbs-sct.ircan.gc.ca/projects/gcwwwtemplates/wiki/Conditions
	-->
	<?php $_PAGE['lang1'] = "fra"; ?>
    <?php $_PAGE['title_fra'] = "3&nbsp;colonnes - Thème NSI 2.0 - HTML5 - Boîte à outils de l'expérience Web (BOEW)"; ?>
    <?php $_PAGE['issued'] = "2010-08-09"; ?>
    <?php $_PAGE['modified'] = "AAAA-MM-JJ"; ?>
    <?php $_PAGE['html5'] = "1"; ?>
	<meta name="dcterms.description" content="French description / Description en français" />
	<meta name="description" content="French description / Description en français" />
	<meta name="keywords" content="French keywords / Mots-clés en français" />
	<meta name="dcterms.creator" content="French name of the content author / Nom en français de l'auteur du contenu" />
	<meta name="dcterms.subject" title="scheme" content="French subject terms / Termes de sujet en français" />
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/cont/css.php"; ?>
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/3col.php"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/cont/header-entete.php"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>
    <div class="cn-toppage"><a href="#cn-tphp" title="Retourner au haut de la page">Haut de la page</a></div>
    <section>
        <h2>L'en-tête de niveau&#160;2 (h2)</h2>

        <div class="cn-toppage"><a href="#cn-tphp" title="Retourner au haut de la page">Haut de la page</a></div>
        <section>
            <h3>L'en-tête de niveau&#160;3 (h3)</h3>

            <div class="cn-toppage"><a href="#cn-tphp" title="Retourner au haut de la page">Haut de la page</a></div>
            <section>
                <h4>L'en-tête de niveau&#160;4 (h4)</h4>

                <div class="cn-toppage"><a href="#cn-tphp" title="Retourner au haut de la page">Haut de la page</a></div>
                <section>
                    <h5>L'en-tête de niveau&#160;5 (h5)</h5>

                    <div class="cn-toppage"><a href="#cn-tphp" title="Retourner au haut de la page">Haut de la page</a></div>
                    <section>
                        <h6>L'en-tête de niveau&#160;6 (h6)</h6>

                        <p>CONTENU (un mélange de texte et d'images ou de graphiques est prévu)</p>
                    </section>
                </section>
            </section>
        </section>
    </section>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/left-gauche-1.php"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/php/menu-left-gauche/exmple-fra.php"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/php/menu-left-gauche/pd-dp-fra.php"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/left-gauche-2.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/right-droite-1.php"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/php/menu-right-droite/exmple-fra.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/right-droite-2.php"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/cont/trail-arr.php"; ?>
</body>
</html>