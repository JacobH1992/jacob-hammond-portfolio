<script src='/js/modernizr.custom.min.js'></script>
<script src='/js/all.js'></script>

<?php if($isHome): ?>
    <script src='/js/index.js'></script>
<?php endif; ?>

<script src='/js/wow.min.js'></script>
<script>
var wow = new WOW(
  {
    boxClass:     'wow',        // animated element css class (default is wow)
    animateClass: 'animated',   // animation css class (default is animated)
    offset:       200,          // distance to the element when triggering the animation (default is 0)
    mobile:       false         // trigger animations on mobile devices (true is default)
  }
);
new WOW().init();
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37082315-1', 'jacobhammond.co.uk');
  ga('send', 'pageview');
</script>