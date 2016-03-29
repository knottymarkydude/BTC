<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gallery</title>
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
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/11406786_847909845300414_7028643864143648138_n.jpg"  title="Image Title">
                            <img src="../images/gallery/small/11406786_847909845300414_7028643864143648138_n.jpg" alt=""/>
                            <div class="image-overlay-zoom">
                            </div>
                        </a>            
                    </div>
                    <div class="item-description">
                        <h5><a href="#">Image Title</a></h5>
                        <p>Description of the Image</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/535258_10208973249952638_4284778039965017177_n.jpg" title="Image Title"><img src="../images/gallery/small/535258_10208973249952638_4284778039965017177_n.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Image Title</a></h5>
                        <p>Description of the Image</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/5512_910343015751549_115314690399368639_n.jpg" title="Image Title"><img src="../images/gallery/small/5512_910343015751549_115314690399368639_n.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Image Title</a></h5>
                        <p>Description of the Image</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/5744_10100186467182863_8391701276193427314_n.jpg" title="Image Title"><img src="../images/gallery/small/5744_10100186467182863_8391701276193427314_n.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Image Title</a></h5>
                        <p>Description of the Image</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/11406786_847909845300414_7028643864143648138_n.jpg" title="Image Title"><img src="../images/gallery/small/11406786_847909845300414_7028643864143648138_n.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Image Title</a></h5>
                        <p>Description of the Image</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/535258_10208973249952638_4284778039965017177_n.jpg" title="Image Title"><img src="../images/gallery/small/535258_10208973249952638_4284778039965017177_n.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Image Title</a></h5>
                        <p>Description of the Image</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture fancybox">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/5512_910343015751549_115314690399368639_n.jpg" title="Image Title"><img src="../images/gallery/small/5512_910343015751549_115314690399368639_n.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Image Title</a></h5>
                        <p>Description of the Image</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="picture">
                        <a class="fancybox" rel="gallery1" href="../images/gallery/large/5744_10100186467182863_8391701276193427314_n.jpg" title="Image Title"><img src="../images/gallery/small/5744_10100186467182863_8391701276193427314_n.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Image Title</a></h5>
                        <p>Description of the Image</p>
                    </div>
                </div>
                
            </div>
            <!-- End Content -->
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
                $(".fancybox").fancybox();
            });
            
            
	
		
        </script>
    </body>
</html>