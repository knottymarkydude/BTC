<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Belvior Tri Club</title>
        <?php include 'common/css.php'; ?>

    </head>
    <body>

        <!-- Header -->
        <?php include 'common/header.php'; ?>
        <!-- Header / End -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <!-- Navigation -->
            <?php include 'common/navbar.php'; ?>
            <!-- Navigation / End -->
        </nav>

        <div class="container">

            <div class="starter-template">
                <h1>Bootstrap starter template</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            </div>

        </div><!-- /.container -->

        <!-- Footer   -->
        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
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