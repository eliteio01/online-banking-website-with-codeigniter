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
                                <p class="sub-hero__title mb-1">Frequently Asked Questions</p>
                                <p class='sub-hero__teaser p'>What's on your mind? There are lots of ways to get in
                                    touch with us. Search our FAQs</p>
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
                                <button type="button" data-toggle="section-nav-menu">About Us <span
                                        class="button-icon"></span></button>
                                <div id="section-nav-menu" class="nav-secondary__l1-flyout" data-toggler=".is-active">
                                    <ul id="section-nav-drilldown"
                                        class="nav-secondary__l2 vertical menu accordion-menu" data-drilldown
                                        data-auto-height="true" data-animate-height="true" data-parent-link="true">


                                    </ul>
                                </div>
                            </li>
                            <li class="nav-secondary__l1-item"><span>Frequently Asked Questions</span>
                            </li>
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
                <div class='content-nav-section' data-short-name='Frequently Asked Questions'>
                    <div class="u-pos-relative l-contain">
                        <div class="rtf h1">
                            <h1>Frequently Asked Questions</h1>
                        </div>
                    </div>
                </div>
                <div class="content-nav-section" data-short-name="Frequently Asked Questions">

                    <div class="l-bg-gray padding-content" id="faqs">
                        <section class="faq l-contain js-faq" aria-label="FAQ">

                            <div class="faq__inner l-bg-white">
                                <?php foreach ($faqs as $faq) { ?>
                                <div class="faq__item">
                                    <a class="faq__question js-faq-open" href="#"><?= $faq['question'] ?></a>
                                    <div class="faq__answer rtf">
                                       <?= $faq['answer'] ?>
                                    </div>
                                </div>
                                <?php } ?>

                                <div class="u-align-center faq__lower">
                                    <p>
                                        Still have questions?
                                        <a href="customer-support" title="Contact Member Care">Contact Us.</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>