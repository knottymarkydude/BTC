<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Club Documents</title>
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
                <h1>AGM Documents</h1>
                <p>A list of the minutes from the club AGM's</p>
                <p><span class="glyphicon glyphicon-book"></span>&nbsp;
                    <a href="../docs/agm/BELVOIR-TRIATHLON-CLUB-AGM-Minutes-051015.pdf">AGM 2015</a>
                </p>
                <p><span class="glyphicon glyphicon-book"></span>&nbsp;
                    <a href="../docs/agm/BTC-AGM-Minutes-October-2016.pdf">AGM 2016</a>
                </p>
                
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
                console.log(str);
                $('#nav li a').each(function () {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#clubdocs").addClass("active");
            });
        </script>
    </body>
</html>