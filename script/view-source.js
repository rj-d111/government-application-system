const disabilityProofSection = document.getElementById('disability-proof');
const idType = document.getElementById('idType');

console.log(idType);

// This function hides/shows the disability proof section based on the selected ID type
function updateDisabilityProofDisplay() {
  if (idType.value == 'pwd') {
    disabilityProofSection.style.display = 'block'; // Show the section
} else {
    disabilityProofSection.style.display = 'none'; // Hide the section
}
}

// Add event listener to the ID type selection change
idType.addEventListener('change', updateDisabilityProofDisplay);

// Call the function initially to set the visibility based on the current selection
updateDisabilityProofDisplay();