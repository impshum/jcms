<?php
include 'assets/php/header.php';
include 'assets/php/chip.php';
?>
<audio id="audio" src="http://localhost/~impshum/rffj/assets/log/log.mp3"></audio>
<img id="log" src="assets/img/admin.jpg" style="border: 0; cursor: pointer; max-width: 100%;">
</div>
</div>
<div class="black centered">
  <h5 data-aos="slide-up" data-aos-once="true">Get In Touch</h5>
  <a href="#" class="button contact-btn" data-aos="zoom-in" data-aos-once="true"><i class="icon-envelope"></i></a>
</div>
<div class="norm">
  <div class="row centered" data-aos="zoom-in" data-aos-once="true">
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
<script>
var playBtn = document.getElementById('log');
var playSound = function() {
	audio.play();
  setTimeout(function(){
    window.location.href = "/";
  }, 5000);
};
playBtn.addEventListener('click', playSound, false);
</script>
</body>

</html>
