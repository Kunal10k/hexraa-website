// ===== Countdown Timer =====
const countdown = document.getElementById("countdown");
const parts = countdown.querySelectorAll("span b");

// Save countdown in localStorage so it doesn’t reset on refresh
let targetDate = localStorage.getItem("targetDate");
if (!targetDate) {
    targetDate = new Date().getTime() + (48 * 60 * 60 * 1000); // 48 hours
    localStorage.setItem("targetDate", targetDate);
}

const timer = setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance <= 0) {
        clearInterval(timer);
        countdown.innerHTML = "<b>Expired</b>";
        localStorage.removeItem("targetDate");
        return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    parts[0].textContent = days.toString().padStart(2, '0');
    parts[1].textContent = hours.toString().padStart(2, '0');
    parts[2].textContent = minutes.toString().padStart(2, '0');
    parts[3].textContent = seconds.toString().padStart(2, '0');
}, 1000);

// ****************** perfect planed *********** 

const monthlyBtn = document.getElementById("monthly");
const yearlyBtn = document.getElementById("yearly");

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

monthlyBtn.addEventListener("click", () => {
    monthlyBtn.classList.add("active");
    yearlyBtn.classList.remove("active");
    document.getElementById("price1").innerHTML = prices.monthly.plan1;
    document.getElementById("price2").innerHTML = prices.monthly.plan2;
    document.getElementById("price3").innerHTML = prices.monthly.plan3;
});

yearlyBtn.addEventListener("click", () => {
    yearlyBtn.classList.add("active");
    monthlyBtn.classList.remove("active");
    document.getElementById("price1").innerHTML = prices.yearly.plan1;
    document.getElementById("price2").innerHTML = prices.yearly.plan2;
    document.getElementById("price3").innerHTML = prices.yearly.plan3;
});





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