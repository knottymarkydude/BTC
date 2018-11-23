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
