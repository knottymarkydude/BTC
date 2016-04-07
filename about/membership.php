<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Membership - Belvoir Tri Club</title>
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
                <div class="col-md-8">

                    <h3>Membership</h3>
                    <p>
                        Belvoir Tri Club take pride in offering an unbelievably low membership fee with amazing benefits worth twice its value. 
                        Whether you are a Triathlete, Duathlete, Cyclist, Runner, or simply want to train with like-minded individuals, then this is the club for you. 
                        If you are interested in membership, please drop an email to <a href="mailto:info@belvoirtriclub.co.uk">info@belvoirtriclub.co.uk</a></p>

                    <img class="img-thumbnail" src="../images/sessions/run/parkrun300.jpg" align="left" alt="Membership">
                    <p>There are a bunch of member benefits including but not limited to:</p>
                    <ul class="list-unstyled">
                        <li>10% off one-to-one training with Tri-SL Training</li>
                        <li>10% off at Lincolnshire Runner</li>
                        <li>10% off at CycleSport Grantham</li>
                        <li>10% off Thomas Cook Charter Packages (<a href="mailto:info@belvoirtriclub.co.uk">email</a> us for details)</li>
                        <li>25% of all products at www.stoneandwater.co.uk</li>
                        <li>Free Sunday night when you book Friday and Saturday at www.thornsfarmleisure.co.uk</li>
                        <li>Discounted bike servicing from Fit2try</li>
                        <li>Discounted BTF membership</li>
                        <li>Access to great club kit</li>
                        <li>The opportunity to compete for the club and win club silverware.</li>
                    </ul>


                </div>
                <div class="col-md-4">
                    <div class="headline">
                        <h4>Join the Club</h4>
                    </div>
                    <div class="well">
                        <h2>Membership Options</h2>
                        <p>You can join as a single sport, dual sport, or multi-sport member. So, for example, if you just want to participate in the swimming sessions,
                            you can just join as a single sport member.</p>
                        <button id="joinus" type="button" class="btn btn-inverse">Join Now!</button>
                    </div>
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

            $("#joinus").click(function () {
                document.location.href='http://www.belvoirtrishop.co.uk/index.php?route=product/product&path=34&product_id=60';
            });

        </script>
    </body>
</html>