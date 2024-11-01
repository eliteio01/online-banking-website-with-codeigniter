<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>


                <div class='l-sub-hero'>
                    <section class='sub-hero hero--image js-hero--image' aria-label="Hero Area">
                        <div class='image-hero js-hero-image-bg'>
                            <div class='hero-image-bg main-hero-background main-hero-background--home hero-image-bg--gradient '
                                style='background-image:url("<?= $front_theme ?>/footer-images/giving-back/give_back.jpg"); transform:translateY(0px);'>
                            </div>
                        </div>
                        <div class='sub-hero-content l-contain'>
                            <div class='sub-hero-content-inner'>
                                <p class="sub-hero__title mb-1">Committed to Giving</p>
                                <p class='sub-hero__teaser p'>
                                    <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> is committed to
                                    giving back to the communities where our members live and work. Learn more about our
                                    charitable contributions, and community involvement.
                                </p>
                                <div class='sub-hero-content-buttons'>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class='l-nav-secondary'>
                    <!-- notes:component
    title: Secondary Navigation / Breadcrumb
    general: This navigation will work as a hybrid breadcrumb/traditional secondary navigation. The user is on a page that has child pages, those child pages will be displayed to the right. If the user is at the lowest level (no child pages) the active page will be highlighted and its siblings will be displayed. The user will be able to jump back to items from previous sections by clicking on the breadcrumb item.
    -->

                    <nav class="js-nav-secondary nav-secondary ">
                        <ul class="nav-secondary__l1">
                            <li class="nav-secondary__l1-item">
                                <button type="button" data-toggle="section-nav-menu">Giving Back <span
                                        class="button-icon"></span></button>
                                <div id="section-nav-menu" class="nav-secondary__l1-flyout" data-toggler=".is-active">
                                    <ul id="section-nav-drilldown"
                                        class="nav-secondary__l2 vertical menu accordion-menu" data-drilldown
                                        data-auto-height="true" data-animate-height="true" data-parent-link="true">

                                        <li>
                                            <a class="" href="#giving-back/citadel-heart-of-learning.html"><span
                                                    class="link-underline"><span>Heart of Learning
                                                        Award</span></span></a>
                                        </li>
                                        <li>
                                            <a class="" href="#giving-back/investing-in-our-community.html"><span
                                                    class="link-underline"><span>Causes &amp; Charitable
                                                        Contributions</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-secondary__l1-item"><span>Giving Back</span></li>
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
                <div class='content-nav-section' data-short-name='Giving Back'>
                    <div class="u-pos-relative l-contain">
                        <div class="rtf h1">
                            <h1>Giving Back</h1>
                        </div>
                        <div class="social js-social">
                            <div class="social__inner">
                                <h3 class="social__title">Share:</h3>
                                <div class="social__links">
                                    <a href='##' target='_blank'
                                        class='social__link social__link--facebook js-share-facebook'
                                        aria-label="Share on Facebook">Facebook</a>
                                    <a href='##' target='_blank'
                                        class='social__link social__link--twitter js-share-twitter'
                                        aria-label="Share on Twitter">Twitter</a>
                                    <a href='##' target='_blank'
                                        class='social__link social__link--linkedin js-share-linkedin'
                                        aria-label="Share on LinkedIn">LinkedIn</a>
                                    <a href='##' class='social__link social__link--email js-share-email'
                                        aria-label="Share by Email">Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='bg-white u-pos-relative l-z-index-100 u-cf'>
                    <div class="content-nav-section" data-short-name="Giving Back">

                        <div class="rtf mt-4 mb-2 l-contain">
                            <p>At
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>, giving back to the
                                community is a top priority. We do our best to give back and make our community a better
                                place. Learn more about our community-giving programs, charitable contributions, and how
                                we get involved.
                            </p>
                        </div>
                    </div>
                    <div class="padding-content">
                        <div class="tiles tiles--arrows l-contain mt-3 js-tiles">
                            <div class="js-tiles-container">
                                <div class="tiles__inner js-tile-group">
                                    <a class="tile js-tile tile--link"
                                        href="#giving-back/citadel-heart-of-learning.html">
                                        <h3 class="tile__heading">
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Heart
                                            of Learning Award
                                        </h3>
                                        <p class="tile__body">The
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Heart
                                            of Learning Award is a teaching excellence award for Chester County
                                            teachers. Learn more about how you can nominate a teacher and the history of
                                            the program.
                                        </p>
                                        
                                    </a>
                                    <a class="tile js-tile tile--link"
                                        href="#giving-back/investing-in-our-community.html">
                                        <h3 class="tile__heading">Causes &amp; Charitable Contributions</h3>
                                        <p class="tile__body">Learn how
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> gives
                                            back to the community with financial contributions, volunteering, seminars,
                                            and more.
                                        </p>
                                        
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='l-join-cta content-nav-section' data-short-name='CTA'>
                        <section class="join-cta join-cta--primary"
                            aria-label="Join <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>">
                            <div class="join-cta-content l-contain u-align-center">
                                <h2 class="join-cta__title ">Learn more about
                                    <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&#39;s
                                    charitable donations and the ways we give back.
                                </h2>
                            </div>
                        </section>
                    </div>

                </div>
                <div class='l-related-links content-nav-section' data-short-name='You Might Also Like'>
                    <section class="related-links l-contain" aria-label="You Might Also Like">
                        <h2 class="h2 related-links__title">You Might Also Like</h2>
                        <a class='related-links__item' href="#giving-back/citadel-heart-of-learning.html"
                            onclick="dataLayer.push({'event': 'You Might Like_Left'});">
                            <h4 class='related-links__item-category'>Community</h4>
                            <h3 class='related-links__item-title'>Heart of Learning Award</h3>
                            <p class='related-links__item-caption'>The
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Heart of Learning
                                Award is a teaching excellence award for Chester County teachers. Learn more about how
                                you can nominate a teacher and the history of the program.
                            </p>
                        </a>
                        <a class='related-links__item' href="#about-citadel/annual-reports.html"
                            onclick="dataLayer.push({'event': 'You Might Like_Center'});">
                            <h4 class='related-links__item-category'>About
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>
                            </h4>
                            <h3 class='related-links__item-title'>Annual Reports</h3>
                            <p class='related-links__item-caption'>Read through
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>’s annual reports,
                                which summarize the company’s successes, growth, and corporate milestones each year.
                            </p>
                        </a>
                        <a class='related-links__item' href="#about-citadel/why-citadel/switch-to-citadel.html"
                            onclick="dataLayer.push({'event': 'You Might Like_Right'});">
                            <h4 class='related-links__item-category'>Service</h4>
                            <h3 class='related-links__item-title'>Switch to
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>
                            </h3>
                            <p class='related-links__item-caption'>Switching to
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> is easy, and
                                we&#39;ll help each step of the way. Follow these three simple steps to make your
                                switch.
                            </p>
                        </a>
                    </section>
                </div>

            </div>
        </main>
    </div>
</div>