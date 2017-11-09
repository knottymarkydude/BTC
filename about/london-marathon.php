<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>London Marathon</title>
        <?php include '../common/css.php'; ?>

    </head><?php include 'common/analyticstracking.php'; ?>
    <body>
        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">
            <!-- Header -->
            <div class="ie-dropdown-fix" >
                <!-- Header -->
                <?php include '../common/header.php'; ?>
                <!-- Navigation -->
                <?php include '../common/navbar.php'; ?>
                <div class="nav-shadow"></div>
                <div class="clear"></div>
            </div>
            <!-- Navigation / End -->
            <!-- Content -->
            <div class="panel panel-body">
                <div class="col-md-8">

                    <h3>London Marathon Club Ballot</h3>
                    <p>
                        With our UK Athletics (UKA) affiliation we get one place in the London Marathon every year. 
                        The club ballot for a place at London Marathon is drawn at the Presentation Dinner  
                    </p>

                    <h4>How to qualify for the club ballot</h4>
                    <ul class="circle">
                        <li>To be UKA affiliated to BTC as first claim from May of the year have entered the London Marathon public ballot.</li>
                        <li>You must have entered the London Marathon public ballot, and had a rejection letter/ email.</li>
                        <li>Not have been a previous winner of the club ballot place.</li>
                        <li>Notify the committee before the presentation night that you have met the above conditions and wish to be in the club ballot.</li>
                    </ul>

                    <p>If you wish to enter the ballot, please click the link below</p>
                    <p><a href="mailto:info@belvoirtriclub.co.uk?subject=London%20Marathon%20Club%20Ballot">Enter me into the club London marathon ballot</a></p>
                </div>
                <div class="col-md-4">
                    <img class="img-thumbnail" src="../images/events/lm-image.jpg" alt="London Marathon"/>
                </div>
            </div>
            <!-- Footer   -->
            <?php include '../common/footer.php'; ?>
            <!-- Footer / End --> 
        </div>
        <!-- Wrapper / End -->
        <!-- Javascript -->
        <?php include '../common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function () {
                var str = location.href.toLowerCase();
                $('#nav li a').each(function () {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#about").addClass("active");
            });

            $("#enterballot").click(function () {

            });

        </script>
    </body>
</html>