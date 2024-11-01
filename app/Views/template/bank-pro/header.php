<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- Q2 Credential Stuffing Defense-->
        <script type="text/javascript" src="<?= $front_theme ?>/assets/common.js"></script>
        <!--End Q2 Credential Stuffing Defense-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            <?= $page . ' | ' . $company_description ?>
        </title>
        <meta name="description" content="<?= $company_description ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Facebook meta info - http://ogp.me/ -->
        <meta property="og:title" content="<?= $page . ' | ' . $company_description ?>">
        <meta property="og:description" content="<?= $company_description ?>">
        <meta property="og:url" content="<?= base_url() ?>">
        <!--<meta property="og:image" content="<?= base_url('uploads/' . $company_favicon) ?>">-->
        <meta property="og:image" content="<?= base_url('uploads/' . $company_logo) ?>">
        <meta name="twitter:card" content="summary"><!-- leave as-is -->
        <meta name="twitter:site" content="@<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>">
        <!-- replace w/Twitter handle for organization -->
        <meta name="twitter:url" content="/">
        <meta name="twitter:title" content="<?= $page . ' | ' . $company_description ?>">
        <meta name="twitter:description" content="<?= $company_description ?>">
       <!-- <meta name="twitter:image" content="<?= base_url('uploads/' . $company_favicon) ?>">-->
        <meta name="twitter:image" content="<?= base_url('uploads/' . $company_logo) ?>>
        <!-- minimum size of 120px by 120px and must be less than 1MB in file size. -->
        <!-- The page's canonical URL (absent of query strings, hash tags, etc.) -->
        <link rel="canonical" href="<?= current_url() ?>">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="<?= base_url('uploads/' . $company_favicon) ?>">
        <link rel="shortcut icon" href="<?= base_url('uploads/' . $company_favicon) ?>">

        <!-- Start SmartBanner configuration -->
        <meta name="smartbanner:title" content="<?= $company_name ?>">
        <meta name="smartbanner:author" content="<?= $company_name ?>">
        <meta name="smartbanner:price" content="Free">
        <meta name="smartbanner:price-suffix-apple" content=" - On the App Store">
        <meta name="smartbanner:price-suffix-google" content=" - In Google Play">
        <meta name="smartbanner:icon-apple" content="<?= base_url('uploads/' . $company_favicon) ?>">
        <meta name="smartbanner:icon-google" content="<?= base_url('uploads/' . $company_favicon) ?>">
        <meta name="smartbanner:button" content="View">
        <meta name="smartbanner:button-url-apple" content="#">
        <meta name="smartbanner:button-url-google" content="#">
        <meta name="smartbanner:enabled-platforms" content="android,ios">
        <meta name="smartbanner:disable-positioning" content="true">
        <!-- enable next tag if cookie timeout is chosen, otherwise banner will stay closed forever - unit is days to remain closed -->
        <meta name="smartbanner:hide-ttl" content="90">
        <script src='<?= $front_theme ?>/js/vendor/smartbanner.js' async defer></script>
        <!-- End SmartBanner configuration -->
        <!-- Typekit fonts -->
        <link rel="stylesheet" href="<?= $front_theme ?>/use.typekit.net/ehc6rvq.css">
        <link rel="stylesheet" href="<?= $front_theme ?>/css/main0338.css" <!-- Refer Live Referrer Registration
            Resources-->
        <script src="<?= $front_theme ?>/rlforms.referlive.com/scripts/ReferLive_share_v2.js"></script>
        <link rel="stylesheet" href="<?= $front_theme ?>/rlforms.referlive.com/css/ReferLive_banking.css">


        <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "url": "<?= base_url() ?>",
        "copyrightYear": "<?= date('Y') ?>",
        "sourceOrganization": {
        "@type": "Organization",
        "name": "<?= $company_name ?>",
        "alternateName": "<?= $company_name ?> - <?= $page ?>",
        "logo": "<?= base_url('uploads/' . $company_logo) ?>"
        "url": "<?= base_url() ?>",
        "location" : {
        "@type" : "PostalAddress",
        "streetAddress" : "<?= $company_address ?>",
        "addressLocality" : "Local",
        "addressRegion" : "Region",
        "postalCode" : "<?= rand(10000, 99999) ?>"
        }
        },
        "sameAs": [
        "https://www.facebook.com/<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>",
        "https://twitter.com/<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>",
        "https://www.linkedin.com/company/<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>"
        ],
        "potentialAction": {
        "@type": "SearchAction",
        "target": "<?= base_url("search?q={search_term_string}") ?>",
        "query-input": "required name=search_term_string"
        }
        }
    </script>
        <script src='<?= $front_theme ?>/js/vendor/modernizr-custom.js'></script>
        <script src="<?= $front_theme ?>/js/main.js"></script>
    </head>

    <body>



        <div class="sticky-sentinel-before" aria-hidden="true"></div>
        <header id="header" class="l-header js-header">
            <div class="l-header__bottom">
                <div id="header-inner" class="l-header__bottom-inner l-contain u-cf js-l-contain">

                    <a href="<?= base_url() ?>" class="l-header__logo"><img
                            src="<?= base_url('uploads/' . $company_logo) ?>" width="200px" /><span
                            class="u-visuallyhidden">
                            <?= $company_name ?>
                        </span></a>

                    <div class="l-header__action js-header-action">
                        <ul class="l-header__action__l1 l-header__action__desktop">
                            <li class="is-active js-header-login-toggle" role="presentation">
                                <a href="#" data-open="header-login">LOGIN</a>
                            </li>
                            <?php if ($allow_register == 1) { ?>
                                <li class="" role="presentation">
                                    <a href="#" class="js-header-login-toggle" data-open="header-register">OPEN ACCOUNT</a>
                                </li>
                            <?php } ?>
                        </ul>

                        <ul class="l-header__action__l1 l-header__action__mobile">
                            <li class="is-active">
                                <a href="#" class="js-header-login-toggle" data-open="header-login">Login</a>

                                <div id="nav-personal-mobile" class="l-header__action__l2" data-toggler=".is-active">
                                    <div class="l-header__action__l2-wrap">
                                        <button class="close-button" data-toggle="nav-personal-mobile"
                                            aria-label="Close Personal Navigation" type="button">
                                            <span class="icon icon--solid icon--x">
                                                <span class="icon__bg"></span>
                                            </span>
                                        </button>
                                        <p class="l-header__action__l2-title">Personal Banking</p>
                                        <div class="section-links">
                                            <div class="grid-x grid-padding-x grid-padding-y">
                                            
                                                <div class="cell small-6 large-4">
                                                    <div class="section-links__item">
                                                        <a href="#" class="link--image">
                                                            <span class="icon icon--solid">
                                                                <img src="<?= $front_theme ?>/business-navigation-mobile-icons/ico-credit-cards.svg"
                                                                    width="85" height="85" alt="Credit Cards">
                                                            </span>
                                                            <span class="link-chevron">Bank</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-4">
                                                    <div class="section-links__item">
                                                        <a href="borrow" class="link--image">
                                                            <span class="icon icon--solid">
                                                                <img src="<?= $front_theme ?>/business-navigation-mobile-icons/ico-loans.svg"
                                                                    width="85" height="85" alt="Loans">
                                                            </span>
                                                            <span class="link-chevron">Borrow</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-4">
                                                    <div class="section-links__item">
                                                        <a href="save" class="link--image">
                                                            <span class="icon icon--solid">
                                                                <img src="<?= $front_theme ?>/business-navigation-mobile-icons/ico-loans.svg"
                                                                    width="85" height="85" alt="Loans">
                                                            </span>
                                                            <span class="link-chevron">Save</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-4">
                                                    <div class="section-links__item">
                                                        <a href="invest" class="link--image">
                                                            <span class="icon icon--solid">
                                                                <img src="<?= $front_theme ?>/business-navigation-mobile-icons/ico-invest.svg"
                                                                    width="85" height="85" alt="Invest">
                                                            </span>
                                                            <span class="link-chevron">Wealth &amp; Retire</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-4">
                                                    <div class="section-links__item">
                                                        <a href="payments" class="link--image">
                                                            <span class="icon icon--solid">
                                                                <img src="<?= $front_theme ?>/business-navigation-mobile-icons/ico-payments.svg"
                                                                    width="85" height="85" alt="Payments">
                                                            </span>
                                                            <span class="link-chevron">Payments</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php if ($allow_register == 1) { ?>
                                <li>
                                    <a href="#" class="js-header-login-toggle" data-open="header-register">Open Account</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="l-header__nav js-header-nav" style="display:block">
                        <span class="header__routing">Routing #
                            <?= $bank_routing ?>
                        </span>

                        <nav id="nav-personal" class="nav-primary js-nav-primary js-nav-personal is-active" data-toggler=".is-active" aria-label="Personal Banking Navigation">
                        <ul class="nav-primary__l1 l-contain">
                            <li class="nav-primary__l1-item">
                                    <a href="<?= base_url() ?>" class="nav-primary__l1-item-link nav-primary__l1-item-link--bank"><span class='nav-primary__l1-item-link-text'>Home</span></a>
                                    </li>
                                <li class="nav-primary__l1-item">
                                    <a href="/bank" class="nav-primary__l1-item-link nav-primary__l1-item-link--bank"><span class='nav-primary__l1-item-link-text'>Bank</span></a>

                                    <ul class="nav-primary__flyout js-nav-primary-flyout">
                                        <li class="l-contain u-cf">
                                            <div class="nav-primary__flyout-nav">
                                                <div class="nav-primary__flyout-nav-title h4 l-mb-1">Bank</div>
                                                <ul class="nav-primary__l2">
                                                        <li class="nav-primary__l2-item">
                                                            <a href="#" class="nav-primary__l2-item-link js-header-login-toggle" data-open="header-login"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Accounts</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="credit-cards" class="nav-primary__l2-item-link">Credit Cards</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="bank" class="nav-primary__l2-item-link">Online &amp; Mobile Banking</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="about-us" class="nav-primary__l2-item-link">Why Bank with <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>?</a>
                                                        </li>
                                                </ul>
                                            </div>

                                            <div class="nav-primary__flyout-feature">
                                                    
                                                    <span class="nav-primary__flyout-feature-title h4 u-block" id="feature-title-0">Get rewards on Us</span>
                                                    <div class="nav-primary__flyout-feature-desc l-mb-1">
                                                        <div class="rtf rtf--compact">
                                                            <p>For a limited time, get a reward when you bank with us! Additional terms apply.</p>
                                                        </div>
                                                    </div>
                                                                <a href="checking-accounts" class="nav-primary__flyout-feature-cta" aria-labelledby="feature-title-0">Learn More</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-primary__l1-item">
                                    <a href="/save" class="nav-primary__l1-item-link nav-primary__l1-item-link--bank"><span class='nav-primary__l1-item-link-text'>Save</span></a>

                                    <ul class="nav-primary__flyout js-nav-primary-flyout">
                                        <li class="l-contain u-cf">
                                            <div class="nav-primary__flyout-nav">
                                                <div class="nav-primary__flyout-nav-title h4 l-mb-1">Save</div>
                                                <ul class="nav-primary__l2">
                                                        <li class="nav-primary__l2-item">
                                                            <a href="save#HighYielSavings" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> High Yield Savings</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="save#StarSavings" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Star Savings</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="save#Certificates" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Certificates</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="save#HolidayClub" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Holiday Club &amp; Auxiliary Savings</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="save#KidsClub" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Kids Club</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="save#MoneyMarket" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Money Market</a>
                                                        </li>
                                                </ul>
                                            </div>

                                            <div class="nav-primary__flyout-feature">
                                                    
                                                    <span class="nav-primary__flyout-feature-title h4 u-block" id="feature-title-1"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Certificates </span>
                                                    <div class="nav-primary__flyout-feature-desc l-mb-1">
                                                        <div class="rtf rtf--compact">
                                                            <p>Build your savings with a low-risk, fixed rate.* Additional terms apply.</p>
                                                        </div>
                                                    </div>
                                                                <a href="save#Certificates" class="nav-primary__flyout-feature-cta" aria-labelledby="feature-title-1">Learn More</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-primary__l1-item">
                                    <a href="/borrow" class="nav-primary__l1-item-link nav-primary__l1-item-link--bank"><span class='nav-primary__l1-item-link-text'>Borrow</span></a>

                                    <ul class="nav-primary__flyout js-nav-primary-flyout">
                                        <li class="l-contain u-cf">
                                            <div class="nav-primary__flyout-nav">
                                                <div class="nav-primary__flyout-nav-title h4 l-mb-1">Borrow</div>
                                                <ul class="nav-primary__l2">
                                                        <li class="nav-primary__l2-item">
                                                            <a href="borrow#creditcard" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Credit Cards</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="borrow#mortgage" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Mortgage and Home Loan Center</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="borrow#personal" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Personal Loans</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="borrow#auto" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Auto &amp; Motorcycle Loans</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="borrow#refinance" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Auto Refinance</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="borrow#student" class="nav-primary__l2-item-link"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Student Loans</a>
                                                        </li>
                                                </ul>
                                            </div>

                                            <div class="nav-primary__flyout-feature">
                                                    <span class="nav-primary__flyout-feature-title h4 u-block" id="feature-title-2">0% Intro APR* for 15 Months </span>
                                                    <div class="nav-primary__flyout-feature-desc l-mb-1">
                                                        <div class="rtf rtf--compact">
                                                            <p>Pay no interest until <?= date("Y") + 1 ?> on all purchases with a new credit card from <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>.</p>
                                                        </div>
                                                    </div>
                                                                <a href="borrow#creditcard" class="nav-primary__flyout-feature-cta" aria-labelledby="feature-title-2">Learn More</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-primary__l1-item">
                                    <a href="/invest" class="nav-primary__l1-item-link nav-primary__l1-item-link--bank"><span class='nav-primary__l1-item-link-text'>Wealth &amp; Retire</span></a>

                                    <ul class="nav-primary__flyout js-nav-primary-flyout">
                                        <li class="l-contain u-cf">
                                            <div class="nav-primary__flyout-nav">
                                                <div class="nav-primary__flyout-nav-title h4 l-mb-1">Wealth &amp; Retire</div>
                                                <ul class="nav-primary__l2">
                                                        <li class="nav-primary__l2-item">
                                                            <a href="invest#investmentTeam" class="nav-primary__l2-item-link">Our Investment Team</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="invest#retirement" class="nav-primary__l2-item-link">Retirement Planning</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="invest/#financial" class="nav-primary__l2-item-link">Financial Planning</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="invest/#estate" class="nav-primary__l2-item-link">Estate Planning &amp; Wealth Transfer</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="invest/#ira" class="nav-primary__l2-item-link">IRA Rollover Assistance</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="invest/#online" class="nav-primary__l2-item-link">Online Investing &amp; Brokerage</a>
                                                        </li>
                                                </ul>
                                            </div>

                                            <div class="nav-primary__flyout-feature">
                                                    <span class="nav-primary__flyout-feature-title h4 u-block" id="feature-title-3">Partner With Our CFS Advisors</span>
                                                    <div class="nav-primary__flyout-feature-desc l-mb-1">
                                                        <div class="rtf rtf--compact">
                                                            <p>Build strength for tomorrow. Schedule your complimentary consultation today. </p>
                                                        </div>
                                                    </div>
                                                                <a href="invest" class="nav-primary__flyout-feature-cta" aria-labelledby="feature-title-3">Get Started</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-primary__l1-item">
                                    <a href="/insure" class="nav-primary__l1-item-link nav-primary__l1-item-link--bank"><span class='nav-primary__l1-item-link-text'>Insure</span></a>

                                    <ul class="nav-primary__flyout js-nav-primary-flyout">
                                        <li class="l-contain u-cf">
                                            <div class="nav-primary__flyout-nav">
                                                <div class="nav-primary__flyout-nav-title h4 l-mb-1">Insure</div>
                                                <ul class="nav-primary__l2">
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/insure/#medicare" class="nav-primary__l2-item-link">Medicare Insurance</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/insure/#auto" class="nav-primary__l2-item-link">Auto Insurance</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/insure/#homeowners" class="nav-primary__l2-item-link">Homeowners and Renters Insurance</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/insure/#life" class="nav-primary__l2-item-link">Life Insurance</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/insure/#accidental" class="nav-primary__l2-item-link">Accidental Death &amp; Dismemberment Insurance</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/insure/#hospital" class="nav-primary__l2-item-link">Hospital Accident Insurance</a>
                                                        </li>
                                                </ul>
                                            </div>

                                            <div class="nav-primary__flyout-feature">
                                                    <span class="nav-primary__flyout-feature-title h4 u-block" id="feature-title-4">Let’s Navigate Medicare Together</span>
                                                    <div class="nav-primary__flyout-feature-desc l-mb-1">
                                                        <div class="rtf rtf--compact">
                                                            <p><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> offers dedicated Medicare Specialists to help you better prepare and understand your Medicare options. </p>
                                                        </div>
                                                    </div>
                                                                <a href="/insure" class="nav-primary__flyout-feature-cta" aria-labelledby="feature-title-4">Learn More</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-primary__l1-item">
                                    <a href="/learn-and-plan" class="nav-primary__l1-item-link nav-primary__l1-item-link--bank"><span class='nav-primary__l1-item-link-text'>Learn &amp; Plan</span></a>

                                    <ul class="nav-primary__flyout js-nav-primary-flyout">
                                        <li class="l-contain u-cf">
                                            <div class="nav-primary__flyout-nav">
                                                <div class="nav-primary__flyout-nav-title h4 l-mb-1">Learn &amp; Plan – Financial Education</div>
                                                <ul class="nav-primary__l2">
                                                        <li class="nav-primary__l2-item">
                                                            <a href="tax-checklist-5-things-to-remember" class="nav-primary__l2-item-link">Tax Checklist: 5 Things to Remember</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/how-to-save-for-summer-vacation" class="nav-primary__l2-item-link">How to Start Saving for Summer Vacation</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="simple-ways-to-manage-a-checking-account" class="nav-primary__l2-item-link">Simple Ways to Manage a Checking Account</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/the-impact-of-rising-rates-and-inflation-on-your-business" class="nav-primary__l2-item-link">The Impact of Rising Rates and Inflation on Your Business</a>
                                                        </li>
                                                       
                                                </ul>
                                            </div>

                                            <div class="nav-primary__flyout-feature">
                                                    <span class="nav-primary__flyout-feature-title h4 u-block" id="feature-title-5">Looking For Ways to Grow Your Nest Egg?</span>
                                                    <div class="nav-primary__flyout-feature-desc l-mb-1">
                                                        <div class="rtf rtf--compact">
                                                            <p>When it comes to saving wisely and investing for your future, <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> has plenty of great options to help you reach your goals. </p>
                                                        </div>
                                                    </div>
                                                                <a href="bank" class="nav-primary__flyout-feature-cta" aria-labelledby="feature-title-5">Learn More</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-primary__l1-item">
                                    <a href="/payments" class="nav-primary__l1-item-link nav-primary__l1-item-link--bank"><span class='nav-primary__l1-item-link-text'>Payments</span></a>

                                    <ul class="nav-primary__flyout js-nav-primary-flyout">
                                        <li class="l-contain u-cf">
                                            <div class="nav-primary__flyout-nav">
                                                <div class="nav-primary__flyout-nav-title h4 l-mb-1">Payments</div>
                                                <ul class="nav-primary__l2">
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/payments/#auto" class="nav-primary__l2-item-link js-header-login-toggle" data-open="header-login">Auto Loan Customer Center</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/payments/#one" class="nav-primary__l2-item-link">One Time Payments</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/payments/#two" class="nav-primary__l2-item-link">Pay by Mail</a>
                                                        </li>
                                                        <li class="nav-primary__l2-item">
                                                            <a href="/payments/#three" class="nav-primary__l2-item-link">Pay at Branch</a>
                                                        </li>
                                                </ul>
                                            </div>

                                            <div class="nav-primary__flyout-feature">
                                                    <span class="nav-primary__flyout-feature-title h4 u-block" id="feature-title-6">Real-Time Account Alerts</span>
                                                    <div class="nav-primary__flyout-feature-desc l-mb-1">
                                                        <div class="rtf rtf--compact">
                                                            <p>Manage your loan and stay current on statements, payments, and more with personalized alerts and reminders.</p>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="nav-primary__flyout-feature-cta js-header-login-toggle" data-open="header-login" aria-labelledby="feature-title-6">Login Now</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                        </ul>
                </nav>

                        <div class="l-header__nav-contacts">
                            <div class="l-header__nav-contacts__item">
                                <p class="l-header__nav-contacts__item-title">
                                    <span class="icon">
                                        <img src="<?= $front_theme ?>/images/assets/ico-clock.svg" width="30"
                                            height="30" alt="">
                                    </span>
                                    Branch Hours
                                </p>
                                <dl class="l-header__nav-contacts__item-hours">
                                    <dt>Mon-Thurs</dt>
                                    <dd>8:30 a.m.-5:00 p.m.</dd>
                                    <dt>Friday:</dt>
                                    <dd>8:30 a.m.-6:00 p.m.</dd>
                                    <dt>Saturday:</dt>
                                    <dd>9:00 a.m.-1:00 p.m.</dd>
                                </dl>
                            </div>
                            <div class="l-header__nav-contacts__item">
                                <p class="l-header__nav-contacts__item-title">
                                    <span class="icon">
                                        <img src="<?= $front_theme ?>/prefooter-icons/ico-star-circle.svg" width="30"
                                            height="30" alt="">
                                    </span>
                                    Customer Service
                                </p>
                                <p class="l-header__nav-contacts__item-cta">
                                    <a href="mailto:<?= $company_email ?>">
                                        <span class="icon">
                                            <img src="<?= $front_theme ?>/icons/footer-icons/call-citadel-credit-union.svg"
                                                width="15" height="15" alt="">
                                        </span>
                                        <?= $company_email ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="l-header__login-toggle js-header-login-toggle" type="button"
                        data-open="header-login">
                        &nbsp;
                    </button>


                    <?= view('includes/translator') ?>

                    <button class="l-header__nav-toggle u-hidden-mq-lg js-header-nav-toggle" type="button">
                        <span class="u-visuallyhidden">Show main navigation</span>
                    </button>
                </div>
            </div>

            <div id="header-login" class="l-header__login reveal js-header-login" data-reveal
                data-animation-in="fade-in" data-animation-out="fade-out" data-append-to="header"
                data-additional-overlay-classes="l-header__login-overlay">
                <button class="close-button" data-close type="button">
                    <span class="u-visuallyhidden">Close modal</span>
                    <span>
                        <img src="<?= $front_theme ?>/images/assets/ico-x.svg" width="24" height="24" alt="">
                    </span>
                </button>
                <div class="login-form">
                    <h3>
                        <img src="<?= $front_theme ?>/images/assets/ico-lock.svg" width="24" height="24" alt="">
                        Log In
                    </h3>
                    <form action="<?= base_url('auth/login') ?>" method="POST">
                        <input type="hidden" name="url" value="<?= base_url('user') ?>" required>
                        <div class="login-form__field js-form-field">
                            <label for="user_id">Account ID</label>
                            <input name="email" type="text" class="input-text" required>
                        </div>
                        <div class="login-form__field js-form-field">
                            <label for="login_pw">Password</label>
                            <input name="password" type="password" class="input-text" required>
                        </div>

                        <div class="login-form__submit">
                            <button class="button--primary js-login-submit" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="login-form__help">
                        <a href="#" target="_blank"
                            class="login-form__help-link login-form__help-link--large js-need-help-link">Forgot
                            Password? - Contact Support</a>
                    </div>
                </div><!-- .login-form -->
            </div>


            <div id="header-register" class="l-header__login reveal js-header-login" data-reveal
                data-animation-in="fade-in" data-animation-out="fade-out" data-append-to="header"
                data-additional-overlay-classes="l-header__login-overlay">
                <button class="close-button" data-close type="button">
                    <span class="u-visuallyhidden">Close modal</span>
                    <span>
                        <img src="<?= $front_theme ?>/images/assets/ico-x.svg" width="24" height="24" alt="">
                    </span>
                </button>
                <div class="login-form">
                    <h3>
                        <img src="<?= $front_theme ?>/images/assets/ico-lock.svg" width="24" height="24" alt="">
                        Open Account
                    </h3>
                    <form action="<?= base_url('open_account') ?>" method="GET">
                        <div class="login-form__field js-form-field">
                            <label for="user_id">Full Name</label>
                            <input name="name" type="text" class="input-text">
                            <input name="start_account" type="hidden" value="1">
                        </div>
                        <div class="login-form__field js-form-field">
                            <label for="user_id">Email Address</label>
                            <input name="email" type="text" class="input-text">
                        </div>
                        <div class="login-form__submit">
                            <button class="button--primary js-login-submit" type="submit">Continue</button>
                        </div>
                    </form>
                </div><!-- .login-form -->
            </div>

            <button class="l-header__login-toggle js-header-login-toggle" type="button" id="popup"
                data-open="header-alert" style="display:none"> &nbsp; </button>
            <?php if (session()->getFlashdata("msg")) { ?>
                <script> window.onload = function () { document.getElementById("popup").click(); } </script>
                <div id="header-alert" class="l-header__login reveal js-header-login" data-reveal
                    data-animation-in="fade-in" data-animation-out="fade-out" data-append-to="header"
                    data-additional-overlay-classes="l-header__login-overlay">
                    <button class="close-button" data-close type="button">
                        <span class="u-visuallyhidden">Close modal</span>
                        <span>
                            <img src="<?= $front_theme ?>/images/assets/ico-x.svg" width="24" height="24" alt="">
                        </span>
                    </button>
                    <div class="login-form">
                        <?= session()->getFlashdata("msg") ?>
                    </div><!-- .login-form -->
                </div>
            <?php } ?>


        </header>