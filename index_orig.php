<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belvoir Tri Club</title>
        <?php include 'common/css.php'; ?>
    </head><?php include '/common/analyticstracking.php'; ?>
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
            <div class="panel panel-body">
                <div class="row-fluid">
                    <div class="col-md-8">
                        <!-- Flex Slider -->
                        <section class="slider">
                            <div class="flexslider home">
                                <ul class="slides">
                                    <li><img src="images/sessions/run/parkrun.jpg" alt="" /></li>
                                    <li><img src="images/sessions/bike/bike-ride.jpg" alt="" /></li>
                                    <li><img src="images/events/btc-classic-sportive-2016.jpg" alt="" /></li>
                                    <li><img src="images/events/stathern-duathlon-2016-1.jpg" alt="" /></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4">
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