<div id="appCapsule">
    <!-- Transactions -->
    <div class="section mt-4">
        <div class="row">
            <div class="col-lg-12">
                <style>
                    .progress-value1 {
                        animation: load 5s normal forwards;
                        box-shadow: 0 10px 40px -10px #fff;
                        border-radius: 10px;
                        background: rgb(44, 245, 99);
                        background: linear-gradient(261deg, rgba(44, 245, 99, 1) 57%, rgba(154, 255, 12, 1) 98%);
                        height: 30px;
                        width: 0;
                    }
                    
                    .progress-value1 {
                        color: #fff;
                        font-size: 14px;
                        text-align: center;
                        margin-top:
                    }
                    
                    @keyframes load {
                        0% {
                            width: 75%;
                        }
                    }
                </style>
                <div class="card">
                    <div class="card-header">
                        <div class="progress-value1" style="width: 100%"><span>100%</span></div>
                        <button id="download-page-as-image" class="btn btn-sm btn-outline-primary float-right">DOWNLOAD&nbsp;<i class="fas fa-download"></i></button>
                    
                    </div>
                    <div class="card-body">
                        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=VT323">
                        <style>
                            #invoice-POS,
                            #content {
                                padding: 2mm;
                                margin: 0 auto;
                                width: 500px;
                                background-color: #fff;
                                font-family: "VT323", regular;
    
                            }
                            
                            @media only screen and (max-width: 600px) {
                                #invoice-POS,
                                #content {
                                    padding: 2mm;
                                    margin: 0 auto;
                                    width: 100%;
                                    background-color: #fff;
                                    font-family: "VT323", regular;
                                }
                            }
                            
                            #invoice-POS::selection {
                                color: #fff;
                            }
                            
                            #invoice-POS::moz-selection {
                                background: <?= $theme_color; ?>;
                                color: #fff;
                            }
                            
                            #invoice-POS h1 {
                                font-size: 20px;
                                color: #222;
                            }
                            
                            #invoice-POS h2 {
                                font-size: 20px;
                            }
                            
                            #invoice-POS h3 {
                                font-size: 25px;
                                font-weight: 300;
                                line-height: 2em;
                            }
                            
                            #invoice-POS p {
                                font-size: 16px;
                                color: #666;
                                line-height: 1.2em;
                            }
                            
                            #invoice-POS #top,
                            #invoice-POS #mid,
                            #invoice-POS #bot {
                                /* Targets all id with 'col-' */
                                border-bottom: 1px solid #eee;
                            }
                            
                            #invoice-POS #top {
                                height: auto;
                                padding: 20px;
                            }
                            
                            #invoice-POS #mid {
                                height: auto;
                                padding: 10px 0;
                            }
                            
                            #invoice-POS #bot {
                                min-height: 50px;
                            }
                            
                            #invoice-POS #top .logo {
                                height: 60px;
                                width: 100px;
                                background: url("<?= base_url('uploads/'.$company_logo) ?>") no-repeat;
                                background-size: 80px 40px;
                            }
                            
                            #invoice-POS .info {
                                display: block;
                                margin-left: 0;
                                text-align: center;
                            }
                            
                            #invoice-POS .title {
                                float: right;
                            }
                            
                            #invoice-POS .title p {
                                text-align: right;
                            }
                            
                            #invoice-POS table {
                                width: 100%;
                                border-collapse: collapse;
                            }
                            
                            #invoice-POS .tabletitle {
                                font-size: 18px;
                                background: #eee;
                            }
                            
                            #invoice-POS .tabletitle td {
                                padding: 5px 0px 0px 10px;
                            }
                            
                            #invoice-POS .service td {
                                padding: 5px 0px 0px 10px;
                            }
                            
                            #invoice-POS .service td {
                                border-bottom: 1px solid #eee;
                            }
                            
                            #invoice-POS .item {
                                width: 24mm;
                            }
                            
                            #invoice-POS .itemtext {
                                font-size: 16px;
                            }
                            
                            #invoice-POS #legalcopy {
                                margin-top: 5mm;
                            }
                            
                            #invoice-POS .legal {
                                text-align: center;
                            }
                            
                            #invoice-POS .botlogo {
                                display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 30%;
                            }
                            
                            #invoice-POS .mainlogo {
                                display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 30%;
                            }
                            
                            #invoice-POS button {
                                background-color: #2f3a5f;
                                color: white;
                                text-align: center;
                                display: inline-block;
                                font-size: 14px;
                                padding: 10px;
                                cursor: pointer;
                                outline: none;
                                border: none;
                                width: 100%;
                            }
                            
                            #invoice-POS button:hover,
                            #invoice-POS button:active {
                                background-color: #ffffff;
                                color: #2f3a5f;
                                border: 2px solid #2f3a5f;
                                font-weight: 600;
                            }
                            
                            .myBg {
                                position: relative;
                                z-index: 1;
                            }
                            
                            .myBg .bg {
                                position: absolute;
                                z-index: -1;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                background-repeat: repeat;
                                background-size: auto;
                                background: url(<?= base_url('uploads/' . $company_favicon) ?>) center center;
                                opacity: .1;
                                -webkit-filter: grayscale(100%);
                                /* Safari 6.0 - 9.0 */
                                filter: grayscale(100%);
                            }
                        </style>

                        <div id="content">
                            <div id="invoice-POS" class="myBg" style="padding: 5px 5px;">
                                <div class="bg"></div>

                                <div id="top">
                                    <img src="<?= base_url('uploads/'.$company_logo) ?>" class="mainlogo">
                                    <div class="info" style="text-align: center; color: #2f3a5f;">
                                        <h2>Transaction Receipt</h2>
                                    </div>
                                    <!--End Info-->
                                </div>
                                <!--End InvoiceTop-->

                                <div id="mid">
                                    <div class="info">
                                        <p>
                                            <?= $header ?> 
                                        </p>
                                    </div>
                                </div>
                                <!--End Invoice Mid-->

                                <div id="bot">
                                    <div id="table">
                                        <!--SENDER DETAILS -->
                                        <table>
                                            <tr class="tabletitle">
                                                <td class="item" colspan="2">
                                                    <h3 class="font-weight-bold">SENDER</h3>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Name
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext text-capitalize">
                                                        <?= $name; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Account Number
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">********
                                                        <?= $sender ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Account Type
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                        <?= $xType; ?>
                                                    </p>
                                                </td>
                                            </tr>

                                        </table>
                                        <!--SENDER DETAILS -->

                                        <table>
                                            <tr class="tabletitle">
                                                <td class="item" colspan="2">
                                                    <h3 class="font-weight-bold">RECEIVER</h3>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Name
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext text-capitalize">
                                                        <?= $receiver_name ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Account Number
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">********
                                                        <?= $receiver_account ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Amount
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                        <?= $the_amount ?>
                                                    </p>
                                                </td>
                                            </tr>

                                        </table>


                                        <table>
                                            <tr class="tabletitle">
                                                <td class="item" colspan="2">
                                                    <h3 class="font-weight-bold">RECEIVER BANK DETAILS</h3>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Bank
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                        <?= $theBank ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Address
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                        <?= $theBankAddress ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <?php if ($theRouting !== ''){ ?>
                                               <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Routing Number
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                     <?= $theRouting ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                               <?php } ?>
                                            <?php if ($swiftCode !== ''){ ?>
                                                <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext text-uppercase">Swift Code
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                        <?= $swiftCode ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <?php } ?>

                                        </table>

                                        <table>
                                            <tr class="tabletitle">
                                                <td class="item" colspan="2">
                                                    <h3 class="font-weight-bold">TRANSACTION DETAILS</h3>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext">REMARKS
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                        <?= $theRemarks ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext">REFERENCE
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                        <?= $theReference ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext">DATE
                                                    </p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">
                                                        <?= $theDate ?>
                                                    </p>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                    <!--End Table-->

                                    <div id="legalcopy">
                                        <img src="<?= base_url('assets/images/nsua.jpg') ?>" class="botlogo">
                                    </div>
                                    <br>
                                    <div align="center"><small>Printed on <?= date("l jS \of F Y H:i"); ?></small>
                                    </div>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                        <!--End InvoiceBot-->
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-content text-muted text-center">
                            &nbsp;
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- * Transac -->
    </div>
    <script>
        setUpDownloadPageAsImage();

        function setUpDownloadPageAsImage() {
            document.getElementById( "download-page-as-image" ).addEventListener( "click", function () {
                html2canvas( document.getElementById( "content" ) ).then( function ( canvas ) {
                    console.log( canvas );
                    simulateDownloadImageClick( canvas.toDataURL(), '<?= $theReference ?>-<?= date('Ymdis'); ?>_Receipt.png' );
                } );
            } );
        }

        function simulateDownloadImageClick( uri, filename ) {
            var link = document.createElement( 'a' );
            if ( typeof link.download !== 'string' ) {
                window.open( uri );
            } else {
                link.href = uri;
                link.download = filename;
                accountForFirefox( clickLink, link );
            }
        }

        function clickLink( link ) {
            link.click();
        }

        function accountForFirefox( click ) { // wrapper function
            let link = arguments[ 1 ];
            document.body.appendChild( link );
            click( link );
            document.body.removeChild( link );
        }
    </script>