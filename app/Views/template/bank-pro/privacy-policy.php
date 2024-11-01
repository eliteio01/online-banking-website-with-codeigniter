<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>


                <div class='l-nav-secondary'>

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
                            <li class="nav-secondary__l1-item"><span>Online Privacy, Security &amp; Accessibility</span>
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
                <div class='content-nav-section' data-short-name='Online Privacy, Security &amp; Accessibility'>
                    <div class="u-pos-relative l-contain">
                        <div class="rtf h1">
                            <h1>Online Privacy, Security & Accessibility</h1>
                        </div>
                    </div>
                </div>
                <div class="content-nav-section" data-short-name="Online Privacy, Security &amp; Accessibility">

                    <div class="rtf mt-4 mb-2 l-contain">
                        <h3>Website Accessibility Statement</h3>
                        <p><?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> is committed to enhancing our site and increasing accessibility and usability for all
                            of our members. Our accessibility efforts are based on the World Wide Web Consortium&rsquo;s
                            (W3C) Web Content Accessibility Guidelines 2.0 Level AA (WCAG 2.0 AA). Our website will be
                            tested on a periodic basis with assistive technology such as screen readers and screen
                            magnifiers, and with users with disabilities who use these technologies..</p>
                        <p>Please be aware that our efforts are ongoing. If you encounter an accessibility issue, please
                            <a href="customer-support">Contact Us</a>. We will make all
                            reasonable efforts to make each page of our website accessible for you.
                        </p>
                        <h3>Online Privacy &amp; Security Policy</h3>
                        <p><?= $company_name ?> understands the importance of protecting your privacy. This online
                            privacy and security policy describes how <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> collects, uses, shares, and protects
                            information when you visit or use <?= base_url() ?>.</p>
                        <h4>Types of Information We Collect</h4>
                        <p>When you visit and browse the Website or Apps, we are able to collect information that could
                            be reasonably used to indirectly identify you individually, such as your physical location,
                            the device you are using and the Internet Service Provider (ISP) you are using. We can also
                            record the date, time, and pages visited while you are at our site and the type of web
                            browser and operating system you use. We do this to determine how individuals use the
                            Website and services so that we can enhance a user&rsquo;s experience and make the Website
                            and services more useful for customers.</p>
                        <p>When you request information or make an application for services, we collect personally
                            identifiable information that you provide to us directly, such as by completing an online
                            form, application, field, or survey. Personally identifiable information means information
                            that directly identifies you or can be used to directly identify you. Examples may include
                            your name, mailing address, phone number, email address, date of birth, social security
                            number, driver&rsquo;s license number, and account numbers. We will retain your personal
                            information for as long as your account is active or as needed to provide you services. We
                            will retain and use your information as necessary to comply with our legal obligations,
                            resolve disputes, and enforce our agreements.</p>
                        <p>In addition to the personal information described above, we also collect anonymous
                            demographic information, which is not unique to you, such as your zip code, region,
                            preferences, interests, and favorites. When you use our online or mobile banking services,
                            you also may be required to enter information we believe is necessary to safely process your
                            transaction, such as your digital banking Login ID and password.</p>
                        <h4>How We Collect Information</h4>
                        <ul>
                            <li><strong>Browser Cookies</strong> &ndash; Cookies are pieces of data that are stored
                                directly on your computer, smartphone, or other internet access device. They are
                                assigned by a web server to the browser on your device and allow us to recognize your
                                device and store user preferences for when you return to the Website. Information
                                gathered through the use of cookies may be used to make offers to you via online ads,
                                email, U.S. mail or telephone, subject to the privacy preferences you have on file with
                                <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>. We do not embed your Social Security number, account number(s), or passwords
                                into our cookies. Cookies we use do not contain or capture unencrypted personal
                                information. You can refuse to accept these cookies and most devices and browsers offer
                                their own cookie privacy settings. You&rsquo;ll need to manage your cookie settings for
                                each device and browser you use. If you do not accept these cookies or clear cookies
                                regularly, your experience while visiting our website may be less than optimal. For
                                online and mobile banking users, non-acceptance or removal of cookies will require a new
                                secure access code for each session.</li>
                            <li><strong>IP Address</strong> &ndash; Your IP Address is a number automatically assigned
                                to the device you&rsquo;re using by your Internet Service Provider (ISP). An IP address
                                is identified and logged automatically in our server log files whenever a user visits
                                the Website, along with the time of the visit and the page(s) that were visited.
                                Collection of IP addresses is standard practice on the internet and is done
                                automatically by many websites. We use IP addresses for purposes such as calculating
                                site usage levels, helping diagnose server problems, to personalize/tailor your
                                experience while engaging with us online and offline, for compliance and security
                                purposes, for advertising and administering the Website. The Controls &amp; Alerts App
                                periodically collects, transmits, and uses geolocation information to enable features
                                that prevent fraudulent card use and to send alerts, but only if the End User expressly
                                authorizes the collection of such information. Geolocation information can be monitored
                                on a continuous basis in the background only while the App is being used or not at all,
                                depending on the End User&rsquo;s selection. End Users can change their location
                                permissions at any time in their device settings.</li>
                            <li><strong>Aggregated Data</strong> &ndash; Aggregated Data is data that we may create or
                                compile from various sources, including but not limited to, accounts and transactions.
                                We use this information, which does not identify individual account holders, for our
                                business purposes, which may include offering products or services, research, marketing,
                                or analyzing market trends and other purposes consistent with applicable laws.</li>
                            <li><strong>Social Media Sites</strong> &ndash; <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> has a presence on social media
                                platforms including, but not limited to, Facebook, Twitter, LinkedIn, and Google+ that
                                enable online sharing and collaboration among users who have registered to use such
                                sites. Any content, such as pictures, information, or opinions that you post on social
                                media pages, or any Personal Information that you make available to other participants
                                on these social platforms, is subject to the terms of use and privacy of those hosting
                                platforms.</li>
                            <li><strong>Do Not Track Signals (&ldquo;DNT&rdquo;)</strong> &ndash; Do Not Track Signals
                                refer to an HTTP header used by Internet web browsers to request a web application
                                disable its tracking or cross-site user tracking. When DNT is enabled, a user&rsquo;s
                                web browser adds a header to content requests indicating that the user does not want to
                                be tracked. California law requires us to disclose how we respond to web browser DNT
                                signals. We do not respond to or take any action with respect to a DNT configuration set
                                in your internet browser, and therefore, do not disable tracking.</li>
                            <li><strong>Social Security Numbers</strong> &ndash; As required by law, in the normal
                                course of business, <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> collects Social Security numbers in establishing,
                                maintaining, and servicing member accounts. We implement reasonable measures to protect
                                the confidentiality of Social Security numbers, to prohibit unlawful disclosure of
                                Social Security numbers, and to limit access to Social Security numbers.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>