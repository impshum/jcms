  </div>
</div>
<div class="black centered">
    <h5>Get In Touch</h5>
    <a href="#" class="button contact-btn"><i class="icon-envelope"></i></a>
</div>
<div class="norm">
    <div class="row centered">
        <h5>Connect with Us</h5>
        <div class="social">
            <?php include 'assets/php/social.php'; ?>
        </div>
    </div>
    <div class="row copy centered">
    <p>
    <?php
      date_default_timezone_set("Europe/London");
      echo "© ".($sitestartdate==date("Y")?$sitestartdate:"$sitestartdate-".date("Y "));
      echo $sitecopyright;
    ?>
    </p>
    </div>
</div>

</div>
<!-- END WRAPPER -->
<div id="nav" class="overlay">
  <a href="javascript:void(0)" class="closebtn wait">&times;</a>
  <div class="overlay-content">
    <div class="menu-list">
    <?php include 'assets/php/menu.php'; ?>
    </div>
  </div>
</div>

<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/colcade.js"></script>
<script src="assets/js/ipsum.js"></script>

</body>

</html>
