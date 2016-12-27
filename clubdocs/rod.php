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

    </head>
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
                <h1 class='headline'>Records Of Decision</h1>
                <div>
                    <p><span class="glyphicon glyphicon-book"></span>&nbsp;<a href="../docs/rod/20150127-BTC_RoDs.pdf">Committee Meeting - 27 Jan 2015</a></p>
                    <p><span class="glyphicon glyphicon-book"></span>&nbsp;<a href="../docs/rod/20150318-BTC_RoDs.pdf">Committee Meeting - 18 March 2015</a></p>
                    <p><span class="glyphicon glyphicon-book"></span>&nbsp;<a href="../docs/rod/20150508-BTC_RoDs.pdf">Committee Meeting - 5 May 2015</a></p>
                    <p><span class="glyphicon glyphicon-book"></span>&nbsp;<a href="../docs/rod/20150623-BTC_RoDs.pdf">Committee Meeting - 15 June 2015</a></p>
                    <p><span class="glyphicon glyphicon-book"></span>&nbsp;<a href="../docs/rod/20150902-BTC_RoDs.pdf">Committee Meeting - 1 Sept 2015</a></p>
                    <p><span class="glyphicon glyphicon-book"></span>&nbsp;<a href="../docs/rod/20150911-BTC-RODs.pdf">Committee Meeting - 9 Nov 2015</a></p>
                    <p><span class="glyphicon glyphicon-book"></span>&nbsp;<a href="../docs/rod/20160111-BTC-RODs.pdf">Committee Meeting - 11 Jan 2016</a></p>
                    <p><span class="glyphicon glyphicon-book"></span>&nbsp;<a href="../docs/rod/20161031-BTC-RODs.pdf">Committee Meeting - 31 Oct 2016</a></p>

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