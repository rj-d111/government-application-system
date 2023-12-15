function adjustTitleFontSize() {
    const titleFont = document.querySelectorAll(".navbar-brand>h4"); // Get the title inside .navbar-brand
  
    // Check screen width
    const screenWidth = window.innerWidth;
  
    for (const img of titleFont) {
      if (screenWidth > 768) {
        // Add "fs-3" class if screen is less than 768px
        img.classList.add("fs-3");
      } else {
        // Remove "fs-3" class if screen is 768px or larger
        img.classList.remove("fs-3");
      }
    }

    const divTitle = document.querySelector(".container-md.d-flex.align-items-center.my-3.mx-auto.text-center");
    
    if(screenWidth < 768){
      divTitle.classList.add("d-none");
      //Add admin login
      
      
    }else{
      divTitle.classList.remove("d-none"); 
           //Add admin login
    }
  }
  
 
  // Call the function initially on page load
  adjustTitleFontSize();
  
  // Call the function again on window resize to dynamically adapt
  window.addEventListener("resize", adjustTitleFontSize);