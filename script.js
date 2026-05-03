document.addEventListener("DOMContentLoaded", () => {
    const dateElement = document.getElementById("current-date");

    if (dateElement) {
        const now = new Date();
        const formattedDate = now.toLocaleDateString("en-US", {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
        });

        dateElement.innerHTML = `<i class="far fa-calendar-alt"></i> ${formattedDate}`;
    }
});
