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
  const navLinks = document.querySelectorAll("#header a, #sidenav a");

  // Iterate over each section
  sections.forEach((section) => {
    const sectionId = section.getAttribute("id");
    const navLink = document.querySelector(`a[href="#${sectionId}"]`);

    // Check if the section is in the viewport
    if (isInViewport(section)) {
      // Add the "selected" class to the corresponding navigation link
      navLink.classList.add("selected");
    } else {
      // Remove the "selected" class from other navigation links
      navLink.classList.remove("selected");
    }
  });
}

// Attach the setActiveLink function to the scroll event
window.addEventListener("scroll", setActiveLink);

// Function to calculate the easing value based on time
function easeInOutQuad(t) {
  return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
}

// Smooth scrolling function with custom easing
function smoothScroll(target) {
  const targetSection = document.querySelector(target);

  if (targetSection) {
    const targetOffset = targetSection.offsetTop - 50;
    const duration = 1000; // Duration in milliseconds
    const startTime = performance.now();

    function scroll() {
      const elapsed = performance.now() - startTime;
      const progress = easeInOutQuad(Math.min(elapsed / duration, 1));
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

// Get all the navigation links inside the side navigation menu
const sideNavLinks = document.querySelectorAll("#sidenav a");

// Save the original text of each link
sideNavLinks.forEach(link => {
  link.dataset.originalText = link.textContent;
});

// When mouse enters the side navigation menu
document.querySelector("#sidenav").addEventListener("mouseenter", () => {
  sideNavLinks.forEach(link => {
    link.textContent = link.dataset.originalText;  // Restore the original text
    link.style.transition = "transform 0.1s cubic-bezier(0.25, 0.46, 0.75, 0.94)"; // Add the transition with a faster and more non-linear easing
  });
});

// When mouse leaves the side navigation menu
document.querySelector("#sidenav").addEventListener("mouseleave", () => {
  sideNavLinks.forEach(link => {
    link.textContent = link.dataset.originalText.charAt(0);  // Only display the first letter
    link.style.transition = "transform 0.1s cubic-bezier(0.25, 0.46, 0.75, 0.94)"; // Add the transition with a faster and more non-linear easing
  });
});

