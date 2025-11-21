import "./bootstrap";
import "./script";

document.addEventListener("DOMContentLoaded", function () {
    const toasts = document.querySelectorAll("[data-toast]");

    toasts.forEach((toast) => {
        setTimeout(() => {
            toast.classList.remove("opacity-0", "translate-y-4");
            toast.classList.add("opacity-100", "translate-y-0");
        }, 100);

        setTimeout(() => {
            toast.classList.remove("opacity-100", "translate-y-0");
            toast.classList.add("opacity-0", "translate-y-4");

            setTimeout(() => toast.remove(), 300);
        }, 3500);
    });
});
