<footer class="content-info" role="contentinfo">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="footer-logo"><img alt="Selkirk Mountain Helicopters" src="/assets/img/logo-white-160x150.png" width="160" height="150" /></div>
      </div>
      <div class="col-md-4">
        <div class="footer-address">
          <p>530 Westside Road<br>
          PO Box 2968<br>
          Revelstoke, BC V0E 2S0<br>
          <a href="mailto:info@smheli.com">info@smheli.com</a><br>
          GPS N 51 02.123 W 118 13.498<br>
          Altitude 1550'</p>
        </div>
      </div>
      <div class="col-md-4">
        <span class="footer-phone">1-250-837-2455</span> <span class="footer-description">PHONE</span><br>
        <span class="footer-fax">1-250-837-4066</span> <span class="footer-description">FAX</span><br>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 copyright">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        <span class="pull-right">Site::<a href="http://monasheemountainmultimedia.com" target="_blank" title="Monashee Mountain Multimedia">MMM</a></span</p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>