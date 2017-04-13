<?php include 'assets/php/index-header.php'; ?>
    <div class="wrapper">

        <div class="container main" id="top">
            <div class="title centered">
                <div class="t" data-aos="zoom-out" data-aos-once="true"><?php echo $title; ?></div>
                <div class="st" data-aos="zoom-out" data-aos-once="true"><?php echo $subtitle; ?></div>
                <a class="button menu-btn hoverme" onclick="openNav()" data-aos="zoom-in" data-aos-once="true"><span>MENU</span></a>
            </div>
            <div class="row">
                <div class="four columns" data-aos="zoom-out" data-aos-offset="0" data-aos-once="true">
                    <div><i class="icon-<?php echo $block1icon; ?> righto" data-aos="zoom-in" data-aos-offset="0"></i><?php echo $block1title; ?></div>
                    <?php echo $block1;?>
                </div>
                <div class="four columns" data-aos="zoom-out" data-aos-offset="50" data-aos-once="true">
                    <div><i class="icon-<?php echo $block2icon; ?> righto" data-aos="zoom-in" data-aos-offset="50" ></i><?php echo $block2title; ?></div>
                    <?php echo $block2;?>
                </div>
                <div class="four columns" data-aos="zoom-out" data-aos-offset="100" data-aos-once="true">
                    <div><i class="icon-<?php echo $block3icon; ?> righto" data-aos="zoom-in" data-aos-offset="100" ></i><?php echo $block3title; ?></div>
                    <?php echo $block3;?>
                </div>
            </div>
        </div>
        <div class="container text user">
            <div class="row mainly" data-aos="fade-up" data-aos-once="true">
                <?php echo $main;?>
            </div>
        </div>
        <div class="container bott">
          <div class="row">
              <div class="four columns" data-aos="zoom-out" data-aos-offset="0" data-aos-once="true">
                  <div><i class="icon-<?php echo $block4icon; ?> righto" data-aos="zoom-in" data-aos-offset="0"></i><?php echo $block4title; ?></div>
                  <?php echo $block4;?>
              </div>
              <div class="four columns" data-aos="zoom-out" data-aos-offset="50" data-aos-once="true">
                  <div><i class="icon-<?php echo $block5icon; ?> righto" data-aos="zoom-in" data-aos-offset="50" ></i><?php echo $block5title; ?></div>
                  <?php echo $block5;?>
              </div>
              <div class="four columns" data-aos="zoom-out" data-aos-offset="100" data-aos-once="true">
                  <div><i class="icon-<?php echo $block6icon; ?> righto" data-aos="zoom-in" data-aos-offset="100" ></i><?php echo $block6title; ?></div>
                  <?php echo $block6;?>
              </div>
<!-- LEAVE LAST 2 DIVS OPEN - THE FOOTER GRABS THEM -->
<?php include 'assets/php/footer.php'; ?>
