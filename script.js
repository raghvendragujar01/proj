// Validate the form inputs
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var phone = document.getElementById('phone').value.trim();
  
    if (name === '' || email === '' || phone === '') {
      event.preventDefault();
      alert('Please fill in all fields.');
    }
  });
  