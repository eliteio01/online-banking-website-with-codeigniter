<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title>
        <?= $page . ' | ' . $company_name ?>
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
    <meta property="og:image" content="<?= base_url('uploads/' . $company_favicon) ?>" />
    <link rel="canonical" href="<?= base_url() ?>">
    <!-- favicon & bookmark -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('uploads/' . $company_favicon) ?>">
    <link rel="shortcut icon" href="<?= base_url('uploads/' . $company_favicon) ?>">
    <meta name="robots" content="index, follow" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="<?= $theme_color ?>">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="<?= $theme_color ?>" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= $theme_color ?>" />

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/summernote/summernote-bs4.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/flatpickr/flatpickr.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/datatable/css/responsive.bootstrap4.min.css') ?>">
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!---**************COLORS*****************-->
    <style>
        :root {
            --primary:
                <?= $theme_color ?>;


            --secondary:
                <?= $secondary_color ?>;


        }
    </style>
    <!---**************COLORS*****************-->
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme.min.css') ?>" data-skin="default">
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme-dark.min.css') ?>" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/others.css') ?>">
    <!-- END THEME STYLES -->

    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
    </script>
    <script src="<?= base_url('assets/javascript/countries.js') ?>"></script>
    <script src="<?= base_url('assets/javascript/pdf.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.slim.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <style>
        .navi-text {
            font-size: 17px;
            font-weight: 700;
            color: #000;
        }

        .bnavbar {
            display: none;
        }

        @media only screen and (max-width: 600px) {
            .bnavbar {
                overflow: hidden;
                position: fixed;
                bottom: 0;
                width: 100%;
                display: flex;
                justify-content: space-around;
            }

            .bnavbar a {
                color: #fff;
                text-align: center;
                padding: 7px 10px;
                text-decoration: none;
            }

            .bnavbar a:hover {
                background: #f1f1f1;
                color: black;
            }

            .bnavbar a.active {
                background-color: #fff;
            }

            .desktop {
                display: none;
            }
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 30px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: red;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: green;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        td {
            background-color: #fff;

        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>

<body>
    <!-- .app -->
    <div class="app">
        <!-- .app-header -->
        <header class="app-header app-header-dark text-center" style="height:100px;">
            <img src="<?= base_url('uploads/' . $company_logo) ?>" width="150px" style="margin-top:20px">
        </header><!-- /.app-header -->
        <!--- ************ FORM*****************--->
        <main class="app-main" style="margin-top:50px">
            <div class="wrapper">
                <!-- .page -->
                <div class="page">
                    <!-- .page-inner -->
                    <div class="page-inner">
                        <div class="container">
                            <!-- .container -->
                            <div class="page-section">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Complete Your Enrollment</h4>
                                            </div>
                                            <div class="card">
                                                <form method="post" action="<?= base_url('open_account') ?>" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <!-- form row -->
                                                        <h5 class="text-primary mb-3">Personal <span class="text-secondary">Information</span></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-4 mb-3">
                                                                <label class="text-primary font-weight-bold">Name</label> <input type="text" class="form-control" name="name" value="<?= $name ?>" required>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label class="text-primary font-weight-bold">Email</label> <input type="email" class="form-control" name="email" value="<?= $email ?>" required>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label class="text-primary font-weight-bold">Phone</label> <input type="text" class="form-control" name="phone" value="" required>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Date of Birth</label>
                                                                <input id="flatpickr02" type="text" name="dob" value="" class="form-control" data-toggle="flatpickr" data-enable-time="false" data-date-format="l J \of F Y" required>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Gender</label>
                                                                <select name="gender" class="form-control">
                                                                    <option value="">Select</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Social Security Number/Tax ID</label> <input type="text" class="form-control" name="ssn" value="">
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Occupation</label>
                                                                <input type="text" class="form-control" name="occupation" value="">
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <h5 class="text-primary mb-3">Contact <span class="text-secondary">Information</span></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-4 mb-3">
                                                                <label class="text-primary font-weight-bold">Country</label>
                                                                <select name="country" class="form-control" id="country">
                                                                    <option value="">Select</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label class="text-primary font-weight-bold">City</label>
                                                                <select name="city" class="form-control" id="state">
                                                                    <option value="">Select Country First</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label class="text-primary font-weight-bold">ZIP</label> <input type="text" class="form-control" name="zip" value="">
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label class="text-primary font-weight-bold">Address</label>
                                                                <textarea name="address" class="form-control" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <h5 class="text-primary mb-3">Next of Kin <span class="text-secondary">Information</span></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Name</label> <input type="text" class="form-control" name="nok_name" value="" required>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Email</label> <input type="email" class="form-control" name="nok_email" value="" required>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Phone</label> <input type="text" class="form-control" name="nok_phone" value="" required>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Relationship</label> <input type="text" class="form-control" name="nok_relationship" placeholder="e.g: Brother">
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label class="text-primary font-weight-bold">Address</label>
                                                                <textarea name="nok_address" class="form-control" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <h5 class="text-primary mb-3">Account <span class="text-secondary">Information</span></h5>
                                                        <div class="form-row">
                                                            <!-- form column -->
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Account
                                                                    Currency</label>
                                                                <select name="currency" class="form-control" required>
                                                                    <option value="">Select</option>
                                                                    <option value="$">US Dollar</option>
                                                                    <option value="€">Euro</option>
                                                                    <option value="£">Pounds Sterling</option>
                                                                    <option value="RM">Malaysian Ringgit - RM</option>
                                                                    <option value="SGD$">Singapore Dollar</option>
                                                                    <option value="₹">Indian Rupee</option>
                                                                    <option value="Rp">Indonesian Rupiah</option>
                                                                    <option value="AUD$">Australian Dollar</option>
                                                                    <option value="CAD$">Canadian Dollar</option>
                                                                    <option value="₣">CFP Franc</option>
                                                                    <option value="¥">Japanese Yen</option>
                                                                    <option value="¥">Chinese Yen</option>
                                                                    <option value="ا.د">Jordanian Dinar</option>
                                                                    <option value="ك.د">Kuwaiti Dinar</option>
                                                                    <option value="MXN$">Mexican Peso</option>
                                                                    <option value=".ع.ر">Omani Rial</option>
                                                                    <option value="₱">Philippine Peso</option>
                                                                    <option value="ق.ر">Qatari Rial</option>
                                                                    <option value=" ﷼">Saudi Riyal</option>
                                                                    <option value="₩">South Korean Won</option>
                                                                    <option value="฿">Thailand Baht</option>
                                                                    <option value="₫">Vietnam Dong</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Password</label> <input type="password" class="form-control" name="password" value="" required>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">Repeat Password</label> <input type="password" class="form-control" name="repeat_password" value="" required>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">PIN</label> <input type="text" class="form-control" maxlength="4" name="pin" value="" required>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <h5 class="text-primary mb-3">KYC <span class="text-secondary">Verification</span></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-6 mb-3">
                                                                <label class="text-primary font-weight-bold">Passport Photograph</label> <input type="file" class="form-control" name="passport" required>
                                                                <small><strong>Accepted File Type:</strong> png, jpg, gif (max: 5mb)</small>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="text-primary font-weight-bold">Means of Identification</label> <input type="file" class="form-control" name="kyc" required>
                                                                <small><strong>Accepted Documents:</strong> Passport ID, National ID, Bank Statement, Utility Bill</small><br>
                                                                <small><strong>Accepted File Type:</strong> PDF, png, jpg, gif (max: 5mb)</small>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-row">
                                                            <div class="col-md-6 mb-3">
                                                                <div class="g-recaptcha" data-sitekey="<?= $captchaPublicKey; ?>"></div>
                                                            </div>
                                                        </div>
                                                        <HR>

                                                        <div class="form-row">
                                                            <div class="col-md-3 mb-3">
                                                                <label class="text-primary font-weight-bold">&nbsp;</label>
                                                                <input name="complete_acount" type="submit" class="btn btn-primary form-control" value="SUBMIT FORM">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.page -->
                </div>
            </div>
        </main>
    </div>
    <!--- ************ FORM*****************--->
    <!--- ************ ALERT*****************--->
    <?php if (session()->getFlashdata("msg")) { ?>
        <script>
            window.onload = function() {
                document.getElementById("popup").click();
            }
        </script>
        <button type="button" data-toggle="modal" id="popup" data-target="#alert" style='display:none'>Button</button>
        <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="exampleModalCenterLabel" class="modal-title"> Alert </h5>
                    </div>
                    <div class="modal-body">
                        <?= session()->getFlashdata("msg") ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
    <!--- ************DEPOSIT ALERT*****************--->
    <!--- ************ ALERT*****************--->
    <?php if (session()->getFlashdata("finish")) { ?>
        <script>
            window.onload = function() {
                document.getElementById("pop").click();
            }
        </script>
        <button type="button" data-toggle="modal" id="pop" data-target="#alert" style='display:none'>Button</button>
        <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="exampleModalCenterLabel" class="modal-title"> Welcome to <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?></h5>
                    </div>
                    <div class="modal-body">
                        <?= session()->getFlashdata("finish") ?>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url() ?>" class="btn btn-primary">CONTINUE</a>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
    <!--- ************DEPOSIT ALERT*****************--->
    </div>
    <script language="javascript">
        populateCountries("country", "state");
        populateCountries("country2");
        populateCountries("country2");
    </script>
    <script src="<?= base_url('assets/vendor/popper.js/umd/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/summernote/summernote-bs4.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/summernote/summernote-tools.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/pace-progress/pace.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/stacked-menu/js/stacked-menu.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/javascript/theme.min.js') ?>"></script> <!-- END THEME JS -->
    <script src="<?= base_url('assets/javascript/pages/dashboard-demo.js') ?>"></script> <!-- END PAGE LEVEL JS -->

    <script src="<?= base_url('assets/vendor/datatable/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/datatable/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/datatable/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/datatable/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/flatpickr/flatpickr.min.js') ?>"></script>

</body>

</html>