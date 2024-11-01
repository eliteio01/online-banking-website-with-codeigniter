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
                            <li class="nav-secondary__l1-item"><span>How Rising Rates and Inflation Impact
                                    Businesses</span></li>
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
                    <div class='content-nav-section' data-short-name='How Rising Rates and Inflation Impact Businesses'>
                        <div class="u-pos-relative l-contain">
                            <div class="rtf h1">
                                <h1>The Impact of Rising Rates and Inflation on Your Business</h1>
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
                    <div class="content-nav-section" data-short-name="How Rising Rates and Inflation Impact Businesses">

                        <div class="rtf mt-4 mb-2 l-contain">
                            <figure class="u-float-l u-cf">
                                <img src="<?= $front_theme ?>/learn-and-plan-images/personal-finance-101/unsplash.jpg"
                                    alt="Rising interest rates" />
                                <p class='figcaption'></p>
                            </figure>
                            <p>As a business owner, thinking about the economy is part of the job. Inflation, recession,
                                job growth, wages, etc., all factor into how you do business. Lately, the rise in
                                federal interest rates is a hot topic and you may be wondering how this will affect your
                                business.</p>
                            <p>The Fed has been increasing rates on a regular basis in 2022 to cool off inflation and
                                slow down the economy to a more manageable level. When federal interest rates are high,
                                it becomes more expensive to do things like borrow money or carry debit. In turn, this
                                can decrease consumer demand, bringing prices back in check and alleviating strain on
                                supply chains.</p>
                            <p>Let&rsquo;s take a look at how this can impact you and your business.</p>
                            <h2>Increased Cost of Borrowing</h2>
                            <p>For the last few years, interest rates have been at near all-time lows, mostly to help
                                soften the economic impact of the pandemic. Just look at the housing market and the
                                demand for cars&mdash;lower interest rates spur purchase and consumption. It also drives
                                inflation, which is why the Fed wants to pump the brakes.</p>
                            <p>When it becomes more expensive to borrow money, demand is cooled, and inflation may slow
                                down. But it also means that businesses&rsquo; ability to borrow is diminished.
                                Businesses often rely on <a href="#">borrowed money from loans,
                                    credit cards and lines of credit</a>&nbsp;to help finance their growth. Large
                                purchases such as new equipment or real estate, or long-term upgrades and investments
                                may be put on hold due to higher interest rates. Payments on current variable rate loans
                                will also go up.</p>
                            <p>Higher rates can also lead to loan applications being reviewed with greater scrutiny.
                                Because it costs more for financial institutions to borrow money from each other,
                                lending standards become more stringent. Having a good relationship with your lender can
                                ease this process. That personal connection builds trust on both sides: your lender
                                trusts you to fulfill your financial obligations, and you trust your lender to better
                                understand and help with your long-term financial needs. <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> functions on a
                                philosophy of &ldquo;Building Strength Together&rdquo; for all our members, both
                                business and consumer. Get to know us and let us get to know you.</p>
                        </div>
                    </div>
                </div>
                <div class="content-nav-section">
                    <div class="rtf mt-4 mb-2 l-contain">
                        <figure class="u-float-l u-cf"><img height="386" alt="Rising interest rates" width="580"
                                src="<?= $front_theme ?>/learn-and-plan-images/running-a-business/3177%20%20LP%20Digital%20%20Business%20%20Inpage%20%20580x386.jpg" />
                        </figure>
                        <h2>Increased Cost of Operation</h2>
                        <p>It&rsquo;s no secret that <a href="#">rising
                                interest rates</a>&nbsp;affect more than just loans or credit cards, cascading through
                            the economy in the form of increased prices for goods and services. Costs for raw materials
                            and supplies are climbing, and lead times are getting longer. Wages and healthcare costs are
                            also on the rise, and offering competitive wages and benefits is crucial to retaining your
                            employees. Even where you do business is affected by rising real estate prices and rents.
                        </p>
                        <p>
                        </p>
                        <p>As a business owner, you may be faced with a tricky balancing act between absorbing these
                            costs to avoid increasing prices and driving customers away, and still maintaining a
                            profitable business capable of growth. It may be time to take an in-depth look at your
                            business and search for ways to reduce costs and streamline operations that could help your
                            business save some money each month.</p>
                        <p>
                        </p>
                        <h2>Cash Management Challenges</h2>
                        <p>Rising interest rates on your loans can diminish your cashflow, as your costs go up and the
                            dollar amount on loan payments increases. This can lead to less day-to-day cash stability
                            and reduce the ability to invest in long term growth. <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> provides a suite of <a
                                href="#">Cash Management
                                Solutions</a>&nbsp;to help you navigate these challenges.</p>
                        <p>If you&rsquo;ve been able to keep some cash on hand, you may be able to ride out these
                            interest rate increases. If you&rsquo;re a newer business owner that may not have that cash
                            or enough data to plan for economic ups and downs yet, you may want to proceed with caution
                            until the market levels off. Talking to our <a
                                href="#">business team</a>&nbsp;can help you make the
                            decisions that are best for you and your business.</p>
                        <p>Inflation can also make it difficult to build up cash reserves, so it&rsquo;s wise to have a
                            plan to set something aside whenever you can, easing potential bumps in the road. Small
                            amounts add up over time, and once you have accumulated some savings, our financial experts
                            can show you how to maximize those funds with investing and wealth management tools geared
                            for business.</p>
                        <h2>Changes in Consumer Behavior</h2>
                        <p>Interest rates affect everyone eventually. This includes your customers, who are likely to
                            spend less when interest rates are higher and their cost of credit and borrowing goes up.
                            Businesses based on financed products, such as equipment, real estate, or vehicles, may find
                            their customers hitting pause on purchasing. Your customers could be having the same
                            challenges obtaining credit as lending standards tighten.
                            Services dependent on more discretionary spending, such as luxury products, dining out, or
                            marketing services, are also prone to changes in consumer demand as customers cut back on
                            optional spending. As a consumer yourself, think about how your own personal finances have
                            been affected over the last several years and how it has changed your spending priorities.
                        </p>
                        <p>Businesses based on non-discretionary spending, such as <a
                                href="#">medical, dental, and veterinary
                                practices</a>&nbsp;need to keep pace with what consumers want and need, and that
                            requires investment. Expanding service offerings, adding new products, and hiring additional
                            staff to meet these needs come at a cost. Maintaining the standards your customers have come
                            to expect while continuing to grow your business can put a strain on finances, but
                            <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&rsquo;s <a href="#">highly competitive business loan
                                rates</a>&nbsp;can give your room to breathe.</p>
                        <h2> The Upside?</h2>
                        <p>Rising federal interest rates can take months to move through the economy and the effects
                            aren&rsquo;t always immediately predictable. Now is the time to take another look at your
                            business, determine where you can streamline costs and find opportunities to secure the
                            future. Your business will be better prepared to face small downturns and economic changes.
                        </p>
                        <p>And if you do have available cash in accounts that aren&rsquo;t doing much for you, these
                            rising interest rates mean there&rsquo;s more competition for your money.</p>
                        <p><strong>The average bank savings rate is now just 0.11%, up from 0.06% in January, per
                                Bankrate.com. The average rate on a one-year CD is 0.51%, up from 0.14% at the start of
                                the year.</strong></p>
                        <p><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> is committed to serving our members by offering higher rates&nbsp;and increasing them
                            as benchmark rates increase. This could mean greater returns on things like <a
                                href="#">Business Money
                                Markets</a>&nbsp;and <a
                                href="#">Business
                                Certificates</a>&nbsp;(known as certificates of deposit or CDs at other financial
                            institutions). While you shouldn&rsquo;t expect a windfall of cash, it can help offset
                            additional costs and allow you to further invest in your business future.</p>
                        <h2> What Can You Do?</h2>
                        <p>Smart businesses owners know they need a financial institution they can depend on and trust.
                            Banking is a vital part of any business, from a one-person operation to a
                            multimillion-dollar medical group. Without a good understanding of finance and professional
                            help, things can be much harder than necessary.</p>
                        <p>That&rsquo;s why <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&rsquo;s <a href="#">Business Banking
                                Team</a>&nbsp;is here for you and your business. We&rsquo;re trusted advisors, helping
                            you navigate your business&rsquo; financial needs. We can provide sound financial advice on:
                        </p>
                        <ul>
                            <li>Structuring debt and borrowing money</li>
                            <li><a href="#">Business loans, credit cards, and lines of credit</a>
                            </li>
                            <li>Debt consolidation and refinancing</li>
                            <li>Smarter spending, cost reduction and <a
                                    href="#">managing cash flow</a></li>
                            <li><a href="#">How to benefit from rising rates</a></li>
                            <li>Money management resources</li>
                            <li>Achieving revenue goals</li>
                            <li>Planning for anticipated demand and continued shortages</li>
                        </ul>
                        <p>If rising interest rates are impacting your business, talk with us. Over the past two years,
                            shutdowns, operational changes, and changing local conditions have likely affected you
                            personally and your business. Talking about and facing those challenges, both internal and
                            external, is much easier when you have a good relationship with your financial partner. </p>
                        <p>Sure, you could manage a lot of this on your own with some basic accounting and investment.
                            But we want you to be able to do more than just manage. As experts in our field, we&rsquo;re
                            deeply connected to our community, and we&rsquo;re here to help you thrive and grow. Let our
                            knowledge and networks work to your advantage. Focus on what you do best, and our team will
                            provide the financial tools and expertise to support you.</p>
                        <p>Helping you sustain and grow your business helps us sustain and grow ours, and together we
                            all benefit.</p>
                    </div>
                </div>


            </div>
        </main>
    </div>
</div>