
<div class="cursor">
</div>

<footer >

  <div class=" cont-fut d-flex justify-content-between flex-wrap">


    <div class=" d-flex flex-wrap">

      <img src="images/logocolorecambiato5.png" alt="logo" class="logo" width="200px" height="152px">

      <div class="inline  ">
        <h3>Med srl </h3>
        <p>Via Fontevivo. 21 L - 19124 La Spezia (SP) </p>
        <p> P. IVA / CF. 01346970112</p>
        <p>Iscritta al Registro delle Imprese di La Spezia </p>
        <p>Numero Iscrizione SP-121233 </p>
        <p class="format"><a href="#">Policy</a> |<a href="#"> Cookie</a> </p>



      </div>
    </div>
    <div >
      <div id="dark-mode-toggle" class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
        <label  class="form-check-label" for="flexSwitchCheckDefault"></label><i class="fas fa-moon fa-lg"></i>
      </div>

    </div>

    <div class="menu-footer">

      <ul>
        <li> <a href="#">Chi siamo</a> </li>
        <li> <a href="#">Portfolio</a> </li>
        <li> <a href="#">Contatti</a> </li>
        <li> <a href="#">Novità dal Blog</a> </li>
        <li> <a href="#">Lavora con noi</a> </li>
      </ul>
    </div>





  </div>

  <div class="copyright"> copyright © 2002 - <?php echo date("Y") ?> Emotion Design</div>

</footer>


<div id="toast"></div>




<script src="js/mdb.min.js"></script>
<script>
  function showToast(message, position, type) {
    const toast = document.getElementById("toast");
    toast.className = toast.className + " show";

    if (message) toast.innerText = message;

    if (position !== "") toast.className = toast.className + ` ${position}`;
    if (type !== "") toast.className = toast.className + ` ${type}`;

    setTimeout(function() {
      toast.className = toast.className.replace(" show", "");
    }, 6000);
  }
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="./js/main.js"> </script>

<script>
  $(document).ready(function() {
  });




  $(document).ready(function() {
  });


 /*  $(document).ready(function() {
    $('.slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      speed: 300,
      dots: true,
      arrows: false,
      responsive: [{
        breakpoint: 767, // breakpoint per dispositivi mobili
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
        }
      }]
    });
  }); */
</script>
<script>
 /*  $(document).ready(function() {
    $('.slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      speed: 300,
      dots: false,
      arrows: true, // impostiamo la proprietà arrows a true
      prevArrow: '<button type="button" class="slick-prev">Previous</button>', // aggiungiamo il pulsante per lo scorrimento a sinistra
      nextArrow: '<button type="button" class="slick-next">Next</button>', // aggiungiamo il pulsante per lo scorrimento a destra
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: true,
          prevArrow: '<button type="button" class="slick-prev">Previous</button>',
          nextArrow: '<button type="button" class="slick-next">Next</button>',
        }
      }]
    });
  }); */



</script>

<?php get_message();  ?>

</body>

</html>