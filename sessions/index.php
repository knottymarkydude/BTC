<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sessions</title>
        <?php include '../common/css.php'; ?>

    </head><?php include '/common/analyticstracking.php'; ?>
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
                <h1>Club Sessions</h1>
                <h3>Swim Sessions</h3>
                <ul>
                    <li>Monday Morning (All year round) - 6am at the Meres Leisure Centre</li>
                    <li>Saturday Morning (All year round) - 7am at the Meres Leisure Centre</li>
                </ul>
                <h3>Bike Sessions</h3>
                <ul>
                    <li>Tuesday Night (Summer season) - 7pm at the Meres Leisure Centre</li>
                    <li>Tuesday Night - Turbo (Starts in January) - TBA</li>
                    <li>Sunday morning - (All year round) - 9am at the Meres Leisure Centre.</li>
                </ul>
                <p>We have a number of bike routes that we use for the bike rides, that can be found <a href="bikeroutes.php">here.</a></p>
                <button id="bikeroutes" class="btn btn-info">Bike Routes</button>
                
                <h3>Run Sessions</h3>
                <ul>
                     <li>Wednesday night (Winter months - Joint session with GAC, and GRC) - 7pm at the Meres Stadium. All abilities welcome.</li>
                    <li>Thursday night (All year round) - 7pm at the Meres Leisure Centre. All abilities welcome.</li>
                </ul>
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
                $("#sessions").addClass("active");
                
                $("#bikeroutes").click(function () {
                document.location.href='bikeroutes.php';
            });
            });
        </script>
    </body>
</html>
