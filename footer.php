<!-- ==========================================
FOOTER
========================================== -->

    <footer>
      <div class="footer-row-top">
        <a href="<?php bloginfo('url'); ?>"><img class="main-nav-logo" src="images/logo-black.svg" alt="<?php bloginfo('name'); ?>"></a>
        <ul class="footer-social-media">
          <li class="footer-social-media__item"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i><a></li>
          <li class="footer-social-media__item"><a href="https://github.com/egmatti" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
          <li class="footer-social-media__item"><a href="https://www.linkedin.com/in/egmatti/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li class="footer-social-media__item"><a href="https://www.pinterest.com/egmattison/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
          <li class="footer-social-media__item--last"><a href="https://twitter.com/egmattison" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="footer-row-bottom">
        <ul class="main-nav">
          <li class="main-nav__item--first"><a href="about.html">About</a></li>
          <li class="main-nav__item"><a href="work.html">Work</a></li>
          <li class="main-nav__item--last"><a href="the-latest.html"><span>the   </span>Latest</a></li>
        </ul>
        <span class="footer-copyright">&copy; Emily Mattison <?php echo date('Y'); ?> &bull; All Rights Reserved</span>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
