// script.js
document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevents the default form submission behavior

    // Get form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    // Send data to the server
    fetch('/submit', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name, email }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Response from server:', data);
        alert('Form submitted successfully!');
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while submitting the form.');
    });
});
