document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('nav ul li a');
    const buttons = document.querySelectorAll('button');

    // Hover effect for navigation links
    navLinks.forEach(link => {
        link.addEventListener('mouseover', () => {
            link.style.color = '#45a049'; // Change color on hover
        });
        link.addEventListener('mouseout', () => {
            link.style.color = 'white'; // Revert color
        });
    });

    // Hover effect for buttons
    buttons.forEach(button => {
        button.addEventListener('mouseover', () => {
            button.style.backgroundColor = '#45a049'; // Change background on hover
        });
        button.addEventListener('mouseout', () => {
            button.style.backgroundColor = '#2a28'; // Revert background
        });
    });
});
