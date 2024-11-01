<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>


                <div class='l-sub-hero'>
                    <section class='sub-hero hero--image js-hero--image' aria-label="Hero Area">
                        <div class='image-hero js-hero-image-bg'>
                            <div class='hero-image-bg main-hero-background main-hero-background--home hero-image-bg--gradient hero-image-bg--gradient-10'
                                style='background-image:url("<?= $front_theme ?>/bank-images/Citadel_AlkemyX_03546_bank_tony_1600x650.jpg"); transform:translateY(0px);'>
                            </div>
                        </div>
                        <div class='sub-hero-content l-contain'>
                            <div class='sub-hero-content-inner'>
                                <p class="sub-hero__title mb-1">Bank Accounts, Credit Cards & Digital Tools </p>
                                <p class='sub-hero__teaser p'>Check out our safe and secure checking accounts with free
                                    debit cards for everyday spending, plus rewarding credit cards, and helpful Online &
                                    Mobile Banking tools.</p>
                                <div class='sub-hero-content-buttons'>
                                    <?php if ($allow_register == 1) { ?>
                                        <a href="#" data-open="header-register"
                                            class="js-header-login-toggle sub-hero__cta-link" title="Open An Account">
                                            <span>Open an Account</span></a>
                                    <?php } ?>
                                    <a href="mailto:<?= $company_email ?>"
                                        class="sub-hero__cta-link sub-hero__cta-link--secondary"
                                        rel="noopener noreferrer" target="_blank" title="Online Appointment Scheduling">
                                        <span>Schedule Appointment</span>
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
                                <button type="button" data-toggle="section-nav-menu">Bank <span
                                        class="button-icon"></span></button>
                            </li>
                            <li class="nav-secondary__l1-item"><span>Bank</span></li>
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
                    <div class="content-nav-section" data-short-name="Bank">
                        <div class="rtf mt-4 mb-2 l-contain">
                            <p>
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> offers convenient,
                                simple and free banking solutions that make your experience more valuable and rewarding.
                                Choose from <a></a><a href="#">credit cards</a> with low interest rates and cash back
                                and <a></a><a href="#">checking accounts</a> loaded with debit card rewards you can earn
                                from everyday spending.
                            </p>
                            <p>You can bank with us at any time, from anywhere with
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&rsquo;s <a></a><a
                                    href="#">online and mobile banking solutions</a>. If you&rsquo;d rather come in and
                                bank face-to-face, we&rsquo;re <a href="#">conveniently located</a>&nbsp;near you. Can't
                                make it into a branch? <a href="#">Schedule an appointment </a>with a local
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> team member
                                in-person or over the phone.
                            </p>

                            <p>Learn more about <a href="bank/credit-cards.html">
                                    <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>'s credit cards
                                </a>&nbsp;with low interest, <a href="#">checking accounts</a>, <a></a><a href="#">cash
                                    back rewards</a>, and more by <a></a><a href="#">contacting</a> us today!</p>
                        </div>

                    </div>
                    <div class="padding-content">
                        <div class="tiles tiles--arrows l-contain mt-3 js-tiles">
                            <div class="js-tiles-container">
                                <div class="tiles__inner js-tile-group">
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Checking Accounts</h3>
                                        <p class="tile__body">
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&rsquo;s
                                            checking accounts offer 24/7 account management with online bill pay, mobile
                                            deposit, account alerts, and more. Compare the benefits of each
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>
                                            Checking Account to find the right one for you.
                                        </p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Teen Debit Accounts</h3>
                                        <p class="tile__body">Help your teenager get real world ready with a free debit
                                            card starting at age 13. Practice everyday saving and spending skills, and
                                            monitor activity in Online &amp; Mobile Banking.</p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Compare Credit Cards</h3>
                                        <p class="tile__body">Choosing the credit card that makes financial sense is
                                            easy when you compare
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>'s&nbsp;Mastercard&reg;
                                            credit cards. You get low rates, security, and rewards&mdash;no matter which
                                            you choose.
                                        </p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Credit Card Rewards</h3>
                                        <p class="tile__body">
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> offers
                                            a variety of credit card rewards and redemption options. Learn more about
                                            the types of rewards available and how to redeem.&nbsp;
                                        </p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Contactless Payments</h3>
                                        <p class="tile__body">Contactless payments make paying faster, easier, and more
                                            secure. Simply tap to pay with your
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> debit
                                            or credit card at checkout when you&rsquo;re on-the-go.
                                        </p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Bank by Phone with Adel</h3>
                                        <p class="tile__body">Introducing Voice Banking With Adel! Get quick answers to
                                            common banking questions, complete account inquiries, and conduct routine
                                            transactions in a secure environment. Learn more!<br /></p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Online &amp; Mobile Banking at
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>
                                        </h3>
                                        <p class="tile__body">
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> has
                                            digital banking tools to meet your needs. Deposit checks with your mobile
                                            device, pay bills online, check balances on the go, and more.
                                        </p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Express
                                            Banking
                                        </h3>
                                        <p class="tile__body">
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> offers
                                            Express Banking Machines, letting customers transact conveniently and
                                            securely. Learn more about how our Express Banking offers more than the
                                            typical ATM.
                                        </p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Video
                                            Connect
                                        </h3>
                                        <p class="tile__body"><span>Connect with us from the comfort of home with our
                                                secure, video banking tool. Chat face-to-face with a representative
                                                using your computer or mobile device. Learn more.&nbsp;</span></p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Online Appointment Scheduling</h3>
                                        <p class="tile__body">Book an appointment with a local
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Team
                                            member in-person or over the phone. We look forward to meeting with you!
                                        </p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Why Bank With
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Credit
                                            Union?
                                        </h3>
                                        <p class="tile__body">Our members enjoy great rates, lower fees, exclusive
                                            benefits, superior customer service, and so much more.</p>

                                    </a>
                                    <a class="tile js-tile tile--link" href="#">
                                        <h3 class="tile__heading">Superior Member Service</h3>
                                        <p class="tile__body">At
                                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>, we
                                            promise to go beyond merely meeting your banking needs to deliver a better
                                            experience with every interaction. Find out how we fulfill this promise
                                            every day.
                                        </p>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='content-nav-section'
                        data-short-name='Why Choose <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>?'>
                        <div class='rtf u-cf padding-content l-contain'>
                            <h2>Why Choose
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>?
                            </h2>
                            <p><img alt="forbes best-in-state credit union "
                                    src="<?= $front_theme ?>/why-citadel-images/Forbes%20best-in-state%20credit%20union%20v2.jpg"
                                    style="float: right; margin-right: 15px;" /></p>
                            <p><span style="font-size: medium;">
                                    <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> is a
                                    not-for-profit credit union that exists to serve the people, businesses, and
                                    neighborhoods of Greater Philadelphia, so they can prosper. We provide our members
                                    with all things banking, plus the educational resources and guidance to build and
                                    maintain financial security.
                                </span></p>
                            <p><span style="font-size: 18px;"><strong>Here&rsquo;s why you should join
                                        us</strong>:</span></p>
                            <p><span style="font-size: 16px;"><img height="23" alt="single checkmark" width="23"
                                        src="<?= $front_theme ?>/icons/campaign-icons/CheckMark-darkblue.png" />&nbsp;Better
                                    rates &amp; low (or no!) fees</span><br />
                                <span style="font-size: 16px;">
                                    <img height="23" alt="single checkmark" width="23"
                                        src="<?= $front_theme ?>/icons/campaign-icons/CheckMark-darkblue.png" />&nbsp;No
                                    tricks or hidden selling tactics<br />
                                    <img height="23" alt="single checkmark" width="23"
                                        src="<?= $front_theme ?>/icons/campaign-icons/CheckMark-darkblue.png" />&nbsp;Personalized
                                    banking experiences, online &amp; in-person<br />
                                    <img height="23" alt="single checkmark" width="23"
                                        src="<?= $front_theme ?>/icons/campaign-icons/CheckMark-darkblue.png" />&nbsp;Open
                                    to anyone who lives or spends time in Southeast PA<br />
                                    <img height="23" alt="single checkmark" width="23"
                                        src="<?= $front_theme ?>/icons/campaign-icons/CheckMark-darkblue.png" />&nbsp;All
                                    you need to do is open a savings account to join</span>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </main>
    </div>
</div>