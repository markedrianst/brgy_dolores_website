document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
        const target = +counter.dataset.target;
        const suffix = counter.dataset.suffix || "";
        const speed = 200;

        const updateCount = () => {
            const current = +counter.innerText.replace(/\D/g, '');
            const increment = Math.ceil(target / speed);

            if (current < target) {
                counter.innerText = current + increment;
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target.toLocaleString() + suffix;
            }
        };

        updateCount();
    });
});
