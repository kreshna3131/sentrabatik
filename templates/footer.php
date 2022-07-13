<!-- footer -->
<!-- <footer id="footer">
    <div class="container">
      <h3>Contact Me</h3>
      <p>You can Contact Me at </p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="fab fa-instagram"></i></a>
        <a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
        <a href="#" class="instagram"><i class="fab fa-github"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>kosong</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Design With Love By <a href="">kosong</a>
      </div>
    </div>
  </footer> -->
<!-- akhir footer -->
</div>
<!-- akhir container -->


<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- My Script -->
<script src="assets/js/main.js"> </script>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Animejs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
  AOS.init({
    once: true
  });

  $('#openNav').on('click', function() {
    $('#myNav').css("width", "100%");
  });

  $('#closeNav').on('click', function() {
    $('#myNav').css("width", "0%");
  });


  function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }

  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
</script>
</body>

</html>