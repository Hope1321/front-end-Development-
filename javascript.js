document.addEventListener("DOMContentLoaded", function () {
  // Display an alert when a button is clicked
  const buttons = document.querySelectorAll("button");
  buttons.forEach((button) => {
    button.addEventListener("click", function () {
      alert("Button clicked!");
    });
  });

  // Form validation and submission
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (event) {
      event.preventDefault();

      // Validate form inputs
      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const message = document.getElementById("message").value.trim();

      if (validateForm(name, email, message)) {
        alert("Thank you for contacting us! Your message has been sent.");
        contactForm.reset();
      }
    });

    function validateForm(name, email, message) {
      if (name === "" || email === "" || message === "") {
        alert("All fields are required.");
        return false;
      }

      if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
      }

      return true;
    }

    function validateEmail(email) {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailPattern.test(email);
    }
  }

  // Back-to-top button functionality
  const backToTopButton = document.createElement("button");
  backToTopButton.innerText = "Back to Top";
  backToTopButton.classList.add("back-to-top");
  document.body.appendChild(backToTopButton);

  window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
      backToTopButton.style.display = "block";
    } else {
      backToTopButton.style.display = "none";
    }
  });

  backToTopButton.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});
