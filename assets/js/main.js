/* ======================================================================
   1. COUNTDOWN TIMER (48 HOURS) – SAVED IN LOCALSTORAGE
   ====================================================================== */

// Select timer display elements
const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minutesEl = document.getElementById("minutes");
const secondsEl = document.getElementById("seconds");

// Get target date from localStorage so timer doesn’t reset on page refresh
let targetDate = localStorage.getItem("targetDate");

// If no saved target date → set new 48-hour countdown
if (!targetDate) {
    targetDate = new Date().getTime() + (48 * 60 * 60 * 1000); // 48 hours added
    localStorage.setItem("targetDate", targetDate);
}

const timer = setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    // If countdown expires
    if (distance <= 0) {
        clearInterval(timer);
        document.getElementById("countdown").innerHTML = "<b>Expired</b>";
        localStorage.removeItem("targetDate"); // Reset on next visit
        return;
    }

    // Time calculations
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Update UI
    daysEl.textContent = days.toString().padStart(2, '0');
    hoursEl.textContent = hours.toString().padStart(2, '0');
    minutesEl.textContent = minutes.toString().padStart(2, '0');
    secondsEl.textContent = seconds.toString().padStart(2, '0');
}, 1000);



/* ======================================================================
   2. PRICING TOGGLE (MONTHLY / YEARLY PLAN SWITCH)
   ====================================================================== */

const monthlyBtn = document.getElementById("monthly");
const yearlyBtn = document.getElementById("yearly");
const switchToggle = document.getElementById("switchToggle");

// Pricing data for both modes
const prices = {
    monthly: {
        plan1: "$0.35/month",
        plan2: "$10/month",
        plan3: "$6.36/month",
    },
    yearly: {
        plan1: "$4/year",
        plan2: "$8/year",
        plan3: "$60/year",
    },
};

// Monthly Button Handler
monthlyBtn.addEventListener("click", () => {
    monthlyBtn.classList.add("active");
    yearlyBtn.classList.remove("active");
    switchToggle.classList.remove("active");
    updatePrices("monthly");
});

// Yearly Button Handler
yearlyBtn.addEventListener("click", () => {
    yearlyBtn.classList.add("active");
    monthlyBtn.classList.remove("active");
    switchToggle.classList.add("active");
    updatePrices("yearly");
});

// Switch Toggle Click Handler
switchToggle.addEventListener("click", () => {
    switchToggle.classList.toggle("active");
    const isYearly = switchToggle.classList.contains("active");

    yearlyBtn.classList.toggle("active", isYearly);
    monthlyBtn.classList.toggle("active", !isYearly);

    updatePrices(isYearly ? "yearly" : "monthly");
});

// Update price values in DOM
function updatePrices(type) {
    document.getElementById("price1").textContent = prices[type].plan1;
    document.getElementById("price2").textContent = prices[type].plan2;
    document.getElementById("price3").textContent = prices[type].plan3;
}



/* ======================================================================
   3. TRUSTED CAROUSEL (Owl Carousel)
   ====================================================================== */

$(document).ready(function () {
    $(".trusted-carousel").owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    });
});



/* ======================================================================
   4. TESTIMONIALS CAROUSEL (Owl Carousel + Custom Navigation)
   ====================================================================== */

$(document).ready(function () {
    const $owl = $('#testimonials-carousel');

    $owl.owlCarousel({
        loop: true,
        margin: 18,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            700: {
                items: 2
            },
            1100: {
                items: 3
            }
        }
    });

    // Custom Prev/Next Buttons
    $('#prevBtn').click(() => $owl.trigger('prev.owl.carousel'));
    $('#nextBtn').click(() => $owl.trigger('next.owl.carousel'));
});







/* ======================================================================
   6. BACK TO TOP BUTTON
   ====================================================================== */

// Show button after scrolling 300px
$(window).scroll(function () {
    $(this).scrollTop() > 300 ?
        $('.back-to-top').addClass('show') :
        $('.back-to-top').removeClass('show');
});

// Smooth scroll to top
$('.back-to-top').click(function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 600);
});




// ************* 
