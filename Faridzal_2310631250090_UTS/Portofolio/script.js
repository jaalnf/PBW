function sendMessage(event) {
    event.preventDefault(); 
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    
    const phoneNumber = '6285155264400'; 
    const whatsappMessage = `Name: ${name}\nEmail: ${email}\nMessage: ${message}`;
    const whatsappURL = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(whatsappMessage)}`;

  
    window.open(whatsappURL, '_blank');
  }

  function scrollToHome() {
    const homeSection = document.getElementById('home');
    homeSection.scrollIntoView({ behavior: 'smooth' }); // Menggulir ke section home dengan efek halus
  }