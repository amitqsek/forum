<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['U_ACP']) {  ?><strong><div class="text-center"><a class="btn btn-primary btn-sm mt-30" href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>">Go To <?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a></div></strong><?php } ?>

      </div>
    </div>

    <div>
      <a id="bottom" name="bottom" accesskey="z"></a>
      <?php if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

    </div>

  </div>

</div>
<!-- end Container Wrapper --><!-- start Footer Wrapper -->
<div class="footer-wrapper scrollspy-footer">
  <footer class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
          <div class="footer-logo mb-30"> <a href="/">Coin<strong class="uppercase">Mage</strong></a> </div>
          <div class="newsletter-footer mb-30">
            <form action="https://coinmage.us13.list-manage.com/subscribe/post?u=7a5ced4137158890f689332ee&amp;id=7984286963" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="row validate newsletter-form" novalidate>
              <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <div class="form-group">
                  <div id="mc_embed_signup_scroll">
                    <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email address">
                    <input type="submit" class="btn btn-submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe">
                  </div>
                  <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>
                </div>
              </div>
            </form>
            <script type='text/javascript' src="/assets/js/mc-validate.js" ></script>
            <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
          </div>
          <div class="social-footer mb-25"> <a href="https://www.facebook.com/coinmage" target="_blank"><i class="fa fa-facebook-official"></i></a> <a href="https://twitter.com/coinmage" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.instagram.com/coinmage/" target="_blank"><i class="fa fa-instagram"></i></a> <a href="mailto:support@coinmage.com" target="_blank"><i class="fa fa-envelope"></i></a> </div>
          <ul class="secondary-footer-menu no-mb">
            <li><a href="/">Home</a></li>
            <li><a href="/pricing">Pricing</a></li>
            <li><a href="/referral-program">Referral Program</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/support">Support</a></li>
            <li><a href="/forum">Forum</a></li>
            <li><a href="/contact-us">Contact US</a></li>
            <?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>

            <li><a href="/user/my-portfolio">My Account</a></li>
            <?php } else { ?>

            <li><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="x"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></li>
            <li><a href="/register">Register</a></li>
            <?php } ?>

          </ul>
        </div>
      </div>
    </div>
  </footer>
  <footer class="secondary-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <p class="copy-right text-center">Copyright &copy; 2018 Coinmage. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- end Footer Wrapper --><!-- start Back To Top -->
<div id="back-to-top"> <a href="#"><i class="ion-ios-arrow-up"></i></a> </div>
<!-- end Back To Top -->
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript" src="/assets/js/spin.min.js"></script> 
<script type="text/javascript" src="/assets/js/customs.js"></script>

</body>
</html>