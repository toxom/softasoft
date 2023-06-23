// navigation.js

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
  const navLinks = document.querySelectorAll("#top-section a, #sidenav a");

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

// Add smooth scrolling effect to the navigation links
document.querySelectorAll("a[href^='#']").forEach((anchor) => {
  anchor.addEventListener("click", (e) => {
      e.preventDefault();

      const targetSectionId = anchor.getAttribute("href").slice(1);
      const targetSection = document.getElementById(targetSectionId);

      targetSection.scrollIntoView({
          behavior: "smooth",
      });
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
  });
});

// When mouse leaves the side navigation menu
document.querySelector("#sidenav").addEventListener("mouseleave", () => {
  sideNavLinks.forEach(link => {
      link.textContent = link.dataset.originalText.charAt(0);  // Only display the first letter
  });
});
