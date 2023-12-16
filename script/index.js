function adjustImageClass() {

  const imgElements = document.querySelectorAll(".bg-img-1"); // Get all images within divs
  const imgIds = document.querySelectorAll("#id-types .col-sm-6");
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

  for(const imgId of imgIds){
    if(screenWidth > 1024){
      imgId.classList.add("p-4");
    }else{
      imgId.classList.remove("p-4");
    }
  }
  
}


// Call the function initially on page load
adjustImageClass();

// Call the function again on window resize to dynamically adapt
window.addEventListener("resize", adjustImageClass);




goToLink('#section-4', 'a[href="#section-4"]', 'navbar-all');
goToLink('#section-3', 'a[href="#section-3"]', 'navbar-all');
goToLink('#id-types', 'a[href="#id-types"]', 'navbar-all');
goToLink('#section-1', 'a[href="#section-1"]', 'navbar-all');

  function goToLink(section1, link1, navbarAll1){
     const section =  document.querySelector(section1);
     const link = document.querySelector(link1);
     const navbarAll  = document.getElementById(navbarAll1).offsetHeight;

     link.addEventListener('click', (event) => {
     event.preventDefault(); // prevent default scrolling
     const linkTop = section.getBoundingClientRect().y;
     const scrolling = window.scrollY + linkTop -navbarAll;
     window.scrollTo({ top: scrolling, behavior: 'smooth' });
    });
  }