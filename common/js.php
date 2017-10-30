<!-- Latest compiled and minified JavaScript -->
<script src="/js/jquery.min.js"></script>
<script src="/js/selectnav.js"></script>
<script src="/js/flexslider.js"></script>
<script src="/js/twitter.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/modalbox.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/js/jquery.mousewheel.pack.js"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<script type="text/javascript" src="/js/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="/js/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="/js/jquery.fancybox-thumbs.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60335828-3', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
    $("#nav li > a").click( function() {
    // push a command onto the piwik stack. We're calling "trackEvent" and
    // passing three arguments: the category of the event, an action, and a
    // name for the event. In this case we want to track which menu item was
    // clicked.
        console.log("This: " + this.text);
         _paq.push( [ "trackEvent", "Navbar", "clicked", this.text ] );
    });

</script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik-piwik-01.1d35.starter-us-east-1.openshiftapps.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
