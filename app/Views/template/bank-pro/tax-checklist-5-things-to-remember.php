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
                            <li class="nav-secondary__l1-item"><span>Tax Checklist: 5 Things to Remember</span></li>
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
                    <div class='content-nav-section' data-short-name='Tax Checklist: 5 Things to Remember'>
                        <div class="u-pos-relative l-contain">
                            <div class="rtf h1">
                                <h1>Tax Checklist: 5 Things to Remember</h1>
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
                    <div class="content-nav-section" data-short-name="Tax Checklist: 5 Things to Remember">

                        <div class="rtf mt-4 mb-2 l-contain">
                            <figure class="u-float-l u-cf">
                                <img src="<?= $front_theme ?>/learn-and-plan-images/personal-finance-101/unsplash.jpg"
                                    alt="Woman working on a laptop " />
                                <p class='figcaption'></p>
                            </figure>
                            <p>No matter who you are or how much experience you have, tax season can feel daunting.
                                There&rsquo;s a lot to remember and a lot of factors to consider while filing. The
                                American tax system, for instance, involves around 800 forms&mdash;some with convoluted
                                rules and requirements. And another layer of complication has been added during the
                                pandemic, as rapid changes in finances and incomes have occurred, and things like
                                stimulus checks have been introduced. </p>
                            <p>Luckily, there are <a href="#">plenty of
                                    resources</a>, like this tax checklist, available to ensure that filing goes
                                smoothly this year. Below are a few key things to keep in mind as you approach the 2022
                                tax season. </p>
                            <h2>1. File Your Taxes on Time</h2>
                            <p>This may seem obvious, but filing your taxes by the due date is incredibly important.
                                There are two main penalties in place if you&rsquo;re unable to meet the deadline: the
                                failure to file penalty and the failure to pay penalty. Both of these can add up to 25%
                                of your taxes owed, meaning that you&rsquo;ll be paying significantly more if you miss
                                the deadline. </p>
                            <p>Avoiding these penalties is easy: just set a reminder in your calendar and remember to
                                file your taxes by April 18. However, if this date seems unattainable, filing for
                                extensions is possible, and can give you a bit more breathing room. </p>
                            <h2>2. Have Your Personal Information Ready</h2>
                            <p>Not knowing your personal information and the types of taxes you have to pay or claims
                                you are able to file is a common mistake. There are a few key pieces of personal
                                information you should know before filing your taxes in 2022:</p>
                            <ul>
                                <li><strong>Your income as a whole, including investment income</strong></li>
                                <li><strong>Social Security numbers for yourself, your spouses, and your
                                        dependents</strong></li>
                                <li><strong>Your marital status and whether you&rsquo;re filing together or
                                        separately</strong></li>
                                <li><strong>Any deductions and expenses you may have which impact your taxable
                                        amount</strong></li>
                            </ul>
                            <p><a href="#">Speaking with an expert</a> in order to
                                clarify which forms are needed for which tax claims can ensure you&rsquo;re getting it
                                right the first time. </p>
                            <h2>3. Prepare for Any Increases in Your Taxes</h2>
                            <p>While filing your basic tax returns can be straightforward if you&rsquo;re only receiving
                                one income from a single employer, it can get a little complicated if you have other
                                means of income to declare. For instance, your taxes may increase if you are receiving
                                rental income, stocks and shares, or even a salary from secondary employment. Any
                                additional means of income need to be declared for tax purposes and you will more than
                                likely have to prepare yourself for a tax increase to account for these. </p>
                        </div>
                    </div>
                </div>
                <div class="content-nav-section">
                    <div class="rtf mt-4 mb-2 l-contain">
                        <figure class="u-float-l u-cf"><img height="386" alt="Tax Checklist" width="580"
                                src="<?= $front_theme ?>/learn-and-plan-images/personal-finance-101/Tax%20Checklist-inpage.jpg">
                        </figure>
                        <h2>4. Determine if You&rsquo;re Eligible for Deductions</h2>
                        <p>Increases in income from selling your house or getting a raise will increase the amount you
                            pay in your taxes. However, there are some factors of your life which may qualify you to
                            deduct amounts from your taxes as well. Keeping these in mind will help you to save money on
                            the amount owed on your taxes. </p>
                        <p>Tuition costs, donations to charities, tax forgiveness credit, Health Savings Account
                            contributions, mortgage interest payments, and student loans can impact your taxes in a
                            positive way. Be sure to look at which deductions you qualify for as part of your tax filing
                            prep in order to pay the optimal amount and save as much as you can. </p>
                        <h2>5. Make Sure to Double Check Your Information</h2>
                        <p>Before you file your taxes, be sure to double-check your math and the information on your
                            forms, or consult with an expert on them. Ensuring that you are filing your taxes properly
                            and error-free will save you issues in the long run. </p>
                        <p>Although it seems like a lot to remember, having a tax checklist is a great place to start.
                            Instead of being intimidated by the complex U.S. tax system, approach your taxes
                            systematically and give yourself enough time to check over your claims. There is also the
                            option to talk to local financial experts in order to provide some reassurance that your
                            taxes are getting done right this year. </p>
     
                    </div>
                </div>


            </div>
        </main>
    </div>
</div>