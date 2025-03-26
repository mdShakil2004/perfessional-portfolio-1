document.getElementById('main_contact_form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
  
    // Log the form data
    const formData = new FormData(this);
    for (let [key, value] of formData.entries()) {
      
    }
  
    // Send the form data using EmailJS
    emailjs.sendForm('service_key', 'template_key', this)
      .then(function(response) {
        document.getElementById('main_contact_form').reset();
        alert('Message sent successfully!');
        document.getElementById('contact-form').reset(); // Clear the form
      }, function(error) {
        alert('Failed to send message. Please try again.');
      });
  });
  