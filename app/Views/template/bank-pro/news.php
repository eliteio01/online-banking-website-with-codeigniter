<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>
                <div class='l-sub-hero'>
                    <section class='sub-hero hero--image js-hero--image' aria-label="Hero Area">
                        <div class='image-hero js-hero-image-bg'>
                            <div class='hero-image-bg main-hero-background main-hero-background--home hero-image-bg--gradient '
                                style='background-image:url("<?= $front_theme ?>/invest-images/Citadel_AlkemyX_00405_weatlh_kate_1600x650.jpg"); transform:translateY(0px);'>
                            </div>
                        </div>
                        <div class='sub-hero-content l-contain'>
                            <div class='sub-hero-content-inner'>
                                <p class="sub-hero__title mb-1">Financial News & Events</p>
                                <p class='sub-hero__teaser p'>All the latest news from
                                    <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> blog
                                </p>
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
                                <button type="button" data-toggle="section-nav-menu">Learn &amp; Plan <span
                                        class="button-icon"></span></button>
                                <div id="section-nav-menu" class="nav-secondary__l1-flyout" data-toggler=".is-active">
                                    <ul id="section-nav-drilldown"
                                        class="nav-secondary__l2 vertical menu accordion-menu" data-drilldown
                                        data-auto-height="true" data-animate-height="true" data-parent-link="true">

                                        < </ul>
                                </div>
                            </li>
                            <li class="nav-secondary__l1-item"><span>Learn &amp; Plan</span></li>
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

                <div class='bg-white u-pos-relative l-z-index-100 u-cf'>
                    <div class='content-nav-section' data-short-name='Learn &amp; Plan'>
                        <div class="u-pos-relative l-contain">
                            <div class="rtf h1">
                                <h1>News & Events</h1>
                            </div>
                            <div class="social js-social">

                            </div>
                        </div>
                    </div>
                    <div class="content-nav-section" data-short-name="Learn &amp; Plan">

                        <div class="rtf mt-4 mb-2 l-contain">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                        {
                                            "feedMode": "market",
                                                "market": "forex",
                                                    "colorTheme": "light",
                                                        "isTransparent": false,
                                                            "displayMode": "regular",
                                                                "width": "100%",
                                                                    "height": 830,
                                                                        "locale": "en"
                                        }
                                    </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                    <div class='l-learn-tiles'>
                    </div>


                </div>
            </div>
        </main>
    </div>
</div>