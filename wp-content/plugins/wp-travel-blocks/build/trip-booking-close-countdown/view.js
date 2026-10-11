/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************************!*\
  !*** ./src/trip-booking-close-countdown/view.js ***!
  \**************************************************/
const bookingCountdown = document.querySelector(".booking-countdown");
if (bookingCountdown) {
  const closeDateStr = bookingCountdown.getAttribute("data-date");
  const closeDate = new Date(closeDateStr);
  function updateBookingCountdown() {
    const now = new Date().getTime();
    const distance = closeDate - now;
    if (distance < 0) {
      const countdownEl = document.querySelector(".wptravel-booking-countdown");
      if (countdownEl) countdownEl.style.display = "none";
      return;
    }
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    const minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
    const seconds = Math.floor(distance % (1000 * 60) / 1000);
    document.getElementById("booking-days").textContent = days.toString().padStart(2, "0");
    document.getElementById("booking-hours").textContent = hours.toString().padStart(2, "0");
    document.getElementById("booking-minutes").textContent = minutes.toString().padStart(2, "0");
    document.getElementById("booking-seconds").textContent = seconds.toString().padStart(2, "0");
  }
  setInterval(updateBookingCountdown, 1000);
  updateBookingCountdown();
}
/******/ })()
;
//# sourceMappingURL=view.js.map