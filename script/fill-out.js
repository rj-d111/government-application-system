const idTypeSelect = document.getElementById('idType');
const requiredRemove = document.querySelector('#disability-proof #formFile');
const disabilityProofSection = document.getElementById('disability-proof');

console.log(requiredRemove);

// This function hides/shows the disability proof section based on the selected ID type
function updateDisabilityProofDisplay() {
  if (idTypeSelect.value === 'pwd') {
    disabilityProofSection.style.display = 'block'; // Show the section
    requiredRemove.setAttribute("required", "");
} else {
    disabilityProofSection.style.display = 'none'; // Hide the section
    requiredRemove.removeAttribute("required");
}
}

// Add event listener to the ID type selection change
idTypeSelect.addEventListener('change', updateDisabilityProofDisplay);

// Call the function initially to set the visibility based on the current selection
updateDisabilityProofDisplay();