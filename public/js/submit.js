// JavaScript to show the submit button after a timer runs out
const countdownElement = document.getElementById("countdown");
const submitContainer = document.getElementById("submitContainer");
const submitButton = document.getElementById("myButton");

// Set the initial countdown value in seconds
let countdownValue = 60;

function updateCountdown() {
    countdownValue--;

    if (countdownValue >= 0) {
        countdownElement.textContent = countdownValue;
        setTimeout(updateCountdown, 1000); // Update every 1 second
    } else {
        // Timer has run out, show the submit button
        submitContainer.style.display = "block";
    }
}

// Start the countdown when the page loads
updateCountdown();
