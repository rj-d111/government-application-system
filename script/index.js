function adjustImageClass() {
  const imgElements = document.querySelectorAll(".bg-img-1"); // Get all images within divs

  // Check screen width
  const screenWidth = window.innerWidth;

  for (const img of imgElements) {
    if (screenWidth < 768) {
      // Add "img-fluid" class if screen is less than 768px
      img.classList.add("img-fluid");
    } else {
      // Remove "img-fluid" class if screen is 768px or larger
      img.classList.remove("img-fluid");
    }
  }
}

// Call the function initially on page load
adjustImageClass();

// Call the function again on window resize to dynamically adapt
window.addEventListener("resize", adjustImageClass);