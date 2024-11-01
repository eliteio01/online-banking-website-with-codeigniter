<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>


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
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-secondary__l1-item"><span>How to Manage Your Checking</span></li>
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

                <div class='bg-white u-pos-relative u-cf'>
                    <div class='content-nav-section' data-short-name='How to Manage Your Checking'>
                        <div class="u-pos-relative l-contain">
                            <div class="rtf h1">
                                <h1>Simple Ways to Manage a Checking Account</h1>
                            </div>
                            
                        </div>
                    </div>
                    <section class='article-info js-article-info l-contain mt-1' aria-label="Article Information">
                        <div class='article-info-author article-info-author--image'>
                            <img src="<?= base_url('uploads/' . $company_favicon) ?>" height="200" width="200" class="article-author__image"
                                alt="Icon" />
                            <p class='article-author-details'>
                               <span class="article-author__name"><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Financial Tips</span>
                            </p>
                        </div>
                    </section>
                    <div class="content-nav-section" data-short-name="How to Manage Your Checking">

                        <div class="rtf mt-4 mb-2 l-contain">
                            <figure class="u-float-l u-cf">
                                <img src="<?= $front_theme ?>/learn-and-plan-images/personal-finance-101/8554477.jpg"
                                    alt="open a checking account online" />
                                <p class='figcaption'></p>
                            </figure>
                            <p>While you might not often find yourself writing out an actual paper check, you still need
                                a checking account. Having a checking account makes it much easier to get paid and pay
                                your bills. Your debit card enables you to access money through ATM withdrawals and
                                online transfers.</p>
                            <p>At some point, everyone will need to open a checking account, so it&rsquo;s important to
                                how to use one. Here&rsquo;s a few easy-to-follow tips and rules to keep in mind when
                                opening and managing your checking account.</p>
                            <h2>What to Know Before Opening a Checking Account</h2>
                            <p>Most banks offer a variety of <a></a><a
                                    href="#">checking account options</a>, so
                                it&rsquo;s worth having a clear understanding of exactly what you intend to get out of
                                your account. Some things to consider when choosing a checking account include:</p>
                            <ul>
                                <li>Is there any minimum balance required to open an account?</li>
                                <br />
                                <li>Are there any limitations on checks or debit transactions?</li>
                                <br />
                                <li>Do you want a checking account with or without overdraft protection?</li>
                                <br />
                                <li>How much does it cost to use this account on a monthly, yearly, or per transaction
                                    basis?</li>
                                <br />
                                <li>How much money is needed to open a checking account that pays interest?</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-nav-section">
                    <div class="rtf mt-4 mb-2 l-contain">
                        <h2>Take Charge of Your Records</h2>
                        <p>Because it is a transactional account, funds can flow in and out quickly. It can sometimes be
                            hard to keep track of them all, and if you don&rsquo;t know what&rsquo;s going in and out of
                            your account, it will be difficult to manage it. While it might seem tedious, recording each
                            transaction made will not only allow you to manage your account properly, but also instill
                            good financial discipline.</p>
                        <h2>Balance Your Account Regularly</h2>
                        <p>Balancing your account helps you <a href="#">stick to your
                                budget</a>&nbsp;and helps you avoid unnecessary charges resulting from bounced checks or
                            overdraft fees. You can do this by manually comparing your monthly statements with your own
                            records to make sure they balance. This also helps you spot any errors in the system, such
                            as incorrectly charged fees.</p>
                        <figure class="u-float-l u-cf"><img alt="" height="386" width="580"
                                src="<?= $front_theme ?>/learn-and-plan-images/personal-finance-101/WomanComputing_1200x900.jpg" />
                        </figure>
                        <h2>Keep Your Account Information Protected</h2>
                        <p>Unfortunately, financial fraud remains a reality in our world. Don&rsquo;t take the safety of
                            your account information, especially your PIN numbers and online banking passwords, lightly.
                            In particular, be cautious about official-sounding requests for such information. These are
                            often <a href="#">phishing scams</a>&nbsp;as a
                            legitimate financial institution will never ask you for such sensitive information in this
                            way.</p>
                        <p>Simple actions to help you protect your money include checking your account regularly for
                            fraudulent or erroneous charges, never sharing your banking information with anyone, and
                            never accessing your financial accounts using public wifi that isn&rsquo;t password
                            protected. Additionally, if your debit card is stolen, report it immediately. You can call
                            Member Services at (800) 666-0191 to report lost of stolen cards, or any unusual activity in
                            your accounts. Check out our <a
                                href="#">Security
                                Center</a>&nbsp;for more information.</p>
                        <h2>Give Yourself a Cash Cushion</h2>
                        <p>While we understand that this is not always possible, it is good practice to always give
                            yourself some breathing room in your account. Emergencies always happen without warning, so
                            it&rsquo;s always a good idea to ensure you have a readily accessible cash on hand. This is
                            not only good practice for managing your checking account, but for your overall finances as
                            well. Make a plan for emergencies by setting up an <a
                                href="5-tips-for-saving-for-the-unexpected.html">emergency fund</a>. One useful tip is
                            to set up online alerts when your account balance falls below a certain level. Setting up
                            these <a href="#">Account
                                Alerts</a>&nbsp;is quick and easy. Account Alerts monitor your account every 10 minutes
                            for new activity, ensuring you have real-time account information right at your fingertips.
                        </p>
                        <h2>Understand the Effect of Funds Availability</h2>
                        <p>Under <a rel="noopener noreferrer" href="#"
                                target="_blank">federal regulations</a>, financial institutions are obligated to
                            disclose their funds availability policy to their customers. The funds availability policy
                            refers to how long it takes after you make a deposit for your funds to be available in your
                            account. In general, electronic deposits, cash deposits, and certain types of checks (such
                            as cashier&rsquo;s checks or U.S. Treasury checks) are available within one business day.
                            However, other types of checks may take a few business days to process, depending on your
                            bank or credit union.</p>
                        <p>A common mistake that people make is not factoring in funds availability when managing their
                            accounts. This is a mistake that can lead to overdrawing your account and overdraft fees.
                            It&rsquo;s also why keeping a cash cushion in your checking account is so important.</p>
                        <p>Here at <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>, we offer <a></a><a href="#">two
                                different types of checking accounts</a>, including a <a></a><a
                                href="#">free checking account</a>.
                            Each gives you access to a variety of<a></a><a
                                href="#">
                                online and mobile banking tools</a>, so be sure to contact our team today to discuss
                            which option is best suited to your needs.</p>
                    </div>
                </div>


            </div>
        </main>
    </div>
</div>