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
            <div class="row-fluid">
                <!-- Page Title -->
                <div id="page-title">
                    <h2>Coaches</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid">
                <!-- Standard Structure -->
                <div class="span8">
                    <div class="headline"><h4>What we Do?</h4></div>
                    <p>Donec odio ut arcu fringilla dictum eu eu nisl. Donec rutrum erat non arcu gravida porttitor. Nunc et magna nisi.Aliquam at erat in purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas. Maecenas ut nulla quis eros scelerisque posuere vel vitae nibh. Proin id condimentum sem. Morbi vitae dui in magna vestibulum suscipit vitae vel nunc. Integer ut risus nulla. malesuada tortor, nec scelerisque lorem mattis.</p>
                    <p>Nunc et rutrum consetetur sadipscing elitr, sed diam nonumy at volutpat. Sed consectetur suscipit lorem nunc.adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum</p>
                    <p>Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed tetur suscipit nunc et rutrum. </p>
                </div>

                <div class="span4">
                    <div class="headline "><h4>Do this</h4></div>

                    <!-- Large Notice -->
                    <div class="well">
                        <h2>Do that</h2>
                        <p>See how it goes</p>
                        <button type="button" class="btn btn-inverse">Ping</button>
                    </div>

                </div>
                <!-- Standard Structure End -->
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