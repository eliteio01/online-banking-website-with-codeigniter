<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $page.' | '.$company_name ?>
  </title>
  <meta property="og:title" content="<?= $company_name ?>">
  <meta name="author" content="<?= $company_name ?>">
  <meta name="description" content="<?= $company_description ?>">
  <meta name="keywords" content="<?= $company_keyword ?>">
  <meta property="og:locale" content="en_US">
  <meta property="og:description" content="<?= $company_description ?>">
  <meta name="og:keywords" content="<?= $company_keyword ?>">
  <meta property="og:url" content="<?= base_url() ?>">
  <meta property="og:site_name" content="<?= $company_name ?>">
  <meta property="og:image" content="<?= base_url('uploads/'.$company_favicon) ?>"/>
  <link rel="canonical" href="<?= base_url() ?>">
  <!-- favicon & bookmark -->
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('uploads/'.$company_favicon) ?>">
  <link rel="shortcut icon" href="<?= base_url('uploads/'.$company_favicon) ?>">

  <meta name="robots" content="index, follow"/>
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="<?= $theme_color ?>">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="<?= $theme_color ?>"/>
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="<?= $theme_color ?>"/>


  <!---**************COLORS*****************-->
	<style>
    :root {
      --primary_color: <?= $theme_color ?>;
      --secondary_color: <?= $secondary_color ?>;
    }
  </style>
  <!---**************COLORS*****************-->
  <?= link_tag('themes/finapp-light/css/src/bootstrap/bootstrap.min.css') ?>
  <?= link_tag('themes/finapp-light/css/style.css') ?>
  <?= link_tag('themes/finapp-light/css/fontawesome.min.css') ?>
  <?= link_tag('themes/finapp-light/css/all.min.css') ?>
  <?= link_tag('themes/finapp-light/js/plugins/datatable/datatables.min.css') ?>
  <?= link_tag('themes/finapp-light/css/others.css') ?>
  
  <?= script_tag('themes/finapp-light/js/language.js') ?>
  <?= script_tag('themes/finapp-light/js/countries.js') ?>
  <?= script_tag('themes/finapp-light/js/clipboard.min.js') ?>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<style>
	    th {
	        font-size: 14px;
	    }
	</style>
  <style>
    .authbody {
      background-image: url(<?= base_url('themes/finapp-light/images/sunset.jpg') ?>);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      height: 100%;
    }
    
    .cap {
      left: 0;
      right: 0;
      top: 15%;
      width: 480px;
      margin: 0 auto
    }
    
    @media only screen and (max-width: 600px) {
      .cap {
        left: 0;
        right: 0;
        top: 0;
        width: 100%;
        margin: 0 auto
      }
    }
  </style>
</head>

<body class="authbody">
  <!-- App Header -->
  <div class="appHeader no-border transparent position-absolute">
    <div class="left">
    </div>
    <div class="pageTitle"></div>
    <div class="right">
      <?= view('includes/translator') ?>
    </div>
  </div>
  <!-- * App Header -->