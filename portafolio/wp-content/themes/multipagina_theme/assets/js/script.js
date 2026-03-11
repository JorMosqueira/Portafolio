  // Obtén el elemento que quieres animar
  var logo = document.querySelector('.navbar-brand img');

  // Escucha el evento de scroll
  window.addEventListener('scroll', function() {
    // Verifica la posición de scroll
    if (window.scrollY > 100) {
      // Cuando el scroll sea mayor a 100px, agrega la clase 'scrolled'
      document.body.classList.add('scrolled');
    } else {
      // Si no, quita la clase 'scrolled'
      document.body.classList.remove('scrolled');
    }
  });




