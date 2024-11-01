<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>
                <div class='l-service-search'>
                    <section class='search-hero js-search-hero hero--image js-hero--image' aria-label="Hero Area">
                        <div class='image-hero js-hero-image-bg'>
                            <div class='hero-image-bg search-hero__background-image hero-image-bg--gradient '
                                style='background-image:url("<?= $front_theme ?>/images/assets/citadel-customer-support.jpg"); transform:translateY(0px);'>
                            </div>
                        </div>

                        <div class="search-hero__container">
                            <div class='search-hero__content l-contain'>
                                <div class='search-hero__header'>
                                    <h2 class='search-hero__title'>How can we help you today?</h2>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class='l-nav-secondary'>
                    <nav class="js-nav-secondary nav-secondary ">
                        <ul class="nav-secondary__l1">
                            <li class="nav-secondary__l1-item">
                                <button type="button" data-toggle="section-nav-menu">About Us <span
                                        class="button-icon"></span></button>
                                <div id="section-nav-menu" class="nav-secondary__l1-flyout" data-toggler=".is-active">
                                    <ul id="section-nav-drilldown"
                                        class="nav-secondary__l2 vertical menu accordion-menu" data-drilldown
                                        data-auto-height="true" data-animate-height="true" data-parent-link="true">
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-secondary__l1-item"><span>Contact Us</span></li>
                        </ul>
                    </nav>

                    <script>
                        window.addEventListener('DOMContentLoaded', function () {
                            $(document).ready(function () {
                                $('#section-nav-drilldown').foundation('_showMenu', $('.nav-secondary_active_selector'), true);
                            });
                        });
                    </script>
                </div>

                <div class='js-service-landing-content fade-in'>
                    <div class='content-nav-section' data-short-name='Contact Us'>
                        <div class="u-pos-relative l-contain">
                            <div class="rtf h1">
                                <h1>Contact Us</h1>
                            </div>
                            <div class="social js-social">
                                
                            </div>
                        </div>
                    </div>
                    <div class='content-nav-section' data-short-name=''>
                        <div class='rtf u-cf padding-content l-contain'>
                            <p>What's on your mind? There are lots of ways to get in touch with us. Search our FAQs
                                above, or contact us directly, so we can point you in the right direction. Looking for
                                our branch locations? <a href="#">Find our branches and ATM
                                    locations here</a>.</p>
                        </div>
                    </div>
                    <div class='bg-white u-pos-relative l-z-index-100 l-contain'>
                        <div class='quick-bar quick-bar--service-landing'>
                            <div class="quick-bar__wrap">
                                <h2 class="u-align-center h2">Get in Touch With Us</h2>
                                <a href="#" onclick="alert('Temporarily unavailable, please use other channels')"
                                    class="quick-bar__item" rel="noopener noreferrer" target="_blank"> <img
                                        src="<?= $front_theme ?>/images/assets/get-started-chat.svg" alt="" />
                                    <div class="quick-bar__text mt-2">
                                        <h3 class='quick-bar__item-header'>Video Connect</h3>
                                    </div>
                                </a>
                                <a class='quick-bar__item' href='mailto:<?= $company_email ?>'>
                                    <img src="<?= $front_theme ?>/images/assets/get-started-email-us.svg" alt="" />
                                    <div class="quick-bar__text mt-2">
                                        <h3 class='quick-bar__item-header'>Email Us</h3>
                                    </div>
                                </a>

                                <a class='quick-bar__item' href='mailto:<?= $company_email ?>'>
                                    <img src="<?= $front_theme ?>/images/assets/get-started-visit-us.svg" alt="" />
                                    <div class="quick-bar__text mt-2">
                                        <h3 class='quick-bar__item-header'>Schedule Appointment</h3>
                                    </div>
                                </a>

                                <a class='quick-bar__item' href="tel:<?= $company_phone ?>">
                                    <img src="<?= $front_theme ?>/images/assets/get-started-call-us.svg" alt="" />
                                    <div class="quick-bar__text mt-2">
                                        <h3 class='quick-bar__item-header quick-bar__item-header--phone'>Call Us</p>
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='l-frequently-searched'>
                        <section class='frequently-searched js-frequently-searched l-contain'
                            aria-label="Frequently Searched">
                            <h2 class='frequently-searched__title'>Frequently Searched</h2>
                            <ul class='frequently-searched-links mt-3'>
                                <li class='frequently-searched__link js-frequently-searched-link'><a
                                        href='#'>'payment'</a></li>
                                <li class='frequently-searched__link js-frequently-searched-link'><a href='#'>'secure
                                        access code'</a></li>
                                <li class='frequently-searched__link js-frequently-searched-link'><a href='#'>'mobile
                                        banking'</a></li>
                            </ul>
                        </section>
                    </div>

                </div>
            </div>
        </main>
    </div>
</div>