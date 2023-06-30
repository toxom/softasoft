// Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

// Function to add the "selected" class to the active navigation link
function setActiveLink() {
  // Get all the section elements
  const sections = document.querySelectorAll("section");

  // Get all the navigation links
  const navLinks = document.querySelectorAll("#header a, #sidenav a, #toolnav a");

  // Remove the "selected" class from all navigation links
  navLinks.forEach((navLink) => {
    navLink.classList.remove("selected");
  });

  // Iterate over each section
  sections.forEach((section) => {
    const sectionId = section.getAttribute("id");
    const navLink = document.querySelector(`a[href="#${sectionId}"]`);

    // Check if the section is in the viewport
    if (isInViewport(section)) {
      // Add the "selected" class to the corresponding navigation link
      navLink.classList.add("selected");
    }
  });
}

// Attach the setActiveLink function to the scroll event
window.addEventListener("scroll", setActiveLink);

// Smooth scrolling function with custom easing
function smoothScroll(target) {
  const targetSection = document.querySelector(target);

  if (targetSection) {
    const targetOffset = targetSection.offsetTop - 50;
    const duration = 1000; // Duration in milliseconds
    const startTime = performance.now();

    function scroll() {
      const elapsed = performance.now() - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const currentPosition = scrollTop + progress * (targetOffset - scrollTop);

      window.scrollTo(0, currentPosition);

      if (elapsed < duration) {
        requestAnimationFrame(scroll);
      }
    }

    requestAnimationFrame(scroll);
  }
}

// Add smooth scrolling effect to the navigation links
document.querySelectorAll('#header a, #sidenav a').forEach((anchor) => {
  anchor.addEventListener('click', (e) => {
    const targetHref = anchor.getAttribute('href');

    if (targetHref.startsWith('#')) {
      e.preventDefault();
      smoothScroll(targetHref);
    }
  });
});

// Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

// Function to add the "selected" class to the active navigation link
function setActiveLink() {
  // Get all the section elements
  const sections = document.querySelectorAll("section");

  // Get all the navigation links
  const navLinks = document.querySelectorAll("#header a, #sidenav a, #toolnav a");

  // Remove the "selected" class from all navigation links
  navLinks.forEach((navLink) => {
    navLink.classList.remove("selected");
  });

  // Iterate over each section
  sections.forEach((section) => {
    const sectionId = section.getAttribute("id");
    const navLink = document.querySelector(`a[href="#${sectionId}"]`);

    // Check if the section is in the viewport
    if (isInViewport(section)) {
      // Add the "selected" class to the corresponding navigation link
      navLink.classList.add("selected");
    }
  });
}

// Attach the setActiveLink function to the scroll event
window.addEventListener("scroll", setActiveLink);

// Smooth scrolling function with custom easing
function smoothScroll(target) {
  const targetSection = document.querySelector(target);

  if (targetSection) {
    const targetOffset = targetSection.offsetTop - 50;
    const duration = 1000; // Duration in milliseconds
    const startTime = performance.now();

    function scroll() {
      const elapsed = performance.now() - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const currentPosition = scrollTop + progress * (targetOffset - scrollTop);

      window.scrollTo(0, currentPosition);

      if (elapsed < duration) {
        requestAnimationFrame(scroll);
      }
    }

    requestAnimationFrame(scroll);
  }
}

// Add smooth scrolling effect to the navigation links
document.querySelectorAll('#header a, #sidenav a').forEach((anchor) => {
  anchor.addEventListener('click', (e) => {
    const targetHref = anchor.getAttribute('href');

    if (targetHref.startsWith('#')) {
      e.preventDefault();
      smoothScroll(targetHref);
    }
  });
});

// Get the sidenav element
const sidenavElement = document.querySelector("#sidenav");

// Function to open the side navigation
function openSideNav() {
  sidenavElement.classList.add("open");
}

// Function to close the side navigation
function closeSideNav() {
  sidenavElement.classList.remove("open");
}

// Attach event listener to the "Already have an account? Sign In" button
const signInButton = document.getElementById("signInButton");
signInButton.addEventListener("click", openSideNav);

// Close the side navigation when mouse leaves the sidenav area
sidenavElement.addEventListener("mouseleave", closeSideNav);

function toggleLoginContainer() {
  const loginContainers = document.querySelectorAll(".login-container");
  loginContainers.forEach((loginContainer) => {
    loginContainer.classList.toggle("hidden");
  });

  const loginSection = document.getElementById("login");
  loginSection.classList.toggle("hidden"); // Add this line to toggle the visibility of the login section
}

