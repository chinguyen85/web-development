        </div>

        <div class="right-col col-md-6">
          <img src="https://getbootstrap.com/docs/5.3/assets/img/bootstrap-themes@2x.png" alt="getBootstrap">
        </div>
    </div><!-- body-page end -->

    <footer class="row mb-0">
      <div class="col-sm-4">&copy Chi Nguyen 2024.</div>
      <div class="col-sm-5">
          <ul>
            <li class="center-item"><a href="ex1.php">Home</a></li>
            <li class="center-item"><a href="about.php">About</a></li>
            <li class="center-item"><a href="contact.php">Contact</a></li>
          </ul>
      </div>
      <div class="col-sm-3">
        <ul class="social">
          <li class="social-network"><a href="https://www.facebook.com/"><img src="./images/facebook-new.png"/></a></li>
          <li class="social-network"><a href="https://www.gmail.com/"><img src="./images/google-plus.png"/></a></li>
          <li class="social-network"><a href="https://www.instagram.com/"><img src="./images/instagram-new.png"/></a></li>
          <li class="social-network"><a href="https://www.linkedin.com/"><img src="./images/linkedin.png"/></a></li>
          <li class="social-network"><a href="https://www.github.com/"><img src="./images/github.png"/></a></li>
        </ul>
      </div>
      <!-- Copyright
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy Chi Nguyen 2024. All rights reserved.
      </div> Copyright end-->
      <hr>
      <?php
        $fileName = basename($_SERVER['PHP_SELF']);
        $getModifiedTime = filemtime($fileName);
        $lastModifiedTime = date("F j, Y H:i:s", $getModifiedTime);
        echo "<p><i>Last modified " . $fileName . " on " . $lastModifiedTime . ".</i></p>";
      ?>
    </footer>
  </div><!-- container end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>