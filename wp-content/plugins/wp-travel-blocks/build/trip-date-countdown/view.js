/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./src/trip-date-countdown/view.js ***!
  \*****************************************/
const countdown = document.querySelector(".tour-date-countdown");
const launchDateStr = countdown.getAttribute("data-date");
const launchDate = new Date(launchDateStr + "T00:00:00");
function updateCountdown() {
  const now = new Date().getTime();
  const distance = launchDate - now;
  if (distance < 0) {
    const countdownEl = document.querySelector(".wptravel-tour-date-countdown");
    if (countdownEl) {
      countdownEl.style.display = "none";
    }
    return;
  }
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
  const minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
  const seconds = Math.floor(distance % (1000 * 60) / 1000);
  document.getElementById("days").textContent = days.toString().padStart(2, "0");
  document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
  document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
  document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
}
setInterval(updateCountdown, 1000);
updateCountdown();
/******/ })()
;
//# sourceMappingURL=view.js.map