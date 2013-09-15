<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php dynamic_sidebar('sidebar-footer'); ?>
        <div class="footer-logo"><img alt="Selkirk Mountain Helicopters" src="/assets/img/logo-white-160x150.png" width="160" height="150" /></div>
        <div class="footer-address">
          <p>530 Westside Road<br>
          PO Box 2968<br>
          Revelstoke, BC V0E 2S0<br>
          <span class="footer-phone">250-837-2455</span><br>
          <span class="footer-fax">250-837-4066</span><br>
          <a href="mailto:info@smheli.com">info@smheli.com</a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 copyright">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>