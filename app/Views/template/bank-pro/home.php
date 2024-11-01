<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>

                <section
                    class='main-hero main-hero--home js-main-hero main-hero--no-helper hero--image js-hero--image main-hero__content--left'
                    aria-label="Hero Area">

                    <div class="main-hero__image">
                        <div class="image-hero js-hero-image-bg">
                            <div class='hero-image-bg main-hero-background main-hero-background--home hero-image-bg--gradient hero-image-bg--gradient-6'
                                style="background-image:url('<?= $front_theme ?>/homepage-images/metro.jpg'); transform:translateY(0px);">
                            </div>
                            <div class='hero-image-bg--mobile main-hero-background main-hero-background--home hero-image-bg--gradient hero-image-bg--gradient-6'
                                style="background-image:url('<?= $front_theme ?>/homepage-images/metro.jpg'); transform:translateY(0px);">
                            </div>

                        </div>
                    </div>

                    <div class="main-hero__container lazyload" data-expand="-50">
                        <div class='main-hero__content l-contain'>
                            <div class='main-hero__header'>
                                <p class='main-hero__title' id="main-hero-title"><?= $company_name ?></p>
                                <p class='main-hero__subtitle'>We do banking differently. We believe that people come first, and that everyone deserves a great experience every step of the way – whether it’s face to face, over the phone, online or on our app.</p>
                            </div>

                            <!--ul class='main-hero__btns mt-4'>
                                <li>
                                    <a href="#" class="js-header-login-toggle button--primary" data-open="header-login">Open Now</a>
                                </li>
                                <li>
                                    <a href='certificates' class='button--navy-outline' target="">Learn
                                        More</a>
                                </li>
                            </ul-->
                        </div>
                    </div>
                </section>
                <section class="static-strip" aria-label="Branch Information">
                    <div class="static-strip__inner">
                        <ul>
                            <li class="static-strip__routing-num">
                                Routing # <br> <?= $bank_routing ?></li>
                            <li>
                                <a href="javascript:;" data-toggle="branch-hours__dropup">
                                    <span class="icon">
                                        <img src="<?= $front_theme ?>/static-strip-icons/ico-clock-new.svg" width="38"
                                            height="38" alt="">
                                    </span>
                                    Branch Hours
                                </a>
                                <div id="branch-hours__dropup" class="static-strip__dropup" data-toggler=".is-active">
                                    <dl class="static-strip__hours">
                                        <dt>Mon-Thurs</dt>
                                        <dd>8:30 a.m.-5:00 p.m.</dd>
                                        <dt>Friday:</dt>
                                        <dd>8:30 a.m.-6:00 p.m.</dd>
                                        <dt>Saturday:</dt>
                                        <dd>9:00 a.m.-1:00 p.m.</dd>
                                    </dl>
                                    <a class="button--navy-outline"
                                        href="mailto:<?= $company_email ?>">Schedule an Appointment</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section id="tabbed-feature" class="tabbed-feature js-tabbed-feature" aria-label="Find Your Branch">
                    <div class="l-contain">
                        <div class="tabbed-feature__inner">
                            <ul id="tabbed-feature-nav" class="tabbed-feature__tabs tabs">
                                <li class="tabs-title">
                                    <a href="#"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Rates</a>
                                </li>
                                <li class="tabs-title">
                                    <a href="#"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Member Care</a>
                                </li>
                            </ul>
                            <div class="tabbed-feature__content tabs-content">
                                <div class="tabbed-feature__content-item">
                                    <a class="tabbed-feature__content-item-title" href="#">
                                        <span class="accordion-title-inner"><span
                                                class="accordion-title__text">Rates</span></span>
                                        <span class="icon icon--accordion rotate-180">
                                            <span class="icon__bg"></span>
                                        </span>
                                    </a>
                                    <div class="tabs-panel-inner">
                                        <div class="tabs-panel-inner-wrap">
                                            <section class="rates-hero js-rates-hero is-hidden"
                                                data-initial-tab-index="0" aria-label="<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Rates">
                                                <div class="l-contain rates-hero__content">
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        3.75%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        High Yield Savings Account
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        High Yield Savings Rate
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        3.65%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        18 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        4.00%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        36 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        15.49%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Cash Rewards Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        3.75%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        High Yield Savings Account
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        High Yield Savings Rate
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        3.75%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        24 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        4.00%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        36 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        4.20%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        60 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        15.49%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Cash Rewards Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        9.99%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Rewards Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        fixed APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        11.49%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Choice Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        14.49%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        World Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        5.89%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        New Auto - Up to 66 Months
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Auto Loan Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        6.19%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Used - Up to 66 Months
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Auto Loan Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        11.99%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Personal Loan
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Personal Loan Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        2.49%<span>INTRO</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Interest-Only HELOC
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Home Equity Loan Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        6.375%<span>REG</span></div>
                                                                    <span class="rates-hero__rate-desc">
                                                                        10 Year Refinance Rate
                                                                    </span>
                                                                    <div class="rates-hero__rate-card">
                                                                        Conventional Mortgage and Refinance Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        fixed rate
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        6.875%<span>REG</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        30 Year Purchase Rate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Conventional Mortgage and Refinance Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        fixed rate
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        6.625%<span>REG</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        10/1 Year ARM
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Conventional Mortgage and Refinance Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable rate
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="rates-hero__nav">
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--featured js-rates-hero-nav-item"
                                                            data-tab="0" tabindex="0">
                                                            <img src="<?= $front_theme ?>/new-brand/click-credit-union-interest-rates2d24.svg?la=en&amp;hash=F645C6A70380501060089A848126191F"
                                                                class="rates-hero__nav-item-image"
                                                                alt="click to select, featured, credit union interest rates" /><img
                                                                src="<?= $front_theme ?>/new-brand/click-credit-union-interest-rates2d24.svg?la=en&amp;hash=F645C6A70380501060089A848126191F"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="click to select, featured, credit union interest rates" />
                                                            <span class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlink='#'
                                                                data-productlinktype='Featured'>Featured</span>
                                                        </a>
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--savings js-rates-hero-nav-item"
                                                            data-tab="1" tabindex="0">
                                                            <img src="<?= $front_theme ?>/new-brand/click-current-bank-certificate-savings-rates925a.svg?la=en&amp;hash=1259E47B753C2F5FD76918926080E30A"
                                                                class="rates-hero__nav-item-image"
                                                                alt="click to select, current certificate rates, current savings rates" /><img
                                                                src="<?= $front_theme ?>/icons/rate-icons/new/ico-savings695e.svg?la=en&amp;hash=0E55614F75FB061850865FD235D7ABDA"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="Savings" /> <span
                                                                class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlink='#'
                                                                data-productlinktype='Savings'>Savings</span>
                                                        </a>
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--cards js-rates-hero-nav-item"
                                                            data-tab="2" tabindex="0">
                                                            <img src="<?= $front_theme ?>/new-brand/click-current-credit-card-ratesd139.svg?la=en&amp;hash=223E4B99FFA90F053726A65798AAA796"
                                                                class="rates-hero__nav-item-image"
                                                                alt="click to select, current credit card rates " /><img
                                                                src="<?= $front_theme ?>/icons/rate-icons/new/ico-credit-cardse892.svg?la=en&amp;hash=322BE42CDBB783680C29587753C3817A"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="credit card" /> <span
                                                                class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlink='#'
                                                                data-productlinktype='Credit Cards'>Credit Cards</span>
                                                        </a>
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--mortgages js-rates-hero-nav-item"
                                                            data-tab="3" tabindex="0">
                                                            <img src="<?= $front_theme ?>/new-brand/click-current-loan-rates-business-loan-ratesd4a0.svg?la=en&amp;hash=1E16BF0885B28F4394AEF4D91B3D1795"
                                                                class="rates-hero__nav-item-image"
                                                                alt="click to select, current loan rates, current auto loan rates, current personal loan rates, current business loan rates" /><img
                                                                src="<?= $front_theme ?>/new-brand/selected-current-loan-rates-business-loan-ratese6b5.svg?la=en&amp;hash=54709063507BFE1E2B00883188CF5F2C"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="selected, current loan rates, current auto loan rates, current personal loan rates, current business loan rates" />
                                                            <span class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlinktype='Loans'>Loans</span>
                                                        </a>
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--loans js-rates-hero-nav-item"
                                                            data-tab="4" tabindex="0">
                                                            <img src="<?= $front_theme ?>/new-brand/selected-current-mortgage-loan-rates0981.svg?la=en&amp;hash=57C8882AD80B2212AF34531169CD7E52"
                                                                class="rates-hero__nav-item-image"
                                                                alt="selected, current mortgage loan rates" /><img
                                                                src="<?= $front_theme ?>/new-brand/selected-current-mortgage-loan-rates0981.svg?la=en&amp;hash=57C8882AD80B2212AF34531169CD7E52"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="selected, current mortgage loan rates" /> <span
                                                                class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlink='#'
                                                                data-productlinktype='Mortgages'>Mortgages</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabbed-feature__content-item">
                                    <a class="tabbed-feature__content-item-title" href="#">
                                        <span class="accordion-title-inner"><span class="accordion-title__text">Member
                                                Care</span></span>
                                        <span class="icon icon--accordion rotate-180">
                                            <span class="icon__bg"></span>
                                        </span>
                                    </a>
                                    <div class="tabs-panel-inner">
                                        <div class="tabs-panel-inner-wrap">
                                            <div class="grid-x grid-padding-x grid-padding-y">
                                                <div class="cell small-6 large-3">
                                                    <div class="tabbed-feature__link">
                                                        <a class="gtm__tabbed-feature__customer-support"
                                                            href="mailto:<?= $company_email ?>">
                                                            <span class="icon icon--solid" aria-hidden="true">
                                                                <img src="<?= $front_theme ?>/tabbed-icons/icon-send-message.svg"
                                                                    width="85" height="85" alt="">
                                                            </span>
                                                            <span class="link-chevron">Send Us a Message</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-3">
                                                    <div class="tabbed-feature__link">
                                                        <a class="gtm__tabbed-feature__customer-support"
                                                            href="tel:<?= $company_phone ?>">
                                                            <span class="icon icon--solid" aria-hidden="true">
                                                                <img src="<?= $front_theme ?>/tabbed-icons/icon-call.svg"
                                                                    width="85" height="85" alt="">
                                                            </span>
                                                            <span class="link-chevron">Call Us</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-3">
                                                    <div class="tabbed-feature__link">
                                                        <a class="gtm__tabbed-feature__customer-support"
                                                            href="mailto:<?= $company_email ?>">
                                                            <span class="icon icon--solid" aria-hidden="true">
                                                                <img src="<?= $front_theme ?>/tabbed-icons/icon-calendar.svg"
                                                                    width="85" height="85" alt="">
                                                            </span>
                                                            <span class="link-chevron">Schedule an appointment</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-3">
                                                    <div class="tabbed-feature__link">
                                                        <a class="gtm__tabbed-feature__customer-support"
                                                            href="customer-support">
                                                            <span class="icon icon--solid" aria-hidden="true">
                                                                <img src="<?= $front_theme ?>/tabbed-icons/icon-FAQs.svg"
                                                                    width="85" height="85" alt="">
                                                            </span>
                                                            <span class="link-chevron">FAQs and Support</span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section-links" aria-labelledby="section-links--default__title">
                    <div class="l-contain">
                        <h2 id="section-links--default__title" class="section-links__title">How Can We Help You Today?
                        </h2>
                        <div class="grid-x grid-padding-x grid-padding-y">
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="bank">
                                        <span class="icon icon--solid">
                                            <img src="<?= $front_theme ?>/section-links/ico-check-account.svg" width="85"
                                                height="85" alt="open an account">
                                        </span>
                                        <span class="link-chevron">Instant Accounts</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="credit-cards">
                                        <span class="icon icon--solid">
                                            <img src="<?= $front_theme ?>/section-links/ico-credit-cards.svg" width="85"
                                                height="85" alt="Credit Cards">
                                        </span>
                                        <span class="link-chevron">Credit Cards</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="borrow">
                                        <span class="icon icon--solid">
                                            <img src="<?= $front_theme ?>/section-links/ico-loans.svg" width="85" height="85"
                                                alt="Loans">
                                        </span>
                                        <span class="link-chevron">Loans</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="business-banking">
                                        <span class="icon icon--solid">
                                            <img src="<?= $front_theme ?>/section-links/ico-businessbanking.svg" width="85"
                                                height="85" alt="business banking ">
                                        </span>
                                        <span class="link-chevron">Business Banking</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="invest">
                                        <span class="icon icon--solid">
                                            <img src="<?= $front_theme ?>/section-links/ico-invest.svg" width="85"
                                                height="85" alt="Invest">
                                        </span>
                                        <span class="link-chevron">Wealth &amp; Retire</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="about-us">
                                        <span class="icon icon--solid">
                                            <img src="<?= $front_theme ?>/section-links/ico-about.svg" width="85" height="85"
                                                alt="About <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> ">
                                        </span>
                                        <span class="link-chevron">About <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="campaign-feature--default" class="campaign-feature "
                    aria-labelledby="campaign-feature--default__title">
                    <div class="campaign-feature__inner">
                        <div class="campaign-feature__image">
                            <figure>
                                <span>
                                    <img src="<?= $front_theme ?>/homepage-images/feature.jpg"
                                        alt="300 Cash Back Checking Bonus">
                                </span>
                            </figure>
                        </div>

                        <div class="campaign-feature__meta-wrap">
                            <div class="campaign-feature__meta" data-toggle="rellax" data-rellax-center
                                data-rellax-speed="0" data-rellax-tablet-speed="-1.5" data-rellax-desktop-speed="-1.5">
                                <h2 id="campaign-feature--default__title" class="campaign-feature__meta-title">Get €300*
                                    With a Checking Account Built for You</h2>
                                <p class="campaign-feature__meta-text">For a limited time, get a €300 when you open any
                                    new checking account! <sup>*</sup>Select "Learn More" to
                                    see important offer details. </p>
                              
                            </div>
                        </div>
                    </div>
                </section>
                <section class="related-content" aria-labelledby="related-content-list__title">
                    <h2 id="related-content-list__title" class="related-content__title">Start Building Your Financial
                        Strength</h2>
                    <div class="related-content__items">

                        <div class="related-content__item">
                            <div class="related-content__item-meta">
                                <h3 class="related-content__item-title"><a class="link-chevron"
                                        href="tax-checklist-5-things-to-remember"><span>Tax
                                            Checklist: 5 Things to Remember</span></a></h3>
                                <a class="related-content__item-label"
                                    href="#">Starting Out</a>
                                <div class="related-content__item-excerpt">Tax season is quickly approaching&mdash;do
                                    you know what you need to claim, and what forms you need to submit? This tax
                                    checklist makes filing simple. Learn more today!</div>
                            </div>
                            <div class="related-content__item-image">
                                <div class="related-content__item-image-wrap">
                                    <img src="<?= $front_theme ?>/learn-and-plan-images/personal-finance-101/unsplash.jpg"
                                        alt="Img">
                                </div>
                            </div>
                        </div>
                        <div class="related-content__item">
                            <div class="related-content__item-meta">
                                <h3 class="related-content__item-title"><a class="link-chevron"
                                        href="simple-ways-to-manage-a-checking-account"><span>How to
                                            Manage Your Checking</span></a></h3>
                                <a class="related-content__item-label"
                                    href="#">Starting Out</a>
                            </div>
                            <div class="related-content__item-image">
                                <div class="related-content__item-image-wrap">
                                    <img src="<?= $front_theme ?>/learn-and-plan-images/personal-finance-101/8554477.jpg"
                                        alt="open a checking account online">
                                </div>
                            </div>
                        </div>
                        <div class="related-content__item">
                            <div class="related-content__item-meta">
                                <h3 class="related-content__item-title"><a class="link-chevron"
                                        href="how-to-save-for-summer-vacation"><span>How to Save for
                                            Summer Vacation</span></a></h3>
                                <a class="related-content__item-label"
                                    href="#">Starting Out</a>
                            </div>
                            <div class="related-content__item-image">
                                <div class="related-content__item-image-wrap">
                                    <img src="<?= $front_theme ?>/learn-and-plan-images/personal-finance-101/1116302.jpg"
                                        alt="saving for a summer vacation">
                                </div>
                            </div>
                        </div>
                        <div class="related-content__item">
                            <div class="related-content__item-meta">
                                <h3 class="related-content__item-title"><a class="link-chevron"
                                        href="the-impact-of-rising-rates-and-inflation-on-your-business"><span>How
                                            Rising Rates and Inflation Impact Businesses</span></a></h3>
                                <a class="related-content__item-label"
                                    href="learn-and-plane305.html?category=running-a-business">Running a Business</a>
                            </div>
                            <div class="related-content__item-image">
                                <div class="related-content__item-image-wrap">
                                    <img src="<?= $front_theme ?>/learn-and-plan-images/running-a-business/13418669.jpg"
                                        alt="Rising interest rates">
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="why-hero" aria-label="Testimonials">
                    <h2 class="why-hero__title">
                        Hear From Our Customers
                    </h2>

                    <div class="why-hero__carousel">
                        <div class="l-contain">
                            <div class="quote-slider js-quote-slider">
                                <div class="quote-slider__slides">

                                <?php foreach ($testimonials as $row) { ?>
                                    <div class="quote-slider__slide js-quote-slider-slide">
                                        <blockquote class="quote u-cf">
                                            <div class="quote__content">
                                                <div class="quote__body">
                                                    <div class="rtf">
                                                        <?= $row['content'] ?>
                                                    </div>
                                                </div>
                                                <span class="quote__author u-block l-mb-1"><?= $row['name'] ?></span>
                                            </div>

                                        </blockquote>
                                    </div>
                                    <?php } ?>


                                </div>
                                <button type="button" class="quote-slider__prev js-quote-slider-prev">
                                    <span class="u-visuallyhidden">Go to previous slide</span>
                                </button>

                                <button type="button" class="quote-slider__next js-quote-slider-next">
                                    <span class="u-visuallyhidden">Go to next slide</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </main>
    </div>
</div>