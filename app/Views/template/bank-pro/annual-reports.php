<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>


                <div class='l-sub-hero'>
                    <section class='sub-hero hero--image js-hero--image' aria-label="Hero Area">
                        <div class='image-hero js-hero-image-bg'>
                            <div class='hero-image-bg main-hero-background main-hero-background--home hero-image-bg--gradient hero-image-bg--gradient-10'
                                style='background-image:url("<?= $front_theme ?>/footer-images/about-citadel/citadel-annual-report.jpg"); transform:translateY(0px);'>
                            </div>
                        </div>
                        <div class='sub-hero-content l-contain'>
                            <div class='sub-hero-content-inner'>
                                <p class="sub-hero__title mb-1">Annual Reports</p>
                                <p class='sub-hero__teaser p'>
                                    <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>’s annual
                                    reports recap each year’s successes and milestones. Read our reports from the past
                                    years.
                                </p>
                                <div class='sub-hero-content-buttons'>
                                    <a href="#" onclick="alert('Reports are displayed on request. Please contact support')" class="sub-hero__cta-link" title="<?= date('Y') - 1 ?> Annual Report" <span>View <?= date('Y') - 1 ?>
                                        Report</span>
                                    </a> <a href="#" onclick="alert('Reports are displayed on request. Please contact support')"
                                        class="sub-hero__cta-link sub-hero__cta-link--secondary"
                                        rel="noopener noreferrer" target="_blank" title="<?= date('Y') - 1 ?> Financials"> <span><?= date('Y') - 1 ?>
                                            Financials</span>
                                    </a>
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
                            <li class="nav-secondary__l1-item"><span>Annual Reports</span></li>
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
                <div class="content-nav-section" data-short-name="Annual Reports">

                    <div class="rtf mt-4 mb-2 l-contain">
                       <h3>Reports are displayed on request. Please contact support</h3>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>



<div class='l-footer__top'>
    <div class='footer-quick-bar l-contain'>
        <div class='footer-quick-bar__item footer-quick-bar__item--routing'>
            <img src="<?= $front_theme ?>/icons/footer-icons/citadel-credit-union-routing-number.svg" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'>Routing #</h2>
                <h3 class='footer-quick-bar__item-subtitle'>231380104</h3>
            </div>
        </div>
        <div class='footer-quick-bar__item footer-quick-bar__item--clock'>
            <img src="<?= $front_theme ?>/icons/prefooter-icons/icoclock.png" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'>Branch Hours: <span class='weight-reg'>Mon - Thurs: 8:30
                        a.m.-5:00 p.m.</span></h2>
                <h2 class='footer-quick-bar__item-header'>Friday: <span class='weight-reg'>8:30 a.m.-6:00 p.m.</span>
                </h2>
                <h2 class='footer-quick-bar__item-header'>Saturday: <span class='weight-reg'>9:00 a.m.-1:00 p.m.</span>
                </h2>
            </div>
        </div>
        <div class='footer-quick-bar__item footer-quick-bar__item--phone'>
            <img src="<?= $front_theme ?>/icons/footer-icons/call-citadel-credit-union.svg" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'><a
                        class="footer-quick-bar__item-header footer-quick-bar__item-header--phone"
                        href="tel:(800) 666-0191">(800) 666-0191</a></h2>
                <h3 class='footer-quick-bar__item-subtitle'>Customer Service</h3>
            </div>
        </div>
        <div class='footer-quick-bar__item footer-quick-bar__item--video'>
            <img src="<?= $front_theme ?>/footer-images/live-video-call.png" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'><a
                        class="footer-quick-bar__item-header footer-quick-bar__item-header--video"
                        href="https://main.financialtown.com/financial_town/?view_type=page&amp;action=client_portal&amp;company_code=citadelbanking&amp;client_portal_mode=instant_call">Video
                        Connect</a></h2>
                <h3 class='footer-quick-bar__item-subtitle'>Chat Virtually</h3>
            </div>
        </div>
    </div>
</div>