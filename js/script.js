document.addEventListener('DOMContentLoaded', function(){
  console.log('Site JS loaded');
  // Simple slider for hero images (if present)
  const slides = document.querySelectorAll('.hero-slider .slide');
  if (slides.length > 0) {
    let idx = 0;
    setInterval(() => {
      slides.forEach((s,i)=> s.style.display = (i===idx ? 'block' : 'none'));
      idx = (idx + 1) % slides.length;
    }, 3500);
  }
});