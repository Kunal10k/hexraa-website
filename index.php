<?php include 'subpages/header.php'; ?>





<!-- hero section  -->

<section class="hosting-section" style="background-image: url(./assets/img/home/home_hero_bg.webp);">
    <h5>TRUSTED PARTNER FOR ROBUST, SECURE &</h5>
    <h2>AFFORDABLE <span>H</span>OSTING</h2>
    <p>Experience the power of AMD EPYC servers where Innovative <br>technology meets Affordability.</p>

    <div class="trust-row">
        <div class="trust-card">
            <img src="assets/img/home/t.webp" alt="Trustpilot">
            <span>4.5/5 FROM 2500+ REVIEWS</span>
        </div>
        <div class="trust-card">
            <img src="assets/img/home/g.webp" alt="Google">
            <span>TRUST SCORE 4.9 BASED ON 300+ REVIEWS</span>
        </div>
    </div>

    <button class="btn-view">VIEW PLAN <i class="bi bi-arrow-up-right"></i></button>

    <div class="info-row mt-5">
        <div class="info-box">
            <img src="assets/img/home/3.png" alt="" width="40">
            <h6>Happy Customers</h6>
            <p>50k+</p>
        </div>
        <div class="info-box">
            <img src="assets/img/home/2.png" alt="" width="40">

            <h6>Uptime SLA</h6>
            <p>99.9%</p>
        </div>
        <div class="info-box">
            <img src="assets/img/home/1.png" alt="" width="40">

            <h6>Expert Support</h6>
            <p>24/7</p>
        </div>
    </div>
</section>

<!-- price planed  -->

<section class="pricing-section global_padding pt-0">
    <div class="container">
        <h2 class="headline">FIND THE <span>PERFECT PLAN</span> FOR YOU</h2>
        <p class="para w-75 m-auto">
            Choose from our carefully crafted hosting solutions designed to meet every
            need, from personal projects to enterprise applications.
        </p>

        <!-- Modern billing toggle -->
        <div class="billing-toggle mt-3">
            <button class="toggle-btn active" id="monthly">Billed Monthly</button>
            <div class="toggle-switch" id="switchToggle">
                <span class="switch-circle"></span>
            </div>
            <button class="toggle-btn" id="yearly">Billed Yearly</button>
        </div>

        <div class="plans">
            <!-- Plan 1 -->
            <div class="plan" id="plan1">
                <h3>Shared Hosting</h3>
                <p>Perfect for Beginners</p>
                <div class="price" id="price1">$0.35<span>/month</span></div>
                <div class="save"><i class="fa-solid fa-tag"></i> save 93%</div>
                <label class="proces">$5</label>
                <button class="choose-btn">CHOOSE PLAN</button>
                <ul class="features">
                    <li class="include">Whats Included</li>
                    <li><i class="fa-solid fa-globe"></i> 1 Website</li>
                    <li><i class="fa-solid fa-database"></i> 10GB NVMe Storage</li>
                    <li><i class="fa-solid fa-infinity"></i> Unlimited Bandwidth</li>
                    <li><i class="fa-solid fa-lock"></i> Free SSL Certificate</li>
                    <li><i class="fa-solid fa-headset"></i> 24/7 Support</li>
                </ul>
            </div>

            <!-- Plan 2 (Most Popular) -->
            <div class="plan popular" id="plan2">
                <div class="badge">
                    <i class="fa-solid fa-bookmark badge_icon"></i>MOST POPULAR
                </div>
                <h3>Student Hosting</h3>
                <p>Special Student Pricing</p>
                <div class="price" id="price2">$10<span>/month</span></div>
                <div class="save"><i class="fa-solid fa-tag"></i> save 93%</div>
                <label class="proces">$5</label>
                <button class="choose-btn">CHOOSE PLAN</button>
                <ul class="features">
                    <li class="include">Whats Included</li>
                    <li><i class="fa-solid fa-globe"></i> 1 Website</li>
                    <li><i class="fa-solid fa-database"></i> 10GB NVMe Storage</li>
                    <li><i class="fa-solid fa-infinity"></i> Unlimited Bandwidth</li>
                    <li><i class="fa-solid fa-lock"></i> Free SSL Certificate</li>
                    <li><i class="fa-solid fa-headset"></i> 24/7 Support</li>
                </ul>
            </div>

            <!-- Plan 3 -->
            <div class="plan" id="plan3">
                <h3>Reseller Hosting</h3>
                <p>Perfect for Beginners</p>
                <div class="price" id="price3">$6.36<span>/month</span></div>
                <div class="save"><i class="fa-solid fa-tag"></i> save 93%</div>
                <label class="proces">$5</label>
                <button class="choose-btn">CHOOSE PLAN</button>
                <ul class="features">
                    <li class="include">Whats Included</li>
                    <li><i class="fa-solid fa-user-group"></i> 25 cPanel Accounts</li>
                    <li><i class="fa-solid fa-database"></i> 50GB NVMe Storage</li>
                    <li><i class="fa-solid fa-globe"></i> Unlimited Domains</li>
                    <li><i class="fa-solid fa-lock"></i> Free SSL Certificate</li>
                    <li><i class="fa-solid fa-user-shield"></i> Reseller Support</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- featured section  -->

<section class="features-section global_padding">
    <div class="container">
        <div class="section-header">
            <h5 class="sub_headline">OUR FEATURES</h5>
            <h2 class="headline"><span>FEATURES</span> YOU EXPECT WITH US</h2>
            <p class="para w-75 m-auto">Discover the powerful features and tools that make our hosting platform the
                perfect choice for your
                business
                growth and success.</p>
        </div>

        <div class="features-grid mt-4">
            <div class="feature-box">
                <img src="assets/img/home/nvme_storage.webp" alt="NVMe SSD Storage" />
                <div class="f_box">
                    <h4><i class="fa-solid fa-database"></i> NVMe SSD Storage</h4>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptas quibusdam? Ut
                        consequatur dignissimos facilis?</p>
                </div>
            </div>

            <div class="feature-box">
                <img src="assets/img/home/99_uptime.webp" alt="99% Uptime" />
                <div class="f_box">
                    <h4><i class="fa-solid fa-clock"></i> 99% Uptime Guaranteed</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptas quibusdam? Ut
                        consequatur dignissimos facilis?</p>
                </div>
            </div>

            <div class="feature-box">
                <img src="assets/img/home/secure_server.webp" alt="Secure Servers" />
                <div class="f_box">
                    <h4><i class="fa-solid fa-shield-halved"></i> Secure Servers</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptas quibusdam? Ut
                        consequatur dignissimos facilis?</p>
                </div>
            </div>

            <div class="feature-box">
                <img src="assets/img/home/automated_backups.webp" alt="Automated Backups" />
                <div class="f_box">
                    <h4><i class="fa-solid fa-cloud-arrow-up"></i> Automated Backups</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptas quibusdam? Ut
                        consequatur dignissimos facilis?</p>
                </div>
            </div>

            <div class="feature-box">
                <img src="assets/img/home/wordpress_optimize.webp" alt="WordPress Optimized" />
                <div class="f_box">
                    <h4><i class="fa-brands fa-wordpress"></i> WordPress Optimized</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptas quibusdam? Ut
                        consequatur dignissimos facilis?</p>
                </div>
            </div>

            <div class="feature-box">
                <img src="assets/img/home/free_site_migration.webp" alt="Free Site Migration" />
                <div class="f_box">
                    <h4><i class="fa-solid fa-globe"></i> Free Site Migration</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptas quibusdam? Ut
                        consequatur dignissimos facilis?</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- 🟣 Trusted Section -->
<section class="trusted text-align  global_padding pb-0">
    <div class="container text-center">
        <h4>
            <img src="assets/img/Frame.png" alt="" width="20">
            Trusted by <span>50,000+</span> happy customers
        </h4>

        <!-- 🟡 Carousel -->
        <div class="owl-carousel trusted-carousel ">
            <div class="item"><img src="assets/img/home/1a.png" alt="Client 1"></div>
            <div class="item"><img src="assets/img/home/2a.png" alt="Client 1"></div>
            <div class="item"><img src="assets/img/home/3a.png" alt="Client 1"></div>
            <div class="item"><img src="assets/img/home/4a.png" alt="Client 1"></div>
            <div class="item"><img src="assets/img/home/5a.png" alt="Client 1"></div>
            <div class="item"><img src="assets/img/home/6a.png" alt="Client 1"></div>

        </div>
    </div>
</section>

<section class="powerful-hosting global_padding">
    <div class="container">
        <h2 class="headline text-center">
            POWERFUL <span>HOSTING SOLUTIONS</span> FOR YOUR SUCCESS
        </h2>

        <div class="ph-wrapper mt-4">
            <!-- Left Illustration -->
            <div class="ph-left">
                <img src="assets/img/home/hosting_solutions.webp" alt="Server Illustration">
            </div>

            <!-- Right Features -->
            <div class="ph-right">
                <div class="ph-card">

                    <div class="ph-content">
                        <h3>Lightning Fast Website Speed</h3>
                        <p>
                            Our servers are set up to handle even the most resource-intensive WordPress
                            installations. We maintain highly optimized web and database servers to ensure your
                            WordPress sites work properly 24 hours a day, 7 days a week.
                        </p>
                    </div>
                </div>

                <div class="ph-card">

                    <div class="ph-content">
                        <h3>Always Top-notch Security</h3>
                        <p>
                            Our hosting services are always backed by secure data centers, and we regularly update
                            our software and monitor for threats, including DDoS attacks.
                        </p>
                    </div>
                </div>

                <div class="ph-card">

                    <div class="ph-content">
                        <h3>Regular Website Backup</h3>
                        <p>
                            Backups are essential for maintaining a secure website. They protect data and content
                            from unexpected events such as server crashes, attacks, and accidental deletions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

    <section class="our_commitment global_padding text-center">

        <div class="container">
            <h3 class="headline mb-4"> our commitment to <span>your satisfaction</span></h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="commit_wrapper">
                        <img src="assets/img/home/best_support.webp" alt="" class="img-fluid">
                        <h5>The Saints of Hosting</h5>
                        <p>Our mission is to provide our customers with the best possible care and quality in the
                            industry. We will never sacrifice our morals or cut corners anywhere.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="commit_wrapper">
                        <img src="assets/img/home/premium_equipement.webp" alt="" class="img-fluid">
                        <h5>The Saints of Hosting</h5>
                        <p>The latest generation servers, Intel processors, and enterprise-grade PCIe 4.0 NVMe
                            storage
                            are all sourced directly from premium vendors.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="commit_wrapper">
                        <img src="assets/img/home/saints_hosting.webp" alt="" class="img-fluid">
                        <h5>The Saints of Hosting</h5>
                        <p>Whenever you need help, our award-winning Linux admins are available 24x7 to assist you.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="why-choose-section global_padding">
        <div class="container">
            <h2 class="headline text-center mb-4">WHY <span>CHOOSE HEXRAA</span> OVER THE OTHERS?</h2>
            <div class="why-grid">
                <div class="grid_items">
                    <div class="why-item fast">
                        <h3>Reliable servers and technology</h3>
                        <p class="text-r">
                            The reliable servers and the technology that it accommodates, ensures an optimal
                            performance for your web application. This brings forth a great experience.
                        </p>
                    </div>

                    <div class="why-item commit">
                        <h3>Commitment to safety</h3>
                        <p>
                            The web application requires utmost safety to use and become secure, the SSL that we
                            include
                            in our services, brings with it, a malware scanner and SSL certificate for free.
                        </p>
                    </div>

                    <div class="why-item  third">
                        <h3>Award-winning support</h3>
                        <p>
                            We bring about 24/7 customer support, both during the purchase of our service packages
                            and
                            technical support which happens through chat, phone and email.
                        </p>
                    </div>
                </div>

                <div class="grid_items fc">
                    <div class="why-center">
                        <img src="assets/img/home/why_choose_hexraa.webp" alt="Server Illustration">
                    </div>
                </div>


                <div class="grid_items">

                    <div class="why-item secound">
                        <h3>Optimized for speed and performance</h3>
                        <p>
                            The technology that we use is always referred for its speed and performance
                            optimization.
                            Speed and performance is what customers bank on us.
                        </p>
                    </div>

                    <div class="why-item commit_2">
                        <h3>Registered and Trusted company</h3>
                        <p>
                            We very much value compliance when it comes to hosting, we are a registered and trusted
                            hosting service company, which is compliant for policies and procedures.
                        </p>
                    </div>

                    <div class="why-item fourth">
                        <h3>30 Days Money Back Guarantee</h3>
                        <p>
                            Choose our services and get a 30-day money-back guarantee with no questions asked!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="comparison-section global_padding">
        <div class="container text-center">
            <h2 class="headline">
                HEXRAA HEAD TO HEAD
            </h2>
            <h3 class="headline" style="color:#FF6B00;">COMPARISON WITH COMPETITORS</h3>

            <div class="table-wrapper mt-4 shadow">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th><img src="assets/img/home/v1.png" alt="HEXRAA" width="85"></th>
                            <th><img src="assets/img/home/v2.png" alt="GoDaddy" width="85"></th>
                            <th><img src="assets/img/home/v3.png" alt="HostGator" width="85"></th>
                            <th><img src="assets/img/home/v4.png" alt="BigRock" width="85"></th>
                            <th><img src="assets/img/home/28c0992f01d38c2b9f187655e9a1d8a7e104cd5a.png" alt="Bluehost"
                                    width="85"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Starting from</td>
                            <td>₹720 <span>/year</span></td>
                            <td>₹2868 <span>/year</span></td>
                            <td>₹4788 <span>/year</span></td>
                            <td>₹4788 <span>/year</span></td>
                            <td>₹5388 <span>/year</span></td>
                        </tr>

                        <tr>
                            <td>SSD Servers</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Free SSL Certificate</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Free Malware Scans & Removal</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td>Paid</td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                        </tr>

                        <tr>
                            <td>Free Website Backups</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td>Paid</td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                        </tr>

                        <tr>
                            <td>Cloudflare CDN with Railgun</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                        </tr>

                        <tr>
                            <td>Jet Backup</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td>Paid</td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>Built-in Caching</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Free Website Migration</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                        </tr>

                        <tr>
                            <td>Instant Chat Response</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                        </tr>

                        <tr>
                            <td>Support in English, Hindi</td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-check"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                            <td><i class="fa-solid fa-xmark"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>



    <!-- *******************  -->

    <section class="map text-center global_padding">
        <div class="container">
            <h2 class="headline"><span>Connected </span>Across Continents</h2>
            <p class="w-50 m-auto para">Fast, reliable, and everywhere you need us.  Our servers span the globe to
                keep
                your websites and apps running smoothly with minimal latency and maximum uptime.</p>
            <img src="assets/img/home/map (2).png" alt="" class="img-fluid mt-3">
        </div>
    </section>


    <!-- TESTIMONIALS -->
    <section class="testimonials global_padding text-align">
        <div class="container">
            <div class="heading">
                <h2 class="headline">WHAT OUR <span>CUSTOMERS</span> SAY</h2>
                <p class="para w-75 m-auto">Real feedback from customers who experienced our service. Honest reviews
                    and
                    consistent
                    quality
                    keep our clients coming back.</p>
            </div>

            <!-- Stats Bar -->
            <div class="stats-bar">
                <div class="stat">
                    <div>
                        <span class="big">4.9/5</span>
                        <small>Rating</small>
                    </div>
                    <div class="icon-wrap">
                        <img src="assets/img/home/star_filled.png" alt="">
                    </div>

                </div>

                <div class="stat">
                    <div>
                        <span class="big">2500+</span>
                        <small>Reviews</small>
                    </div>
                    <div class="icon-wrap">
                        <img src="assets/img/home/Layer_1.png" alt="">
                    </div>
                </div>

                <div class="stat">
                    <div>
                        <span class="big">99%</span>
                        <small>Satisfaction</small>
                    </div>
                    <div class="icon-wrap">
                        <img src="assets/img/home/Frame (1).png" alt="">
                    </div>

                </div>
            </div>

            <!-- Carousel -->
            <div style="position:relative;">
                <div class="owl-carousel owl-theme" id="testimonials-carousel">
                    <div class="testimonial-card">
                        <div>
                            <div class="testimonial-top">

                                <div>
                                    <div class="cust-name">SOLOMON MAVERICK</div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/home/fg.png" alt="">
                                </div>
                            </div>
                            <hr>
                            <div class="review-text">Amazing experience! The team was professional and the quality
                                exceeded
                                expectations. Highly recommend.</div>
                        </div>
                        <!-- <div class="card-footer">
                            <div class="google-badge"><i class="fa-brands fa-google"></i> Google Review</div>
                            <div style="font-size:12px;color:#6b7a90;">Aug 12, 2025</div>
                        </div> -->
                    </div>

                </div>

                <div class="owl-nav custom-nav" style="position:absolute; top:6px; left:0; right:0;">
                    <button class="custom-nav-btn" id="prevBtn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="custom-nav-btn" id="nextBtn">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <!-- FAQ Section -->
    <section class="faq-wrap global_padding">
        <div class="container">
            <div class="faq-header">
                <h3 class="headline text-center mb-4">FREQUENTLY ASKED QUESTIONS</h3>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="faq-item mb-2">
                        <button class="faq-question btn btn-link w-100 text-start">
                            What is your return policy? <span class="toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            We accept returns within 30 days of purchase. Items must be in original condition.
                            Refunds are processed within 7 business days.
                        </div>
                    </div>

                    <div class="faq-item mb-2">
                        <button class="faq-question btn btn-link w-100 text-start">
                            Do you ship internationally? <span class="toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            Yes — we ship to many countries worldwide. Shipping costs and delivery times vary by
                            destination.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-item mb-2">
                        <button class="faq-question btn btn-link w-100 text-start">
                            How long does shipping take? <span class="toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            Standard shipping usually takes 5-10 business days depending on your location.
                        </div>
                    </div>

                    <div class="faq-item mb-2">
                        <button class="faq-question btn btn-link w-100 text-start">
                            Can I track my order? <span class="toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            Yes, once your order ships, you will receive a tracking number by email.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php include 'subpages/footer.php'; ?>
