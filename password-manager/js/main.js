
/*
 *~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*#
 #                                                                #
 #          Modalità notturna                                     #
 #                                                                #
 #~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*#
*/

$(document).ready(function() {
    // Seleziona il pulsante toggle
    var darkModeToggle = $('#dark-mode-toggle');

    // evento di click al pulsante toggle
    darkModeToggle.on('click', function() {
      // Seleziona il body della pagina
      var body = $('body');
      // Verifica se il body ha la classe .dark-mode
      if (body.hasClass('dark-mode')) {
        // Se sì, rimuovi la classe .dark-mode
        body.removeClass('dark-mode');
        // Aggiorna il testo del pulsante toggle
        /*  darkModeToggle.text('Modalità scura'); */
        // Memorizza la modalità scura nel local storage
        localStorage.setItem('dark-mode', 'off');
        /*     $('.color').css('background-color', '#f5f5f5'); */
        $('.color').css({
          'color': 'black',
          'background-color': '#f5f5f5'
        });
      } else {
        body.addClass('dark-mode');
        // Aggiorna il testo del pulsante toggle
        /*  darkModeToggle.text('Modalità chiara'); */
        // Memorizza la modalità scura nel local storage
        localStorage.setItem('dark-mode', 'on');
        /*  $('.color').css('background-color', '#333'); */
        $('.color').css({
          'color': 'white',
          'background-color': '#333'
        });
      }
    });

    // Verifica se la modalità scura è memorizzata nel local storage
    if (localStorage.getItem('dark-mode') === 'on') {
      // Aggiungi la classe .dark-mode al body
      $('body').addClass('dark-mode');
      // Aggiorna il testo del pulsante toggle
      /*  $('#dark-mode-toggle').text('Modalità chiara'); */
    }


    
    $(document).on("mousemove", function(event) {
        setTimeout(function() {
          $(".cursor").css({
            "top": event.pageY -10+ "px",
            "left": event.pageX -10 + "px"
          });
        }, 50);
    });
    
    
    $(window).scroll(function() {
        var scrollPosition = $(this).scrollTop();
        if (scrollPosition > 100) {
          $('#navbar').addClass('navbar-smaller');
          $('.navbar-brand').css('margin', '0px');
        } else {
          $('#navbar').removeClass('navbar-smaller');
          $('.navbar-brand').css('margin', '11px');
        }
      });

});


/*=================================================================
 Javascript Vanilla per le card
===================================================================  */

let slideIndex = 0;
const slides = document.querySelectorAll('.card-group1');
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

// Nascondi tutte le card tranne la prima
for (let i = 1; i < slides.length; i++) {
  slides[i].style.display = 'none';
}

// Funzione per passare alla slide successiva
function nextSlide() {
  slides[slideIndex].style.display = 'none';
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  slides[slideIndex].style.display = 'flex';
}

// Funzione per passare alla slide precedente
function prevSlide() {
  slides[slideIndex].style.display = 'none';
  slideIndex--;
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  slides[slideIndex].style.display = 'flex';
}

// Aggiungi eventi ai pulsanti per lo scorrimento
nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

  





