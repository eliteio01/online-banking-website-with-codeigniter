
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
  <?= link_tag('themes/finapp-light/css/src/splide/splide.min.css') ?>
  <?= link_tag('https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap') ?>
  <?= link_tag('themes/finapp-light/css/fontawesome.min.css') ?>
  <?= link_tag('themes/finapp-light/css/all.min.css') ?>
  <?= link_tag('themes/finapp-light/js/plugins/datatable/datatables.min.css') ?>
  <?= link_tag('themes/finapp-light/css/others.css') ?>
  <?= link_tag('themes/finapp-light/css/style.css') ?>
  <!-- ========= Custom JS Files =========  -->
  <script src="<?= base_url('assets/javascript/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/javascript/clipboard.min.js') ?>"></script>
  <script src="<?= base_url('assets/javascript/countries.js') ?>"></script>
  <!-- ========= Custom JS Files =========  -->

	<style>
	    th {
	        font-size: 16px;
	    }
	</style>
	
	<link rel="stylesheet" href="<?= base_url('assets/stylesheets/others.css') ?>">
        <script src="<?= base_url('assets/javascript/language.js') ?>"></script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
        <style>
.progress {
  width: 150px;
  height: 150px !important;
  text-align: center;
  line-height: 150px;
  background: none;
  margin: 20px;
  box-shadow: none;
  position: relative;
}
.progress:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 12px solid #fff;
  position: absolute;
  top: 0;
  left: 0;
}
.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 12px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.progress .progress-right {
  right: 0;
}
.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
  animation: loading-1 1.8s linear forwards;
}
.progress .progress-value {
  width: 90%;
  height: 90%;
  border-radius: 50%;
  background: #000;
  font-size: 10px;
  color: #fff;
  line-height: 135px;
  text-align: center;
  position: absolute;
  top: 5%;
  left: 5%;
}
.progress.blue .progress-bar {
  border-color: #049dff;
}

</style>
</head>

<body>
	<!-- App Header -->
	
	<div class="appHeader bg-primary text-light">
		<div class="left">
			<?= view('includes/translator') ?>
		</div>
		<div class="pageTitle"> <a href="<?= base_url() ?>/user"><img src="<?= base_url('uploads/' . $company_favicon) ?>" alt="logo" class="logo"></a> 
</div>
		<div class="right">
			<a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#ProfileModal"> <img
					src="<?= base_url('uploads/' . $image) ?>"
					alt="<?= implode(' ', array_slice(explode(' ', $name), 0, 1)); ?>" class="imaged"
					style="width:35px;height:35px;border-radius:50%"> <span class="badge badge-danger">
					<?= $notification ?>
				</span> </a>
		</div>
	</div>
	<!-- * App Header -->
