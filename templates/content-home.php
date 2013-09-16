<?php
/**
 * Homepage with slider
 *
 * @author  Derek Marcinyshyn <derek@marcinyshyn.com>
 * @date    September 14, 2013
 */
?>
<div id="smh-home-slider" class="carousel slide smh-home-slider">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#smh-home-slider" data-slide-to="0" class="active"></li>
    <li data-target="#smh-home-slider" data-slide-to="1"></li>
    <li data-target="#smh-home-slider" data-slide-to="2"></li>
    <li data-target="#smh-home-slider" data-slide-to="3"></li>
    <li data-target="#smh-home-slider" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/assets/img/slider/landing-blake-jorgenson.jpg" alt="">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="/assets/img/slider/gsmy-fly-by.jpg" alt="">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="/assets/img/slider/rock-outcrop-pickup.jpg" alt="">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="/assets/img/slider/red-bull.jpg" alt="">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="/assets/img/slider/parks-canada.jpg" alt="">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#smh-home-slider" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#smh-home-slider" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    });
  });
</script>
<p>&nbsp;</p>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>