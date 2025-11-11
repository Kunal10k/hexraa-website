<?php include 'subpages/header.php'; ?>

<section class="hosting-sections_page global_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hosting_inner_section">
                    <h6 class="inner_subheadline">Up to 67% Off Web Hosting</h6>
                    <h2 class="inner_headline_hsoting">Best Hosting For Students</h2>
                    <p>Start, Grow, and Expand Smartly !</p>
                    <div class="hosting_flex">
                        <div class="histing_flex_items">
                            <ul>
                                <li> <img src="assets/img/hosting/tabler_checkbox.png" width="20" alt="">1GB SSD Disk
                                </li>
                                <li> <img src="assets/img/hosting/tabler_checkbox.png" width="20" alt="">Email Accounts
                                </li>
                            </ul>
                            <ul>
                                <li> <img src="assets/img/hosting/tabler_checkbox.png" width="20" alt="">10GB Bandwidth
                                </li>
                                <li> <img src="assets/img/hosting/tabler_checkbox.png" width="20" alt="">Control Panel
                                    cPanel</li>
                            </ul>
                        </div>
                    </div>

                    <a href="#" class="view_all_palans">VIEW PLANE <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="hosting_inner_section">
                    <img src="assets/img/hosting/inner_abt.png" alt="" class="img-fluid inner_img">
                    <h6>Deal Ends In</h6>
                    <div class="count_inner">
                        <div class="count_flex">
                            <div class="box">
                                <div class="days numbers">00</div>
                                <span>Days</span>
                            </div>
                            :
                            <div class="box">
                                <div class="hrs numbers">00</div>
                                <span>Hrs</span>
                            </div>
                            :
                            <div class="box">
                                <div class="mins numbers">00</div>
                                <span>Mins</span>
                            </div>
                            :
                            <div class="box">
                                <div class="secs numbers">00</div>
                                <span>Secs</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<section class="student_web_hosting global_padding">
    <div class="container">
        <h2 class="headline text-center pb-0">Student Web Hosting</h2>
        <h4 class="student_sub pb-0">We empower the student community to build their blog or website</h4>
        <p class="w-75 m-auto">
            Student Hosting is a initiative with the aid of using Hexraa to empower the Students fraternity to have
            their personal blog / personal / portfolio website. During their commencement we need college students to
            analyze and sharpen their internet development, internet design, and virtual advertising capabilities that
            is a lot wanted on this aggressive world.
        </p>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="student_web_wrapper">
                    <img src="assets/img/hosting/1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="student_web_wrapper shadws">
                    <div class="student_planed">
                        <div class="price_tract mt-4 mb-3">
                            <div class="rate">
                                <h2>Student Plan</h2>
                                <p>Affordable hosting solution for college projects and learning.</p>
                            </div>
                            <div class="price_box">
                                <div class="price">
                                    <h6>$8 <span>/year</span></h6>

                                </div>
                                <div class="discount">
                                    $12
                                    <div class="save"><i class="fa-solid fa-tag"></i> save 93%</div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="student_buy_now shadow">Buy Now</a>

                        <label for="">Whats Included</label>

                        <div class="benefits_Student_flex">
                            <div class="student_items">
                                <ul>
                                    <li><i class="fa-solid fa-globe"></i> 1 Host Domain</li>
                                    <li><i class="fa-solid fa-envelope"></i> 2 Email Accounts</li>
                                    <li><i class="fa-solid fa-hard-drive"></i> 2GB SSD Disk Space</li>
                                </ul>
                                <ul>
                                    <li><i class="fa-solid fa-infinity"></i> Unlimited Bandwidth</li>
                                    <li><i class="fa-solid fa-code"></i> PHP 7.x, 8.x, Softaculous</li>
                                    <li><i class="fa-solid fa-gauge-high"></i> cPanel Control Panel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        // LocalStorage-based 48 hour countdown
        let targetDate = localStorage.getItem("targetDate");
        if (!targetDate) {
            targetDate = new Date().getTime() + (48 * 60 * 60 * 1000);
            localStorage.setItem("targetDate", targetDate);
        } else {
            targetDate = parseInt(targetDate); // convert to number
        }

        const daysEl = document.querySelector(".days");
        const hrsEl = document.querySelector(".hrs");
        const minsEl = document.querySelector(".mins");
        const secsEl = document.querySelector(".secs");

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance <= 0) {
                clearInterval(timer);
                localStorage.removeItem("targetDate");
                daysEl.textContent = "00";
                hrsEl.textContent = "00";
                minsEl.textContent = "00";
                secsEl.textContent = "00";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const secs = Math.floor((distance % (1000 * 60)) / 1000);

            daysEl.textContent = String(days).padStart(2, "0");
            hrsEl.textContent = String(hours).padStart(2, "0");
            minsEl.textContent = String(mins).padStart(2, "0");
            secsEl.textContent = String(secs).padStart(2, "0");
        }

        updateCountdown();
        const timer = setInterval(updateCountdown, 1000);
    });
</script>


<?php include 'subpages/footer.php'; ?>