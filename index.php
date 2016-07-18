<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belvoir Tri Club</title>
        <?php include 'common/head-data.php'; ?>
        <?php include 'common/css.php'; ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1465832813629637";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">
            <!-- Header -->
            <div class="ie-dropdown-fix" >
                <!-- Header -->
                <?php include 'common/header.php'; ?>
                <!-- Navigation -->
                <?php include 'common/navbar.php'; ?>
                <div class="nav-shadow"></div>
                <div class="clear"></div>

            </div>
            <!-- Navigation / End -->
            <!-- Content -->
            <div class="panel panel-body">
                <div class="row-fluid">
                    <div class="col-md-3">
                        <div class="widget no-margin">
                            <div class="headline no-margin"><h4>News</h4></div>
                            <a class="twitter-timeline" href="https://twitter.com/belvoirtri" data-widget-id="724286404319125504">Tweets by @belvoirtri</a>
                            <script>!function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");</script>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Flex Slider -->
                        <section class="slider">
                            <!--<div class="flexslider home">
                                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/markymarkdude/albums/72157667897069752" title="Grantham Sprint Tri 2016">
                                    <img src="https://farm8.staticflickr.com/7534/26291138563_8b9eb07b1b_z.jpg" alt="Grantham Sprint Tri 2016"></a>
                            </div>                        
                            <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>-->
                            <div class="flexslider home">
                                <ul class="slides">
                                    <li><img src="images/gallery/large/gallery-03.jpg" alt="First open water swim of the year" /></li>
                                    <li><img src="images/sessions/run/parkrun.jpg" alt="" /></li>
                                    <li><img src="images/sessions/bike/bike-ride.jpg" alt="" /></li>
                                    <li><img src="images/events/btc-classic-sportive-2016.jpg" alt="" /></li>
                                    <li><img src="images/events/stathern-duathlon-2016-1.jpg" alt="" /></li>
                                </ul>
                            </div>
                        </section>

                        <div class="widget no-margin">
                            <div class="headline no-margin"><h4>Latest</h4></div>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget no-margin">
                            <div class="headline no-margin"><h4>Coming Up</h4></div>
                        </div>
                        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=bhkkpl2ad67ij4r9hfteijskb4%40group.calendar.google.com&amp;color=%23711616&amp;ctz=Europe%2FLondon" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>    
                    </div>
                </div>
            </div>
            <!-- Footer   -->
            <?php include 'common/footer.php'; ?>
            <!-- Footer / End -->
        </div>
        <!-- Wrapper / End -->

        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
        <script type="text/javascript">
                                $(document).ready(function () {
                                    var str = location.href.toLowerCase();
                                    console.log(str);
                                    $('#nav li a').each(function () {
                                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                                            $(this).addClass("active");
                                        }
                                    });
                                });
        </script>
    </body>
</html>