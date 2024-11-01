
<div class='l-footer__top'>
    <div class='footer-quick-bar l-contain'>
        <div class='footer-quick-bar__item footer-quick-bar__item--routing'>
            <img src="<?= $front_theme ?>/icons/footer-icons/citadel-credit-union-routing-number.svg" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'>Routing #</h2>
                <h3 class='footer-quick-bar__item-subtitle'><?= $bank_routing ?></h3>
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
                        href="mailto:<?= $company_email ?>"><?= $company_email ?></a></h2>
                <h3 class='footer-quick-bar__item-subtitle'>Customer Service</h3>
            </div>
        </div>
        <div class='footer-quick-bar__item footer-quick-bar__item--video'>
            <img src="<?= $front_theme ?>/footer-images/live-video-call.png" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'><a
                        class="footer-quick-bar__item-header footer-quick-bar__item-header--video"
                        href="#" onclick="alert('Temporarily unavailable, please contact us via Email')">Video
                        Connect</a></h2>
                <h3 class='footer-quick-bar__item-subtitle'>Chat Virtually</h3>
            </div>
        </div>
    </div>
</div>
<footer class="l-footer">


            <div class="l-footer-main">
                <div class='l-footer-inner l-contain'>
                    <div class='l-footer-inner--left'>
                        <div class='l-footer__about'>
                            <div class='footer-about'>
                                <h2 class="footer-about__header">Building Strength Together</h2>
                                <p class="footer-about__info"><span><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> is a not-for-profit credit union bank built on
                                        the unshakeable promise to serve those who work every day to build a better
                                        future for us all. For over 80 years, we&rsquo;ve delivered a breadth of
                                        financial services, expert guidance, and innovative tools to help strengthen and
                                        grow businesses, families, and our local communities. We are your <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>, and
                                        we are Building Strength Together.</span></p>
                            </div>
                        </div>

                        <div class='l-footer__nav'>
                            <div class='footer-nav u-cf'>
                                <div class="footer-nav__col1">
                                    <ul class='footer-nav__links'>
                                        <li class='footer-nav__item'><a href='#'
                                                class='footer-nav__link'>About <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?></a></li>
                                        <li class='footer-nav__item'><a href='about-us'
                                                class='footer-nav__link'>Who we are</a></li>
                                        <li class='footer-nav__item'><a href='customer-support'
                                                class='footer-nav__link'>Contact Us</a></li>
                                    </ul>
                                    <ul class='footer-nav__links'>
                                        <li class='footer-nav__item'><a href='#'
                                                class='footer-nav__link'>News &amp; Events</a></li>
                                        <li class='footer-nav__item'><a href='news'
                                                class='footer-nav__link'>Latest News</a></li>
                                    </ul>
                                </div>

                                <div class="footer-nav__col2">
                                    <ul class='footer-nav__links'>
                                        <li class='footer-nav__item'><a href='#'
                                                class='footer-nav__link'>Careers</a></li>
                                        <li class='footer-nav__item'><a href='careers'
                                                class='footer-nav__link'>Get Started</a></li>
                                    </ul>
                                    <ul class='footer-nav__links'>
                                        <li class='footer-nav__item'><a href='#'
                                                class='footer-nav__link'>Giving Back</a></li>
                                        <li class='footer-nav__item'><a
                                                href='giving-back'
                                                class='footer-nav__link'><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Charity</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='l-footer-inner--right'>
                        <div class='l-footer__services'>
                            <div class='footer-services'>
                                <h2 class="footer-services__header"><a href="#">Member Services</a>
                                </h2>
                                <ul class='footer-services__nav'>
                                    <li class='footer-services__nav-item'><a href='#'
                                            class='footer-services__nav-link'>Loan Payments</a></li>
                                    <li class='footer-services__nav-item'><a href='#'
                                            class='footer-services__nav-link'>Referral Service</a></li>
                                    <li class='footer-services__nav-item'><a
                                            href='#'
                                            class='footer-services__nav-link'><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Security<sup>&trade;</sup></a></li>
                                    
                                    <li class='footer-services__nav-item'><a
                                            href='mailto:<?= $company_email ?>'
                                            class='footer-services__nav-link'>Email Us</a></li>
                                </ul>
                                <img src="<?= base_url('uploads/' . $company_logo) ?>"
                                     width="255" alt="<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> New Logo" />
                                     <hr>
                                     <div class="footer-nav__col1">
                                    <ul class='footer-nav__links'>
                                        <li class='footer-nav__item'><a href='#'
                                                class='footer-nav__link'>Location</a></li>
                                        <li class='footer-nav__item'><a href='#' class='footer-nav__link'><?= $company_address ?></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='l-footer__bottom'>
                <div class='l-footer__site-links'>
                    <div class='footer-site-links l-contain'>
                        <div class='footer-site-links__left'>
                            <a href='privacy-policy'
                                class='footer-site-links__link' target="_self">Privacy Policy</a>
                            <a href='faqs'
                                class='footer-site-links__link' target="_self">FAQs</a>
                            <a href='#' class='footer-site-links__link'>Sitemap</a>
                        </div>

                        <div class='footer-site-links__right'>
                            <a href="#"
                                target="_blank"><img
                                    src="<?= $front_theme ?>/blue-seal-200-42-bbb-80015515.png"
                                    style="border: 0;" alt="<?= $company_name ?> BBB Business Review" /></a>
                            <a href='#'
                                class='footer-site-links__ncua-link footer-site-links__ncua-link--lender'><img
                                    src='<?= $front_theme ?>/images/assets/ncua-lender.png' alt='Lender'></a>
                            <a href='#'
                                class='footer-site-links__ncua-link footer-site-links__ncua-link--lender'><img
                                    src='<?= $front_theme ?>/images/assets/ncua-cert.png' alt='Lender'></a>
                            <span
                                class='footer-site-links__ncua-link footer-site-links__ncua-link--certificate'>Federally
                                Insured by NCUA</span>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <div id='opinion-lab-footer'></div>
        <script src="<?= $front_theme ?>/sitecore_modules/Web/ExperienceForms/scripts/jquery.validate.min.js"></script>
        <script src="<?= $front_theme ?>/sitecore_modules/Web/ExperienceForms/scripts/jquery.validate.unobtrusive.min.js"></script>
        <script src="<?= $front_theme ?>/sitecore_modules/Web/ExperienceForms/scripts/jquery.unobtrusive-ajax.min.js"></script>
        <script src="<?= $front_theme ?>/sitecore_modules/Web/ExperienceForms/scripts/form.validate.js"></script>
    
        <script src="<?= $front_theme ?>/sitecore_modules/Web/ExperienceForms/scripts/form.conditions.js"></script>
        
    <?= view('includes/livechat') ?>
    </body>



</html>