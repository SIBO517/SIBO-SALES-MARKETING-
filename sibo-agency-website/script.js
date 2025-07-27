document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("Thank you for contacting SIBO AGENCY. We'll get back to you shortly!");
  this.reset();
});
