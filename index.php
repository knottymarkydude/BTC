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
                    </ul>
                </div>
            </section>
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