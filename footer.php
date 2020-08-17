    <footer id="footer">
      <div class="container">

          <div class="row"class="widget-area"> 
            <?php if ( ! dynamic_sidebar( 'footer' ) ) : ?>       
            <?php endif; // end sidebar widget area ?>
                 کپی‌رایت &copy; <?php echo Date('Y'); ?> - تمامی حقوق محفوظ است.<br>
                طراحی: <a href="http://arazgholami.com">آراز غلامی</a>
            </div>
          </div>        
      </div>
    </footer>        
                        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>