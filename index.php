<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Belvoir Tri Club</title>
        <?php include 'common/css.php'; ?>

    </head>
    <body>
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

            <!-- Flex Slider -->

            <section class="slider">
                <div class="flexslider home">
                    <ul class="slides">

                        <li><img src="images/sessions/bike/parkrun.jpg" alt="" /></li>
                        <li><img src="images/sessions/bike/bike-ride.jpg" alt="" /></li>
                        <!--<li><img src="http://placehold.it/940x400/72B626/ffffff/&text=Big Responsive Slider" alt="" /></li>
                        <li><img src="http://placehold.it/940x400/C71C77/ffffff/&text=Banner+with+Caption" alt="" />-->
                            <div class="slide-caption">
                                <h3>This is a caption</h3>
                                <p>Donec scelerisque aliquet mi, non venenatis urnas iaculis. Utea id nila ante. Cras est massa, interdum  ateal imperdiet etean, gravida eu quame. Aeneana volutpat hendrerit posuere.</p>
                            </div>
                        </li>


                    </ul>
                </div>
            </section>

            <!-- Flex Slider / End -->

            <!-- Features Start -->
            <div class="row-fluid">
                <div class="headline margintop marginbottom"><h4>Features</h4></div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                    <div class="featuresbox">
                        <div class="feature-image"><img src="images/laptop-icon.png"></div>
                        <h4>responsive design</h4>
                        <p>Aliquam a nisi sed turpis ornare volutpat a nec massa. Sed sceler isque ultricies vulputate.</p>
                        <button type="button" class="btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper / End -->

        <!-- Footer -->

        <!-- Footer Top -->
        <div id="footer" class="container-fluid paddingbottom" >


            <div class="row-fluid">

                <!-- About -->
                <div class="span3">
                    <div class="footer-headline"><h4>About Us</h4></div>
                    <p>Belvoir Tri Club is based in and around the Vale Of Belvoir 
                        centered in Grantham. Founded in 2012 by a group of like-minded 
                        individuals who wanted to form their own relaxed and friendly 
                        triathlon club.</p>
                    <div><object><param name="movie" value="http://www.britishtriathlon.org/assets/flash/membership/TriEng_FullBanner_468x60pixels.swf?referrer1=PPCL&referrer2= 14belvoir02"> <param name="wmode" value="opaque" /><embed wmode="opaque" src="http://www.britishtriathlon.org/assets/flash/membership/TriEng_FullBanner_468x60pixels.swf?referrer1=PPCL&referrer2=14belvoir02" width="550" height="109" ></embed></object>
                    </div>
                </div>


                <!-- Photo Stream -->
                <div class="span3">
                    <div class="footer-headline"><h4>Photo Stream</h4></div>
                    <div class="flickr-widget">
                        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=26662207@N00"></script>
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Latest Tweets -->
                <div class="span3">
                    <div class="footer-headline"><h4>Latest Tweets</h4></div>
                    <ul id="twitter"></ul>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            $.getJSON('http://api.twitter.com/1/statuses/user_timeline/wrapbootstrap.json?count=2&amp;callback=?', function (tweets) {
                                $("#twitter").html(tz_format_twitter(tweets));
                            });
                        });
                    </script>
                    <div class="clear"></div>
                </div>

            </div>

        </div>
        <!-- Footer   -->
        <?php include 'common/footer.php'; ?>
        <!-- Footer / End -->


    </div> <!-- /container -->



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