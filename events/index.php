<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Events - Belvoir Tri Club</title>
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
                <div class="col-md-6 portfolio-item">
                    <div class="picture"><a href="/events/gotri/go-tri.php" rel="image" title="Go-Tri"><img src="/images/events/go-tri-400.png" alt=""/><div class="image-overlay-zoom"></div></a></div>
				<div class="item-description alt">
                                    <h5><a href="/events/gotri/go-tri.php">Go-Tri</a></h5>
				<p>The Belvoir Tri Club GO Tri Aquathlon Series will take place at The Meres Leisure 
                                    Centre in Grantham and is first and foremost aimed at newcomers to the sport but 
                                    is open to all athletes of all abilities and levels of fitness. Due to there not 
                                    being a need for a bike, this is a great and low cost event (just £5) to embark 
                                    on your multisport calling.</p>
			</div>
		</div>
                <div class="col-md-6 portfolio-item">
                    <div class="picture"><a href="/events/gonerbytuff/index.php" rel="image" title="Gonerby Tuff"><img src="/images/events/gonerbytuff-400.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
				<div class="item-description alt">
                                    <h5><a href="/events/gonerbytuff/index.php">Gonerby Tuff - Off Road Duathlon</a></h5>
				<p></p>
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