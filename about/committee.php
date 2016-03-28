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
                <h1>The Committee</h1>
                <div class="entry-content">
                    <p>The current committee is as follows:</p>
                    <p><strong>Chairman: </strong><a href="mailto:blake@belvoirtriclub.co.uk">Blake Hutchinson</a></p>
                    <p><strong>Club Secretary: </strong><a href="mailto:natalie@belvoirtriclub.co.uk">Natalie Eastaugh</a></p>
                    <p><strong>Treasurer: </strong><a href="mailto:louisep@belvoirtriclub.co.uk">Louise Payne</a></p>
                    <p><strong>Membership Secretary: </strong><a href="mailto:alistair@belvoirtriclub.co.uk">Alistair Knott</a></p>
                    <p><strong>Social Media Officer: </strong><a href="mailto:catherine@belvoirtriclub.co.uk">Catherine Davies</a></p>
                    <p><strong>Press Officer: </strong><a href="mailto:natalie@belvoirtriclub.co.uk">Natalie Eastaugh</a></p>
                    <p><strong>Training Coordinator: </strong><a href="mailto:ove@belvoirtriclub.co.uk">Ove Andresen</a></p>
                    <p><strong>Welfare Officer</strong>: <a href="mailto:louise@belvoirtriclub.co.uk">Louise Cann</a></p>
                    <p><strong>Clothing Coordinator:</strong> <a href="mailto:steve@belvoirtriclub.co.uk">Steve Squires</a></p>
                    <p><strong>Events Coordinator: </strong> <a href="mailto:markw@belvoirtriclub.co.uk">Mark Wilson</a></p>
                    <p><strong>Social Coordinator:</strong> <a href="mailto:neal@belvoirtriclub.co.uk">Neal Burnham</a></p>
                    <p><strong>GO-Tri Coordinator:</strong> <a href="mailto:steve@belvoirtriclub.co.uk">Steve Squires</a></p>

                </div>
            </div>
            <!-- Wrapper / End -->

            <!-- Footer   -->
            <?php include '../common/footer.php'; ?>
            <!-- Footer / End -->


        </div> <!-- /container -->



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