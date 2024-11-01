<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>


                <div class='l-sub-hero'>
                    <section class='sub-hero hero--image js-hero--image' aria-label="Hero Area">
                        <div class='image-hero js-hero-image-bg'>
                            <div class='hero-image-bg main-hero-background main-hero-background--home hero-image-bg--gradient hero-image-bg--gradient-10'
                                style='background-image:url("<?= $front_theme ?>/borrow-images/Citadel_AlkemyX_00034_borrow_kat_1600x650.jpg"); transform:translateY(0px);'>
                            </div>
                        </div>
                        <div class='sub-hero-content l-contain'>
                            <div class='sub-hero-content-inner'>
                                <p class="sub-hero__title mb-1">Easy & Secure Loan Payments</p>
                                <p class='sub-hero__teaser p'>Thank you for choosing
                                    <?= $company_name ?> as your lending partner. Pay your loan now or set up automatic
                                    payments.
                                </p>

                            </div>
                        </div>
                    </section>
                </div>
                <div class='l-nav-secondary'>

                    <nav class="js-nav-secondary nav-secondary ">
                        <ul class="nav-secondary__l1">
                            <li class="nav-secondary__l1-item">
                                <button type="button" data-toggle="section-nav-menu">Payments <span
                                        class="button-icon"></span></button>
                                <div id="section-nav-menu" class="nav-secondary__l1-flyout" data-toggler=".is-active">
                                    <ul id="section-nav-drilldown"
                                        class="nav-secondary__l2 vertical menu accordion-menu" data-drilldown
                                        data-auto-height="true" data-animate-height="true" data-parent-link="true">
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-secondary__l1-item"><span>Payments</span></li>
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
                <div class='content-nav-section' data-short-name='Payments'>
                    <div class="u-pos-relative l-contain">
                        <div class="rtf h1">
                            <h1>Payments</h1>
                        </div>
                    </div>
                </div>
                <div class="content-nav-section" data-short-name="Payments">

                    <div class="rtf mt-4 mb-2 l-contain">
                        <p><span>
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> offers several
                                convenient options to make payments on auto loans, personal loans, and mortgages. You
                                can also find out if you're eligible to <a href="#">Skip-a-pay</a>!
                            </span></p>
                        <h2 style="text-align: center;"><a href="#auto">Automatic Payments</a> | <a href="#external">Pay
                                from Non-
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Account
                            </a> | <a href="#onetime">One-Time Payments </a> | <a href="#mail">By Mail</a> | <a
                                href="#person">In Person </a></h2>
                        <a href="#person">
                        </a><a name="auto"></a>
                        <h2>Set Up Automatic Payments</h2>
                        <p><span>Never miss a payment due date when you set up automatic payments. With Online Banking
                                and the
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Mobile, setting up
                                automatic payments is fast, easy, and secure!</p>
                        <p>
                            <strong>✔ Instant account authentication<br>
                                ✔ Schedule automatic recurring payments each month with electronic transfers
                                (ACH)</strong>
                        </p>

                        <a name="external"></a>
                        <h2>Pay from Non-
                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Account
                        </h2>
                        <p><span>Make a one-time payment or set up recurring payments using your non-
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> bank's bill pay
                                feature.&nbsp; Simply follow your bank or credit union's instructions for setting up
                                online payments. You will need&nbsp;
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>'s routing number:
                                <?= $bank_routing ?>.&nbsp;
                            </span><br>
                            <br>
                            <span><strong>TIP:</strong> Your <a href="#">most recent billing statement</a>&nbsp;will
                                contain the information you need to set up online payments.&nbsp;</span>
                        </p>
                        <a name="onetime" id="one"></a>
                        <h2> One-Time Payments </h2>
                        <p>Need to make a payment quickly? Our Express Pay options are designed to help you make a
                            one-time payment as fast as possible with a debit or eCheck. <strong>Please note: A fee
                                applies to each of these payment methods.</strong></p>

                        <h3><strong>Easily make quick payments online with Express Pay for a small fee. Follow these
                                quick steps:</strong></h3>
                        <ul>
                            <li>Log into your
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> account with your
                                <bold>member account ID</bold> and <bold>zip code. </bold>
                            </li>
                            <li>Create a profile.</li>
                            <li>Make a payment. Note: A fee will be assessed for online payments.</li>
                        </ul>

                        <a name="mail" id="two"></a>
                        <h2>Pay by Mail</h2>
                        <p>Mail your payments to:</p>
                        <p style="margin-left: 40px;">
                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Loan Payments<br>
                            <?= $company_address ?>
                        </p>
                        <p><span>Include your billing statement coupon with your check, if available. If it is not
                                available and you are paying with a non-
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> check, please add
                                your
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> account number on
                                the Memo line.
                            </span></p>
                        <a name="person" id="three"></a>
                        <h2>Pay at a Branch</h2>
                        <p>Make your payment in-person at any of our convenient<a href="#"> branch locations</a> using
                            our free, self-serve <a href="#">
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Express Banking
                            </a>. If you need assistance, a member of our team will be happy to help during business
                            hours.<a href="#"> Find a branch</a> near you today!</p>
                    </div>
                </div>
                <div class='l-join-cta content-nav-section' data-short-name='CTA'>
                    <section class="join-cta join-cta--secondary join-cta--ms"
                        aria-label="Join <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>">
                        <div class="join-cta-content l-contain u-align-center">
                            <h2 class="join-cta__title ">Need help making a payment?</h2>
                            <a href="customer-support" class="join-cta__link" title="Make a Payment Quiz">Let Us
                                Know</a>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</div>