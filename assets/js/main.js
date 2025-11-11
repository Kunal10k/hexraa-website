const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minutesEl = document.getElementById("minutes");
const secondsEl = document.getElementById("seconds");

// Save countdown target in localStorage so it doesn’t reset on refresh
let targetDate = localStorage.getItem("targetDate");
if (!targetDate) {
    targetDate = new Date().getTime() + (48 * 60 * 60 * 1000); // 48 hours from now
    localStorage.setItem("targetDate", targetDate);
}

const timer = setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance <= 0) {
        clearInterval(timer);
        document.getElementById("countdown").innerHTML = "<b>Expired</b>";
        localStorage.removeItem("targetDate");
        return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    daysEl.textContent = days.toString().padStart(2, '0');
    hoursEl.textContent = hours.toString().padStart(2, '0');
    minutesEl.textContent = minutes.toString().padStart(2, '0');
    secondsEl.textContent = seconds.toString().padStart(2, '0');
}, 1000);


// ****************** perfect planed *********** 

const monthlyBtn = document.getElementById("monthly");
const yearlyBtn = document.getElementById("yearly");
const switchToggle = document.getElementById("switchToggle");

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

// Handle monthly button click
monthlyBtn.addEventListener("click", () => {
    monthlyBtn.classList.add("active");
    yearlyBtn.classList.remove("active");
    switchToggle.classList.remove("active");
    updatePrices("monthly");
});

// Handle yearly button click
yearlyBtn.addEventListener("click", () => {
    yearlyBtn.classList.add("active");
    monthlyBtn.classList.remove("active");
    switchToggle.classList.add("active");
    updatePrices("yearly");
});

// Handle toggle switch click
switchToggle.addEventListener("click", () => {
    switchToggle.classList.toggle("active");
    const isYearly = switchToggle.classList.contains("active");
    yearlyBtn.classList.toggle("active", isYearly);
    monthlyBtn.classList.toggle("active", !isYearly);
    updatePrices(isYearly ? "yearly" : "monthly");
});

function updatePrices(type) {
    document.getElementById("price1").textContent = prices[type].plan1;
    document.getElementById("price2").textContent = prices[type].plan2;
    document.getElementById("price3").textContent = prices[type].plan3;
}






$(document).ready(function () {
    $(".trusted-carousel").owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsiveClass: true,
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







$(document).ready(function () {
    var $owl = $('#testimonials-carousel');
    $owl.owlCarousel({
        loop: true,
        margin: 18,
        nav: false,
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
    $('#prevBtn').click(function () {
        $owl.trigger('prev.owl.carousel');
    });
    $('#nextBtn').click(function () {
        $owl.trigger('next.owl.carousel');
    });
});

// FAQ toggle (only one open)
const faqs = document.querySelectorAll('.faq-item');
faqs.forEach(faq => {
    const btn = faq.querySelector('.faq-question');
    btn.addEventListener('click', () => {
        faqs.forEach(f => {
            if (f !== faq) f.classList.remove('open');
        });
        faq.classList.toggle('open');
    });
});










$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').addClass('show');
    } else {
        $('.back-to-top').removeClass('show');
    }
});

$('.back-to-top').click(function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 600);
});

