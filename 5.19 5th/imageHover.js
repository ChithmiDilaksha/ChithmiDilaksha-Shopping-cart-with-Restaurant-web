// Get all menu item images
const menuImages = document.querySelectorAll('.menu-item img');

// Loop through each menu item image
menuImages.forEach(image => {
  // Get the parent menu item
  const menuItem = image.parentNode;

  // Add event listeners for hover effect to each menu item
  menuItem.addEventListener('mouseenter', () => {
    image.style.transform = 'scale(1.1)'; // Increase scale on hover
  });

  menuItem.addEventListener('mouseleave', () => {
    image.style.transform = 'scale(1)'; // Reset scale on mouse leave
  });
});
