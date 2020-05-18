</section>
</body>

<!--FOOTER*======================================================-->
<footer class="footer has-background" style="background-color:#f5f5f5">
    <div class="content has-text-centered has-text-black">
    <div class="columns is-desktop">
        <div class="column">
            <h4 class="footer_header" >About Us</h4>
            <p>Because the icons can take a few seconds to load, and because you want control over the space the icons will take, you can use the</p>
        </div>
        <div class="column">
            <h4 class="footer_header">Contact</h4>
            <i class="far fa-envelope"></i> name@gmail.com <br><br>
            <i class="fas fa-phone"></i> 055 5654 566 <br><br>
            <i class="fas fa-map-marker-alt"></i> Bandarapura, Passara Road, Badulla <br>
        </div>
        <div class="column">
            <h4 class="footer_header">Follow Us</h4>
            <a class="button is-medium is-facebook">
                <span class="fab fa-facebook"></span>
              </a>
              <a class="button is-medium is-twitter">
                <span class="fab fa-twitter"></span>
              </a>
              <a class="button is-medium is-google">
                <span class="fab fa-google"></span>
              </a>
        </div>
        
      </div>
</div>

 </footer>

<!--FOOTER bar end*======================================================-->
</html>

<script>

document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});

</script>