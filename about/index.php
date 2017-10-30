<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>About the Club</title>
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
                <p>
                    <img class="thumbnail" src="../images/events/btc-group-1-s.jpg" align="right" alt="2016 Training with Lucy & Mark">
                    Belvoir Tri Club is based in and around the Vale Of 
                    Belvoir centered in Grantham. Founded in 2012 by a 
                    group of like-minded individuals who wanted to form 
                    their own relaxed and friendly triathlon club. In 2014 
                    the club has seen an injection of new committee members 
                    who have moved the club from a group of mates to the 
                    latest and best club in Lincolnshire.
                </p>
                <p>
                    Our members range from first time novices through to the seasoned 
                    pro, aging from 18 to 60+. Members race over every distance from Sprint to 
                    Ironman. For a young club, we are very proud that a growing number of our 
                    members have represented the GB age group team at European and World Championship Level.
                </p>
                <p>
                    As the club has grown, so too has its members’ interests and we now consider ourselves as a multi sports club 
                    with members regularly taking part in triathlons, cycling, open water swimming and running races.
                </p>
                
                <p>
                    We are affiliated to <a href="http://www.triathlonengland.org/" target="_blank">Triathlon England</a>, 
                    <a href="http://www.britishathletics.org.uk/" target="_blank">UKA</a> and 
                    <a href="https://www.cyclingtimetrials.org.uk/" target="_blank">CTT</a>.
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
            });
        </script>
    </body>
</html>
