<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>


                <div class='l-sub-hero'>
                    <section class='sub-hero hero--image js-hero--image' aria-label="Hero Area">
                        <div class='image-hero js-hero-image-bg'>
                            <div class='hero-image-bg main-hero-background main-hero-background--home hero-image-bg--gradient '
                                style='background-image:url("<?= $front_theme ?>/save-images/Citadel_AlkemyX_06578_save_family_1600x650.jpg"); transform:translateY(0px);'>
                            </div>
                        </div>
                        <div class='sub-hero-content l-contain'>
                            <div class='sub-hero-content-inner'>
                                <p class="sub-hero__title mb-1">The Smart Place to Save</p>
                                <p class='sub-hero__teaser p'><?= $company_name ?> is a highly ranked global financial institution</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class='l-nav-secondary'>
                    <nav class="js-nav-secondary nav-secondary ">
                        <ul class="nav-secondary__l1">
                            <li class="nav-secondary__l1-item">
                                <button type="button" data-toggle="section-nav-menu">Save <span
                                        class="button-icon"></span></button>
                                <div id="section-nav-menu" class="nav-secondary__l1-flyout" data-toggler=".is-active">
                                    <ul id="section-nav-drilldown"
                                        class="nav-secondary__l2 vertical menu accordion-menu" data-drilldown
                                        data-auto-height="true" data-animate-height="true" data-parent-link="true">
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-secondary__l1-item"><span>Save</span></li>
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
                <div class='content-nav-section' data-short-name='Save'>
                    <div class="u-pos-relative l-contain">
                        <div class="rtf h1">
                            <h1>Save</h1>
                        </div>
                        <div class="social js-social">
                        </div>
                    </div>
                </div>
                <div class='bg-white u-pos-relative l-z-index-100 u-cf'>
                    <div class="content-nav-section" data-short-name="Save">

                        <div class="rtf mt-4 mb-2 l-contain">
                            <p>Whether you are saving toward short- or long- term goals, or creating a retirement nest
                                egg, we can help you find the savings plan that works best for you. Enjoy competitive
                                savings account rates on products for the entire family.</p>
                            <p>At <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>, we have an array of products to meet your savings goals &mdash; from
                                <a></a><a href="#">High Yield Savings accounts
                                </a>to<a></a><a href="#"> Kids Savings Accounts</a> and&nbsp;<a></a><a href="#">Holiday
                                    Club</a>,&nbsp;<a href="#">Money Market Savings Accounts</a> and more!
                            </p>
                            <p><a></a><a href="#">Open a Savings Account</a>
                                online with <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> today! Not sure sure which account is right for you?<a
                                    rel="noopener noreferrer" href="#">
                                    Schedule an appointment </a>&nbsp;to speak with a representative today.</p>
                            
                            <h2> The Smart Place to Save</h2>
                            <p class="disclosures">**<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> is recognized as a Forbes 2021 Best-in-State Credit Union
                                and in the top 1 percent for returning value nationwide in the 2021 Callahan &amp;
                                Associates Return to Member scoring.</p>
                        </div>
                    </div>
                    <div class="padding-content">
                        
                        <div class="rtf mt-2 mb-4 l-contain" id="HighYieldSavings">
                            <h3 class="tile__heading">High Yield Savings Account</h3>
                                        <p class="tile__body">If a savings account with continuous high returns and
                                            flexible access to your money makes sense for you, learn more about our High
                                            Yield Savings Account today!<br></p>
                        </div>
                        
                        <div class="rtf mt-2 mb-4 l-contain" id="StarSavings">
                            <h3 class="tile__heading">Star Savings</h3>
                                        <p class="tile__body">The <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Savings account makes it easy to save for your
                                            short- or long-term goals. Open an account today, and enjoy better rates,
                                            online and mobile banking, and much more.</p>
                        </div>
                        
                        <div class="rtf mt-2 mb-4 l-contain" id="Certificates">
                            <h3 class="tile__heading">Certificates</h3>
                                        <p class="tile__body"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Certificates &ndash; commonly referred to as CDs
                                            or certificates of deposit by other financial institutions &ndash; offer
                                            high rates and flexible terms. Lock in a great rate today!</p>
                        </div>
                        
                        <div class="rtf mt-2 mb-4 l-contain" id="HolidayClub">
                             <h3 class="tile__heading">Holiday Club &amp; Auxiliary Savings</h3>
                                        <p class="tile__body">Our Holiday Club Savings account lets you put money aside
                                            and grow with no minimum balance. Each year, the funds are transferred to
                                            your <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Savings account for the holidays. Learn more.</p>
                        </div>
                        
                        <div class="rtf mt-2 mb-4 l-contain">
                            <h3 class="tile__heading">Kids Club Star Savings</h3>
                                        <p class="tile__body">Learn more about the <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Kids Club, which is the
                                            perfect savings account for children. Your child will learn smart saving
                                            habits and receive $10 each birthday.</p>
                        </div>
                        
                        <div class="rtf mt-2 mb-4 l-contain" id="MoneyMarket">
                            <h3 class="tile__heading">Money Market Account</h3>
                                        <p class="tile__body"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&rsquo;s Money Market account has consistently
                                            higher rates that increase as your balance grows. Open an account and start
                                            saving more today.</p>
                        </div>
                    </div>
                    
                </div>

                <div class='l-join-cta content-nav-section' data-short-name='CTA'>
                    <section class="join-cta join-cta--primary" aria-label="Join <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>">
                        <div class="join-cta-content l-contain u-align-center">
                            <h2 class="join-cta__title ">Ready to speak with a representative about a <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> savings
                                account? </h2>
                            <a href="mailto:<?= $company_email ?>" class="join-cta__link" rel="noopener noreferrer"
                                target="_blank" title="Online Appointment Scheduling">Schedule
                                Appointment</a>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</div>