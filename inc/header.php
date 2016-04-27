<?php
  $site = "http://staticresource.com/kellieandtom";
?>
<!DOCTYPE html>
<html data-theme=<?php echo "$template_theme"; ?>>
<head>
  <meta charset=utf-8>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title><?php echo "$template_title"; ?> • Morgan–Hodgins Wedding</title>
<link href=http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700,300italic,400italic,500italic,700italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,500,600,700,900 rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic rel=stylesheet>
  <link href=https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic rel=stylesheet type=text/css>
  <link href=<?php echo $site; ?>/fonts/alegance/alegance.css rel=stylesheet>
  <link href=<?php echo $site; ?>/fonts/ameliascript-draft/ameliascript-draft.css rel=stylesheet>
  <link href=<?php echo $site; ?>/fonts/ameliascript-fine/ameliascript-fine.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/buttons/data-buttons.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/notifications/notifications.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/tooltips/data-tooltips.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/video-scaling/video-scaling.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/form/form.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/tables/data-tables.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/modals/data-modals.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/nav/nav.css rel=stylesheet>
  <link href=<?php echo $site; ?>/css/basic.css rel=stylesheet>
  <link href=<?php echo $site; ?>/css/global.css rel=stylesheet>
  <link href=<?php echo $site; ?>/css/themes/wedding.css rel=stylesheet>
  <!--[if lt IE 9]><script src=<?php echo $site ?>/js/EQCSS-polyfills.min.js></script><![endif]-->
  <script src=<?php echo $site ?>/js/EQCSS.min.js></script>
</head>
<body class=<?php echo "$template"; ?>>
  <section id=hero>
    <h1><a href=<?php echo "$site"; ?>>Kellie &amp; Tom</a></h1>
    <h2>November 6th, 2016 &middot; Buffalo, NY</h2>
  </section>
  <?php include("navigation.php"); ?>
  <section data-wrapper class=fixed></section>
  <script src=<?php echo $site; ?>/plugins/notifications/notifications.js></script>
  <link href=<?php echo $site; ?>/plugins/modals/data-modals.css rel=stylesheet>
  <main>