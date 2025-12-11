function animateCounters() {
    let duration = 15000; 
    let counters = document.querySelectorAll('[data-value]');

    counters.forEach(counter => {
        let target = parseInt(counter.getAttribute('data-value'));
        let start = 0;

        let step = target / (duration / 16.66);

        function updateCounter() {
            start += step;

            if (start < target) {
                counter.textContent = Math.floor(start);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        }

        requestAnimationFrame(updateCounter);
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const section = document.getElementById("stats");

    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            animateCounters();
            observer.disconnect();
        }
    });

    observer.observe(section);
});
