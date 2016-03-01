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
<!-- Footer / Bottom -->