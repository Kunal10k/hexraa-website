/* ======================================================================
   7. SECOND COUNTDOWN (ANOTHER VERSION WITH CLASS SELECTORS)
====================================================================== */

function startCountdown() {

    // Get 48-hour countdown from localStorage
    let targetDate = localStorage.getItem("targetDate");

    if (!targetDate) {
        targetDate = new Date().getTime() + (48 * 60 * 60 * 1000);
        localStorage.setItem("targetDate", targetDate);
    } else {
        targetDate = parseInt(targetDate);
    }

    const daysEl = document.querySelector(".days");
    const hrsEl = document.querySelector(".hrs");
    const minsEl = document.querySelector(".mins");
    const secsEl = document.querySelector(".secs");

    if (!daysEl || !hrsEl || !minsEl || !secsEl) {
        console.warn("Countdown elements missing!");
        return;
    }

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
}

// Run when DOM is ready
document.addEventListener("DOMContentLoaded", startCountdown);





document.addEventListener("DOMContentLoaded", function () {

    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const toggleIcon = item.querySelector('.toggle');

        question.addEventListener('click', () => {

            faqItems.forEach(f => {
                const fToggle = f.querySelector('.toggle');
                if (f !== item) {
                    f.classList.remove('open');
                    fToggle.textContent = '+';
                }
            });

            item.classList.toggle('open');

            toggleIcon.textContent = item.classList.contains('open') ? '+' : '+';
        });
    });

});






