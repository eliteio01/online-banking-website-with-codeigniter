<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>


                <div class='l-sub-hero'>
                    <section class='sub-hero hero--image js-hero--image' aria-label="Hero Area">
                        <div class='image-hero js-hero-image-bg'>
                            <div class='hero-image-bg main-hero-background main-hero-background--home hero-image-bg--gradient hero-image-bg--gradient-10'
                                style='background-image:url("<?= $front_theme ?>/why-citadel-images/3217%20%20Why%20Citadel%20ContentAboutUsv30.jpg"); transform:translateY(0px);'>
                            </div>
                        </div>
                        <div class='sub-hero-content l-contain'>
                            <div class='sub-hero-content-inner'>
                                <p class="sub-hero__title mb-1">Who We Are</p>
                                <p class='sub-hero__teaser p'>Hi there. We're <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>. We promise to help you live your
                                    brightest future by inspiring you with the guidance and tools to build financial
                                    strength – today and tomorrow.</p>
                                <div class='sub-hero-content-buttons'>
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
                            </li>
                            <li class="nav-secondary__l1-item"><span>About Us</span></li>
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
                <div class='content-nav-section' data-short-name='About Us'>
                    <div class="u-pos-relative l-contain">
                        <div class="rtf h1">
                            <h1>About <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?></h1>
                        </div>
                    </div>
                </div>
                <div class='bg-white u-pos-relative l-z-index-100 u-cf'>
                    <div class="content-nav-section" data-short-name="About Us">

                        <div class="rtf mt-4 mb-2 l-contain">
                           <?= $about_us ?>
                        </div>
                    </div>
                    <div class="padding-content">
                        <div class="tiles tiles--arrows l-contain mt-3 js-tiles">
                            <div class="js-tiles-container">
                                <div class="tiles__inner js-tile-group">
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Why Choose <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>?</h3>
                                        <p class="tile__body">We provide our credit union members with all things
                                            banking, plus the educational resources and guidance to build and maintain
                                            financial security. Here's why you should join us.</p>
                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Annual Reports</h3>
                                        <p class="tile__body">Read through <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&rsquo;s annual reports, which
                                            summarize the company&rsquo;s successes, growth, and corporate milestones
                                            each year.</p>
                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Contact Us</h3>
                                        <p class="tile__body">We're here to help! Search our frequently asked questions
                                            to get the answers you need right at your fingertips. Get quick access to
                                            all our contact information. </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='l-join-cta content-nav-section' data-short-name='CTA'>
                        <section class="join-cta join-cta--primary" aria-label="Join <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>">
                            <div class="join-cta-content l-contain u-align-center">
                                <h2 class="join-cta__title ">What makes us different? </h2>
                                <p style="color:#fff">We’ve built a different kind of high street bank. A bank with stores that are open when it suits you, where you can walk in without an appointment and leave with a working account, debit card and all. A bank that tells you exactly what you’re getting, in language that actually makes sense. A bank that puts you first.</p>
                            </div>
                        </section>
                    </div>
                    <div id="getstarted">
                        <div class="quick-bar__wrap l-contain">
                            <h2 class="u-align-center h2">Get Started</h2>
                            <div class='quick-bar'>
                                <a href="#"
                                    class="quick-bar__item" rel="noopener noreferrer" target="_blank"> <img
                                        src="<?= $front_theme ?>/images/assets/get-started-chat.svg" alt="" />
                                    <div class="quick-bar__text mt-2">
                                        <h3 class='quick-bar__item-header'>Live Support</h3>
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
                                        <h3 class='quick-bar__item-header quick-bar__item-header--phone'>Call Us
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='l-join-cta content-nav-section' data-short-name='CTA'>
                        <section class="join-cta join-cta--secondary join-cta--ms" aria-label="Join <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>">
                            <div class="join-cta-content l-contain u-align-center">
                                <h2 class="join-cta__title ">Find a <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> location near you.</h2>
                                <a href="#" onClick="alert('Unable to determine your location. Please contact support')" class="join-cta__link"
                                    title="Search tool to find <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Branches and ATMs.">Find a Branch</a>
                            </div>
                        </section>
                    </div>
                </div>
                <div class='l-related-links content-nav-section' data-short-name='You Might Also Like'>
                    <section class="related-links l-contain" aria-label="You Might Also Like">
                        <h2 class="h2 related-links__title">You Might Also Like</h2>
                        <a class='related-links__item'
                            href="#"
                            onclick="dataLayer.push({'event': 'You Might Like_Left'});">
                            <h4 class='related-links__item-category'>Learn &amp; Plan</h4>
                            <h3 class='related-links__item-title'>Pre-Vows: 7 Financial Questions</h3>
                            <p class='related-links__item-caption'>Before you get married, it’s important to talk to
                                your significant other about finances. Get the scoop on the top 7 most important
                                questions to ask your future spouse and a financial advisor. </p>
                        </a>
                        <a class='related-links__item' href="#"
                            onclick="dataLayer.push({'event': 'You Might Like_Center'});">
                            <h4 class='related-links__item-category'>Learn &amp; Plan</h4>
                            <h3 class='related-links__item-title'>Hidden Costs of the Holidays</h3>
                            <p class='related-links__item-caption'>Learn more about recognizing the hidden costs of the
                                holiday season, including increased home utility bills and travel expenses.</p>
                        </a>
                        <a class='related-links__item'
                            href="#"
                            onclick="dataLayer.push({'event': 'You Might Like_Right'});">
                            <h4 class='related-links__item-category'>Learn &amp; Plan</h4>
                            <h3 class='related-links__item-title'>Financial Wellness &amp; Self-Care</h3>
                            <p class='related-links__item-caption'>Practicing self-care and financial wellness go hand
                                in hand with keeping your overall health in check. Here are some ways you can work
                                healthy financial habits into your regular routine.</p>
                        </a>
                    </section>
                </div>

            </div>
        </main>
    </div>
</div>
