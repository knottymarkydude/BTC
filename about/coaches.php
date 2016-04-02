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
                <div class="row">
                    <!-- Page Title -->
                    <div id="page-title">
                        <h2>Coaches</h2>
                    </div>
                    <!-- Page Title / End -->
                </div>
                <div class="row-fluid">
                    <!-- Standard Structure -->

                    <div class="col-md-4">
                        <img src="../images/coaches/karlhunt300.jpg" alt="" class="img-circle"/>
                        <div class="staff"><h5>Karl Hunt</h5> <span>L2 Coach</span>
                            <span>
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;karl@belvoirtriclub.co.uk
                            </span>
                        </div>


                    </div>

                    <div class="col-md-4">
                        <img src="../images/coaches/martinjolly300.jpg" alt="" class="img-circle"/>
                        <div class="staff"><h5>Martin Jolly</h5> <span>L2 Coach</span>
                            <span>
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;martin@belvoirtriclub.co.uk
                            </span>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <img src="../images/coaches/markwilson300.jpg" alt="" class="img-circle"/>
                        <div class="staff"><h5>Mark Wilson</h5> <span>L2 Coach</span><span>
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;markw@belvoirtriclub.co.uk</span></div>

                    </div>
                    <div class="col-md-4">
                        <img src="../images/coaches/geryhyde300.jpg" alt="" class="img-circle"/>
                        <div class="staff"><h5>Gerry Hyde</h5> <span>L2 Coach</span><span>
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;gerry@belvoirtriclub.co.uk</span></div>


                    </div>
                    <div class="col-md-4">
                        <img src="../images/coaches/catherinedavies300.jpg" alt="" class="img-circle"/>
                        <div class="staff"><h5>Catherine Davies</h5> <span>L1 Coach</span><span>
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;catherine@belvoirtriclub.co.uk</span></div>


                    </div>

                    <div class="col-md-4">
                        <img src="../images/coaches/clairearmstrong300.jpg" alt="" class="img-circle"/>
                        <div class="staff"><h5>Claire Armstrong</h5> <span>L1 Coach</span><span>
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;claire@belvoirtriclub.co.uk</span></div>


                    </div>
                    <div class="col-md-4">
                        <img src="../images/coaches/chrispugh300.jpg" alt="" class="img-circle"/>
                        <div class="staff"><h5>Chris Pugh</h5> <span>L1 Coach</span><span>
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;chris@belvoirtriclub.co.uk</span></div>


                    </div>
                    <div class="col-md-4">
                        <img src="../images/coaches/mickoliver300.jpg" alt="" class="img-circle"/>
                        <div class="staff"><h5>Mick Oliver</h5> <span>L1 Coach</span><span>
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;mick@belvoirtriclub.co.uk</span></div>
                    </div>
                </div>    
                <div class="col-md-4">
                    <img src="../images/coaches/staff-1.jpg" alt="" class="img-circle"/>
                    <div class="staff"><h5>Ashleigh Graham</h5> <span>L1 Coach</span><span>
                            <i class="glyphicon glyphicon-envelope"></i>&nbsp;ashleigh@belvoirtriclub.co.uk</span></div>


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
                $("#about").addClass("active");
            });
        </script>
    </body>
</html>