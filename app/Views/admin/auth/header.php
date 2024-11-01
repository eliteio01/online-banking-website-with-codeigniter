<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="<?= $theme_color ?>">
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
  <meta name="theme-color" content="<?= $theme_color ?>">
  <meta property="og:image" content="<?= base_url('uploads/'.$company_favicon) ?>"/>
  <link rel="canonical" href="<?= base_url() ?>">
  <link rel="icon" type="image/png" href="<?= base_url('uploads/'.$company_favicon) ?>" sizes="32x32">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('uploads/'.$company_favicon) ?>">
    <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <?= link_tag('assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css') ?>
    <?= link_tag('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') ?>
    <?= link_tag('assets/vendor/flatpickr/flatpickr.min.css') ?>
    <!-- BEGIN THEME STYLES -->
    <style>
    :root {
      --primary: <?= $theme_color ?>;
      --secondary: <?= $secondary_color ?>;
    }
  </style>
   <?= link_tag('assets/stylesheets/theme.min.css') ?>
   <?= link_tag('assets/stylesheets/custom.css') ?>
  </head>
  <body>
    <!--[if lt IE 10]>
    <!-- .auth -->
